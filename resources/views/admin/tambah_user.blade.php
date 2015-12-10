@extends('_layout/admin')

@section('title','home')


@section('isi')

<div class="row">
     <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Tambah User</h1>
    </div>
    <!--end page header -->
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Basic Form Elements
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> Sepertinya ada kesalahan.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form class="form-horizontal" method="POST" action="{{ route('admin::simpan_user')}}" accept-charset="UTF-8" enctype ="multipart/form-data">
                        {{ csrf_field() }}
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Username:</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" name="username" value="{{ old('username') }}"placeholder="Enter username">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email:</label>
                                <div class="col-sm-10">
                                  <input type="email" class="form-control" name="email" value="{{ old('email') }}"placeholder="Enter email">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Password:</label>
                                <div class="col-sm-10">
                                  <input type="password" class="form-control" name="password">
                                </div>
                            </div>

                            <!--<div class="form-group">
                                <label class="control-label col-sm-2" for="email">Status:</label><br>
                                <div class="checkbox">
                                  <label><input checked="checked" name="status" type="radio" value="Admin" >Admin</label>
                                </div>
                                <div class="checkbox">
                                  <label><input name="status" type="radio" value="Mahasiswa" >Mahasiswa</label>
                                </div>
                            </div>-->

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Tambah User
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop