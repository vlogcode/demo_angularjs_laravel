<!doctype html>
<html lang="en" ng-app="ngApp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách người dùng</title>
    @include('client.css')
    @include('client.angular')
</head>

<body ng-controller="myController" >
    <div id="container" class="effect aside-float aside-bright mainnav-lg">
        @include('client.navbar')
        <div class="boxed">
            <div id="content-container">
                <div id="page-head">
                    <div class="pad-all text-center">
                        <h3>Quản lý</h3>
                        {{-- <h3>@{{ title }}</h3> --}}

                    </div>
                </div>
                @yield('content')
            </div>
            @include('client.sidebar')
        </div>
        <button class="scroll-top btn">
            <i class="pci-chevron chevron-up"></i>
        </button>
    </div>
    @include('client.js')
    @include('client.angular')

</body>

</html>

