@extends('site.app')
@section('title', 'Orders')
@section('content')
    <section class="section-pagetop bg-white">
        <div class="container clearfix">
            <h2 class="title-page">My Account - Orders</h2>
        </div>
    </section>
    <section class="section-content bg padding-y border-top">
        <div class="container">
            <div class="row">
                <main class="col-sm-12">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Order No.</th>
                                <th scope="col">Order Date</th>
                                <th scope="col">Full Name</th>
                                <th scope="col">Order Items</th>
                                <th scope="col">Order Amount</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($orders as $order)
                                <tr>
                                    <th scope="row">{{ $order->order_number }}</th>
                                    <td>{{ $order->created_at->toFormattedDateString() }}</td>
                                    <td>{{ $order->user->full_name }}</td>
                                    <td>
                                        @foreach(\Cart::getContent() as $item)
                                            <figure class="media">
                                                <figcaption class="media-body">
                                                    <h6 style="font-weight:bold; color:#080808;">{{ Str::words($item->name,20) }}</h6>
                                                        @foreach($item->attributes as $key  => $value)
                                                            <dl class="dlist-inline small">
                                                                <dt>{{ ucwords($key) }}: </dt>
                                                                <dd>{{ ucwords($value) }}</dd>
                                                            </dl>
                                                        @endforeach
                                                </figcaption>
                                            </figure>
                                        @endforeach
                                    </td>
                                    <td>{{ config('settings.currency_symbol') }}{{ round($order->grand_total, 2) }}</td>
                                    <td><span class="badge badge-success">{{ strtoupper($order->status) }}</span></td>
                                </tr>
                            @empty
                                <div class="col-sm-12">
                                    <p class="alert alert-warning">No orders to display.</p>
                                </div>
                            @endforelse
                        </tbody>
                    </table>
                </main>
            </div>
        </div>
    </section>
@stop