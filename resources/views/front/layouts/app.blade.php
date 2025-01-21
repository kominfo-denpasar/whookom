<!DOCTYPE html>
<html lang="en">

<head>
<!-- meta -->
@include('front.layouts.meta')
@stack('styles')
</head>

<body>
<div id="app">
<!-- nav -->
@include('front.layouts.header')

@yield('content')
<!-- footer -->
@include('front.layouts.footer')
</div>

<!-- scripts -->
@include('front.layouts.scripts')
</body>
</html>