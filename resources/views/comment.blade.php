@extends('layouts.app')

@section('content')
<section class="form-section">
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="comment">Your Comment :</label>
            <textarea name="comment" id="comment" rows="5" placeholder="Type your comment here..." required></textarea>
        </div>
        <button type="submit" class="btn">Analyze Sentiment</button>
    </form>
</section>
@endsection

@section('scripts')
@if(session('sentiment'))
<script>
    Swal.fire({
        title: "Sentiment Analyzed!",
        text: "Result: {{ ucfirst(session('sentiment')) }}",
        icon: "{{ session('sentiment') === 'positive' ? 'success' : (session('sentiment') === 'negative' ? 'error' : 'info') }}",
        confirmButtonText: "OK"
    });
</script>
@endif
@endsection




