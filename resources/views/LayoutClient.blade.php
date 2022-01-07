<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    @yield('title')
    @yield('css')
    @yield('js-head')
    {{-- cái js này load khi mới vào trang --}}

</head>
<body>
    trang này cho client
    @yield('body')


    @yield('js-body')
    {{-- cái js này load khi cần gọi đến --}}

</body>
</html>