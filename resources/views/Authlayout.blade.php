<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @yield('style')
</head>
<body>
    <h1>Header Section Starts Here</h1>
    @yield('header')

    <div>
        <h1>Content Section Starts Here</h1>
        @yield('content')
    </div>

    <h1>Footer Section Starts Here</h1>
    @yield('footer')

    @yield('script')
</body>
</html>