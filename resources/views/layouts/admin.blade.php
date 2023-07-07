<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Signika+Negative:wght@300;400;500;600;700&display=swap"
    rel="stylesheet">
  @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 font-['Signika Negative'] ">
  @include('partials/navbar')

  @include('partials/sidebar')

  <div class="container mt-10">
    @yield('content')
  </div>
</body>

</html>