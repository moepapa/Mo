@extends('admin.app')
@section('title') Dashboard @endsection
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="widget-small coloured-icon">
                <div class="widget-small primary coloured-icon"><i class="icon fas fa-music fa-3x"></i>
                    <div class="info">
                        <a href="{{ route('admin.songs.index') }}">
                            <h4>Songs</h4>
                            <b>{{App\Models\Song::count()}}</b>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small primary coloured-icon">
                <i class="icon fa fa-users fa-3x"></i>
                <div class="info">
                    <a href="{{ route('user.index') }}">
                        <h4>Users</h4>
                        <b>{{App\Models\User::count()}}</b>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small primary coloured-icon">
                <i class="icon fa fa-users fa-3x"></i>
                <div class="info">
                    <a href="{{ route('admin.index') }}">
                        <h4>Admins</h4>
                        <b>{{App\Models\Admin::count()}}</b>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection