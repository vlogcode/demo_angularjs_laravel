@extends('layout')
@section('content')
    <div id="page-content">
        <div class="row">
            <div class="col-xs-12">
                <div class="panel">
                    <div class="panel-body">
                        <div class="panel-heading">
                            <a href="{{ route('user.index') }}" class="btn btn-primary float-end">Quay lại danh sách</a>
                        </div>
                        <div class="">
                            <div class="card-body">
                                <form action="{{ route('user.update', $data->id) }}" method="POST"
                                    style="display: flex;justify-content: center;flex-direction: column">
                                    {{ csrf_field() }}
                                    @csrf
                                    @method('PUT')
                                    <div class="row " style="display: flex;justify-content: center;">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Name:</strong>
                                                <input type="text" name="name" value="{{ $data->name }}" class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <strong>email:</strong>
                                                <input type="text" name="email" value="{{ $data->email }}" placeholder="email"
                                                    class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <strong>Nhập password:</strong>
                                                <input type="text" name="" value="" placeholder="password"
                                                       class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success mt-2"
                                        style="width: 80px;margin: 0 auto">Cập nhật</button>
                                </form>
                            </div>
                        </div>
                        <hr class="new-section-xs">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
