<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Rakibul Islam | Admin- @yield('title')</title>
    @include('admin.includes.head')
    @stack('css')

</head>
<body>
    <div id="app">
        <div class="wrapper">
            @include('admin.includes.header')
            <div class="page-wrap">
                <!-- initiate sidebar-->
                @include('admin.includes.sidebar')

                <div class="main-content">
                    <!-- yeild contents here -->
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    <!-- initiate scripts-->
    @include('admin.includes.script')
    @stack('script')

</body>
</html>