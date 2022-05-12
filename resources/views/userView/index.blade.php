@extends('layout')
@section('content')
<div id="page-content">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Danh sách tài khoản</h3>
                </div>

                <div class="panel-body">
                    <div class="pad-btm form-inline">
                        <div class="row">
                            <div class="col-sm-6 table-toolbar-left">
                                {{-- <a href="{{route('user.create')}}">
                                    <button class="btn btn-purple" id="show-tt"><i class="demo-pli-add icon-fw"></i>Thêm</button>
                                </a> --}}
                            </div>
                            <div class="col-sm-6 table-toolbar-right">
{{--                                <div class="form-group">--}}
{{--                                    <input type="text" autocomplete="off" class="form-control" placeholder="Tìm kiếm tài khoản" id="demo-input-search2">--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        @if(Session::has('thongbao'))
                            <div class="alert alert-success">
                                {{Session::get('thongbao')}}
                            </div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>user</th>
                                <th>email</th>
                                <th>password</th>
                                <th class="text-center">Tùy chọn</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{-- @foreach($showUser as $dt) --}}
                            <tr ng-repeat="sp in danhsach_thongke">
                                <td><% $index + 1 %></td>
                                <td><% sp.name %></td>
                                <td><% sp.email %></td>
                                <td><% sp.password %></td>

                                {{-- <td>
                                    <form action="{{route('user.destroy',$dt->id)}}" method="POST">
                                        <a href="{{route('user.edit',$dt->id)}}" class="btn btn-info" >sửa</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">xóa</button>
                                    </form>
                                </td> --}}
                            </tr>
                            {{-- @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                    <hr class="new-section-xs">
                    <div class="pull-right">
                        <ul class="pagination text-nowrap mar-no">
                            <li class="page-pre disabled">
                                <a href="#">&lt;</a>
                            </li>
                            <li class="page-number active">
                                <span>1</span>
                            </li>
                            <li class="page-number">
                                <a href="#">2</a>
                            </li>
                            <li class="page-number">
                                <a href="#">3</a>
                            </li>
                            <li>
                                <span>...</span>
                            </li>
                            <li class="page-number">
                                <a href="#">9</a>
                            </li>
                            <li class="page-next">
                                <a href="#">&gt;</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection


