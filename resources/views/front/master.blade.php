<!DOCTYPE html>
<html lang="en">
<head>
    @include('front.meta')
    <title>Home | E-Shopper</title>
    @include('front.css')
</head><!--/head-->

<body>
		
	@include('front.top_header')
  
   @include('front.middle_header')
   @include('front.menu')
    
	@yield('content')
	
	@include('front.footer')
	

  
    @include('front.script')
</body>
</html>