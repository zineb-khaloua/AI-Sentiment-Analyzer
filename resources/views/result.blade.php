@extends('layouts.app')

@section('content')
<section class="results-section">
    <h2>Comments Results</h2>
    <table id="commentsTable" class="display">
        <thead>
            <tr>
                <th>ID</th>
                <th>Comment</th>
                <th>Sentiment</th>
                
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comments as $comment)
            <tr>
                <td>{{ $comment->id }}</td>
                <td>{{ $comment->comment }}</td>
                <td style="color:
                    {{ $comment->sentiment === 'positive' ? 'green' : ($comment->sentiment === 'negative' ? 'red' : 'orange') }};
                ">{{ ucfirst($comment->sentiment) }}</td>
                 <td>{{ $comment->created_at->format('d-m-Y H:i') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection

@section('scripts')
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- DataTables -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready(function() {
    $('#commentsTable').DataTable({
        "pageLength": 10,
        "order": [[ 0, "desc" ]]
    });
});
</script>
@endsection
