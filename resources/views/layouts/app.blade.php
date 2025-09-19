<!DOCTYPE html>
<html lang="an">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard AI Sentiment Analyzer</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/css-layout/1.1.1/css-layout.min.js" integrity="sha512-WeFxT4bqnrM1Laaz9RzBX3ttu+vleafd9wICGomR7KUPmaJUf6+Ysu9Zoqm4UyEjgsIArS4JsnHSWrPKOACDgQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>
<body>


<div class="sidebar">
    <div class="logo">AI Analyzer</div>
    <ul>
        <li><a href="{{route('dashboard')}}">dashboard</a></li>
        <li><a href="{{ route('create') }}">Comments</a></li>
        <li><a href="{{ route('results') }}">Results</a></li>
    </ul>
</div>


<div class="main-content">
    
    <header>
      <h1>welcome</h1>
    </header>

    @yield('content')
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('scripts')
 
</div>
</body>
</html>
