<!DOCTYPE html>
<html lang="en">
<head>
    @include('website.includes.header')
</head>
<body>
    @include('website.includes.navbar')
    <div id="container">
        @yield('website-content')
        @include('website.sections.contact')
    </div>
    @include('website.includes.footer')
    @yield('scripts')
</body>
</html>