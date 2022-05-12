@extends('layout')
@section('content')
<div id="page-content">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel">
                <div class="panel-body">
                    <div class="panel-heading">
                        <a href="{{route('user.index')}}" class="btn btn-primary float-end">quay lại danh sách</a>
                    </div>
                    <div class="">
                        <div class="card-body">
                            <form action="{{route('user.store')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <strong>Name:</strong>
                                            <input type="text" name="name" class="form-control" placeholder="name">
                                        </div>
                                        <div class="form-group">
                                            <strong>email:</strong>
                                            <input type="text" name="email" class="form-control" placeholder="email">
                                        </div>
                                        <div class="form-group">
                                            <strong>password:</strong>
                                            <input type="text" name="password" class="form-control" placeholder="password">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success mt-2">luu</button>
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
