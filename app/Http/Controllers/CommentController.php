<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;


class CommentController extends Controller
{
        
       public function dashboard()
    {
       
        $positiveCount = Comment::where('sentiment', 'positive')->count() ?? 0;
        $negativeCount = Comment::where('sentiment', 'negative')->count() ?? 0;
        $neutralCount  = Comment::where('sentiment', 'neutral')->count() ?? 0;
        $totalCount    = Comment::count()?? 0;

        $chartData = Comment::select(
                DB::raw('DATE(created_at) as date'),
                DB::raw('SUM(CASE WHEN sentiment = "positive" THEN 1 ELSE 0 END) as positive'),
                DB::raw('SUM(CASE WHEN sentiment = "negative" THEN 1 ELSE 0 END) as negative'),
                DB::raw('SUM(CASE WHEN sentiment = "neutral" THEN 1 ELSE 0 END) as neutral')
            )
            ->groupBy('date')
            ->orderBy('date', 'asc')
            ->get();

        return view('index', compact(
            'positiveCount',
            'negativeCount',
            'neutralCount',
            'chartData',
            'totalCount'
        ));
    }


    public function create()
    {
        return view('comment');
    }

        public function store(Request $request)
    {
        $request->validate([
            'comment' => 'required|string',
        ]);

        $commentText = $request->comment;

        $apiKey = env('HUGGINGFACE_API_KEY'); 
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $apiKey
        ])->post(
            'https://api-inference.huggingface.co/models/distilbert/distilbert-base-uncased-finetuned-sst-2-english',
            ['inputs' => $commentText]
        );

        $result = $response->json();

       
        $sentiment = $result[0][0]['label'] ?? 'NEUTRAL';
        $score     = $result[0][0]['score'] ?? null;

       
        Comment::create([
            'comment'   => $commentText,
            'sentiment' => strtolower($sentiment),
            'score'     => $score,   
        ]);

       
        return redirect()->back()->with([
            'sentiment' => strtolower($sentiment),
            'score'     => $score
        ]);
    }


    public function results()
{
    $comments = Comment::orderBy('created_at', 'desc')->get();
    return view('result', compact('comments'));
}

}
