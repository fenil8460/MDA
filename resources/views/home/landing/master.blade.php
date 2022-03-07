
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/png" href="{{URL::asset('assets/images/favicon.png') }}"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Our certified dance instructors are dedicated to instilling a lifelong love of dance in your child. Dance classes for all ages, from beginners to experienced!">
    <title>Masti Dance Academy, Bollywood Dance Experts.</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css?v='.time())}}">
</head>
<body>
{{-- @include('home.landing.header') --}}
        <div class="index">
            @yield('index')
        </div>
{{-- @include('home.landing.footer') --}}

</body>
</html>