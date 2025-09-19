@extends('layouts.app')

@section('content')

    <h2 class="mb-4">Dashboard</h2>

    <div class="row text-center mb-4">
    <div class="col-md-3">
        <div class="card bg-success text-white">
            <div class="card-body">
                <h5 class="card-title">Positive Comments</h5>
                <p class="card-text fs-3">{{ $positiveCount }}</p>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card bg-danger text-white">
            <div class="card-body">
                <h5 class="card-title">Negative Comments</h5>
                <p class="card-text fs-3">{{ $negativeCount }}</p>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card bg-warning text-dark">
            <div class="card-body">
                <h5 class="card-title">Neutral Comments</h5>
                <p class="card-text fs-3">{{ $neutralCount }}</p>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card bg-primary text-white">
            <div class="card-body">
                <h5 class="card-title">Total Comments</h5>
                <p class="card-text fs-3">{{ $totalCount}}</p>
            </div>
        </div>
    </div>
</div>



    <div class="card">
        <div class="card-body">
            <h5 class="card-title mb-3">Comments Trend Over Time</h5>
            <canvas id="commentsChart" height="100"></canvas>
        </div>
    </div>

@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const chartData = @json($chartData);

    const labels = chartData.map(r => r.date);
    const positives = chartData.map(r => Number(r.positive));
    const negatives = chartData.map(r => Number(r.negative));
    const neutrals  = chartData.map(r => Number(r.neutral));

    const ctx = document.getElementById('commentsChart').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels,
            datasets: [
                {
                    label: 'Positive',
                    data: positives,
                    borderColor: 'green',
                    backgroundColor: 'rgba(0,128,0,0.08)',
                    fill: true,
                    tension: 0.3
                },
                {
                    label: 'Negative',
                    data: negatives,
                    borderColor: 'red',
                    backgroundColor: 'rgba(255,0,0,0.08)',
                    fill: true,
                    tension: 0.3
                },
                {
                    label: 'Neutral',
                    data: neutrals,
                    borderColor: 'orange',
                    backgroundColor: 'rgba(255,165,0,0.08)',
                    fill: true,
                    tension: 0.3
                }
            ]
        },
        options: {
            responsive: true,
            scales: {
                y: { beginAtZero: true }
            }
        }
    });
</script>
@endsection

