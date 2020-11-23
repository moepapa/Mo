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
                <div class="success"><i class="icon fa fa-leaf"></i></div>
                <div class="info">
                    <a href="{{ route('admin.seedlings.index') }}">
                        <h4>Seedlings</h4>
                        <b>{{App\Models\Seedling::count()}}</b>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small info coloured-icon">
                <i class="icon fa fa-bar-chart fa-3x"></i>
                <div class="info">
                    <a href="{{ route('admin.orders.index') }}">
                        <h4>Orders</h4>
                        <b>{{App\Models\Order::count()}}</b>
                    </a>
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