<!DOCTYPE html>
<html>
<head>
    <title>Mon site</title>
</head>
<body>

@include('partials.header')
@include('partials.menu')

<div class="container">
    @yield('content')
</div>

@include('partials.footer')

</body>
</html>
