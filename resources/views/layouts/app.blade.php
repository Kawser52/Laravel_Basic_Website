<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Test</title>
<link rel="stylesheet" href="/css/app.css"/>
</head>
<body>
 @include('inc.navigation')
 <div class="container">
 <div class="row">
 <div class="col-md-6">
    @include('inc.message')
    @yield('content')
 </div>
  <div class="col-md-6">
     @include('inc.sidebar')
  </div>
 </div>
 </div>



</body>
</html>