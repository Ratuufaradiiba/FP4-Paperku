<!DOCTYPE html>
<html lang="en-us">

<head>
    @include('frontend.layouts.partials.head')
</head>

<body>
    <!-- navigation -->
    @include('frontend.layouts.partials.navbar')
    <!-- /navigation -->

    @yield('content')

    @include('frontend.layouts.partials.footer')

    @include('frontend.layouts.partials.script')
</body>

</html>
