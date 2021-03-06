<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ferdous</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
  </head>
  <body>

  	@include('inc.navbar')

  	<div class="container">
  		@if(Request::is('/'))
  		@include('inc.showcase')
  		@endif
  		<div class="row">
  			<div class="col-md-8 col-lg-8">
          @include('inc.messages')
  				@yield('content') <!-- //Yield mane attosomorpon kora, har mana, Somorpon kora -->	
  			</div>
  			<div class="col-md-4 com-lg-4">
  			    @include('inc.sidebar')		
  			</div>
  		</div>
	</div>


	<footer id="footer" class="text-center navbar-fixed-bottom">
		<p>Copyright 2020 &copy; Ferdous</p>
	</footer>

  </body>
</html>
