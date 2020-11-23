@extends('site.app')
@section('title', 'Thankyou')

@section('content')
<section class="section-pagetop bg-white">
    <div class="container clearfix">
        <h2 class="title-page">Thank You</h2>
    </div>
</section>
<section class="section-content bg padding-y">
    <div class="container">
        <div id="code_prod_complex">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-4"></div>
                <div class="col-12 col-sm-12 col-md-4">
                    <h2 style="text-align:center;">Thank you! for Your Order</h2>
                    <p style="text-align:center;">A confirmation email was sent</p>
                    <a href="{{ url('/') }}" class="btn btn-sm btn-success float-right">&nbsp;&nbsp; Home</a>
                </div>
                <div class="col-12 col-sm-12 col-md-4"></div>
            </div>
        </div>
    </div>
</section>
@stop