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
                                    {{-- <a href="{{ route('user.create') }}">
                                     <button class="btn btn-purple" ><i
                                                class="demo-pli-add icon-fw" ></i>Thêm</button>
                                     </a> --}}
                                    <button class="btn btn-purple" data-target="#demo-default-modal"
                                                data-toggle="modal"   ng-click="showmodal(0)">Thêm</button>
                                </div>
                                <div class="col-sm-6 table-toolbar-right">
                                    <div class="form-group">
                                        <input type="text" autocomplete="off" class="form-control"
                                            placeholder="Tìm kiếm tài khoản" id="demo-input-search2" ng-model="searchs">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            {{-- @if (Session::has('thongbao'))
                                <div class="alert alert-success">
                                    {{ Session::get('thongbao') }}
                                </div>
                            @endif --}}
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>user</th>
                                        <th>email</th>
                                        <th class="text-center">Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr dir-paginate="sp in users | filter:searchs | itemsPerPage:10">
                                        <td>@{{ $index + 1 }}</td>
                                        <td>@{{ sp.name }}</td>
                                        <td>@{{ sp.email }}</td>
                                        <td style="text-align: center">
                                            <button class="btn btn-info" data-target="#demo-default-modal"
                                                data-toggle="modal" ng-click="showmodal(sp.id)">sửa</button>
                                            <button class="btn btn-danger" ng-click="deleteClick(sp.id)">xóa</button>
                                            <button class="btn btn-primary">ủy quyền</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <hr class="new-section-xs">
                        <div class="pull-right">
                            <dir-pagination-controls max-size="1" direction-links="true" boundary-links="true">
                            </dir-pagination-controls>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="demo-default-modal" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <!--Modal header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i
                            class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title">@{{ modalTitle }}</h4>
                </div>

                <!--Modal body-->
                <div class="modal-body">
                    <div class="row col-md-12 ">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Username :</strong>
                                <input type="text" name="name" value="" class="form-control"
                                    placeholder="Mời bạn nhập tài khoản" ng-model="user.name">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>email :</strong>
                                <input type="email" name="email" value="" class="form-control"
                                    placeholder="Mời bạn nhập email" ng-model="user.email">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>password :</strong>
                                <input type="text" name="password" value="" class="form-control"
                                    placeholder="Mời bạn nhập mật khẩu" ng-model="user.password">
                            </div>
                        </div>


                    </div>
                </div>

                <!--Modal footer-->
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                    <button  type="button" class="btn btn-primary" ng-click="saveData()">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
