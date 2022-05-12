<!DOCTYPE html>
<html lang="en"  >

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>đănh nhập</title>
    @include('client.css')
</head>

<body>
    <div id="container" class="cls-container">
        <div class="cls-content">
            <div class="cls-content-sm panel">
                <div class="panel-body">
                    <div class="mar-ver pad-btm">
                        <h1 class="h3">Đăng nhập tài khoản</h1>
                    </div>
                    <form action="{{ route('doLogin') }}" method="post">
                        @if (Session::has('success'))
                            <div class="alert alert-success">{{ Session::get('success') }}</div>
                        @endif
                        @if (Session::has('fail'))
                            <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                        @endif
                        @csrf
                        <div class="form-group">
                            <input type="" class="form-control" placeholder="email" name="email"
                                value="{{ old('email') }}">

                            <span class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                            <span class="text-danger">
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Đăng nhập</button>
                    </form>
                </div>
                <div class="pad-all">

                    <a href="register" class="btn-link mar-lft">Tạo tài khoảnss</a>
                    <div class="media pad-top bord-top">
                        <div class="pull-right">
                        </div>
                        <div class="media-body text-left text-bold text-main">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
{{-- @include('client.angular') --}}
</html>
