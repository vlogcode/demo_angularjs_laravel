@extends('layout')
@section('content')
    <div id="page-content">
        <div class="row">
            <div class="col-xs-12">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">thông tin tài khoản của tôi</h3>
                    </div>

                    <div class="panel-body">
                        <div class="pad-btm form-inline">
                            <div class="row">
                                <div class="col-sm-6 table-toolbar-left">

                                </div>
                                <div class="col-sm-6 table-toolbar-right">

                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <!--===================================================-->
                            <div class="panel">
                                <div class="panel-body text-center">
{{--                                   <img alt="Profile Picture" class="img-md img-circle mar-btm" src="img/profile-photos/1.png">--}}

                                    <p class="text-lg text-semibold mar-no text-main">name</p>
                                    <p class="text-sm">user:</p>
                                    <p class="text-sm">email:</p>
                                    <p class="text-sm">password:</p>


{{--                                    <button class="btn btn-primary mar-ver"><i class="demo-pli-male icon-fw"></i>Đổi mật khẩu</button>--}}
                                </div>
                            </div>
                            <!--===================================================-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

