@extends('site.app')
@section('title', 'Checkout')
@section('extra-css')

<script src="https://js.stripe.com/v3/"></script>

@endsection
@section('content')
<div class="container">

    @if(session()->has('success_message'))
        <div class="spacer"></div>
        <div class="alert alert-success">
            {{ session()->get('success_message') }}
        </div>
    @endif

    @if(count($errors) > 0)
        <div class="spacer"></div>
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        

    <section class="section-pagetop bg-white">
        <div class="container clearfix">
            <h2 class="title-page">Checkout</h2>
        </div>
    </section>
    <section class="section-content bg padding-y">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    @if (Session::has('error'))
                        <p class="alert alert-danger">{{ Session::get('error') }}</p>
                    @endif
                </div>
            </div>
            <form action="{{ route('checkout.place.order') }}" method="POST" role="form" id="payment-form">
                @csrf
                <div class="row">
                    <div class="col-md-7">
                        <div class="card">
                            <header class="card-header">
                                <h4 class="card-title mt-2">Billing Details</h4>
                            </header>
                            <article class="card-body">
                                <div class="form-row">
                                    <div class="col form-group">
                                        <label>First name</label>
                                        <input type="text" class="form-control" name="first_name">
                                    </div>
                                    <div class="col form-group">
                                        <label>Last name</label>
                                        <input type="text" class="form-control" name="last_name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="address">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>City</label>
                                        <input type="text" class="form-control" name="city">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Country</label>
                                        <input type="text" class="form-control" name="country">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group  col-md-6">
                                        <label>Phone Number</label>
                                        <input type="text" class="form-control" name="phone_number">
                                    </div>
                                    <div class="form-group  col-md-6">
                                        <label>Email Address</label>
                                        <input type="email" class="form-control" name="email" value="{{ auth()->user()->email }}" disabled>
                                        <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Order Notes</label>
                                    <textarea class="form-control" name="notes" rows="6"></textarea>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <header class="card-header">
                                        <h4 class="card-title mt-2">Your Order</h4>
                                    </header>
                                    <article class="card-body">
                                        <table class="table table-hover shopping-cart-wrap">
                                            <thead class="text-muted">
                                            <tr>
                                                <th scope="col">Seedling</th>
                                                <th scope="col" width="120">Quantity</th>
                                                <th scope="col" width="120">Price</th>
                                                <th scope="col" class="text-right" width="200">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach(\Cart::getContent() as $item)
                                                <tr>
                                                    <td>
                                                        <figure class="media">
                                                            <figcaption class="media-body">
                                                                <h6 class="title text-truncate">{{ Str::words($item->name,20) }}</h6>
                                                                @foreach($item->attributes as $key  => $value)
                                                                    <dl class="dlist-inline small">
                                                                        <dt>{{ ucwords($key) }}: </dt>
                                                                        <dd>{{ ucwords($value) }}</dd>
                                                                    </dl>
                                                                @endforeach
                                                            </figcaption>
                                                        </figure>
                                                    </td>
                                                    <td>
                                                        <var class="price">{{ $item->quantity }}</var>
                                                    </td>
                                                    <td>
                                                        <div class="price-wrap">
                                                            <var class="price">{{ config('settings.currency_symbol'). $item->price }}</var>
                                                            <small class="text-muted">each</small>
                                                        </div>
                                                    </td>
                                                    <td class="text-right">
                                                        <a href="{{ route('checkout.cart.remove', $item->id) }}" class="btn btn-outline-danger"><i class="fa fa-times"></i> </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <dl class="dlist-align">
                                            <dt>Total cost: </dt>
                                            <dd class="text-right h5 b"> {{ config('settings.currency_symbol') }}{{ \Cart::getSubTotal() }} </dd>
                                        </dl>
                                    </article>
                                </div><br>
                                
                            </div>
                            <div class="col-md-12 mt-4">
                                <button type="submit" class="subscribe btn btn-success btn-lg btn-block">Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
@stop
@push("scripts")
<!-- <script>
    // Create a Stripe client.
    var stripe = Stripe('pk_test_51HNv0wJY5mREyZthlzvKhLdoA4WbOPcZlshSmOFU76Q5Sp0dOcmMretMd9rsFzSDTSLeAYKshK1eeLNVF51kHmTy00JDpoX2ZP');

    // Create an instance of Elements.
    var elements = stripe.elements();

    // Custom styling can be passed to options when creating an Element.
    // (Note that this demo uses a wider set of styles than the guide below.)
    var style = {
    base: {
        color: '#32325d',
        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
        fontSmoothing: 'antialiased',
        fontSize: '16px',
        '::placeholder': {
        color: '#aab7c4'
        }
    },
    invalid: {
        color: '#fa755a',
        iconColor: '#fa755a'
    }
    };

    // Create an instance of the card Element.
    var card = elements.create('card', {
        style: style,
        hidePostalCode: true
    });

    // Add an instance of the card Element into the `card-element` <div>.
    card.mount('#card-element');

    // Handle real-time validation errors from the card Element.
    card.on('change', function(event) {
    var displayError = document.getElementById('card-errors');
    if (event.error) {
        displayError.textContent = event.error.message;
    } else {
        displayError.textContent = '';
    }
    });

    // Handle form submission.
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
    event.preventDefault();

    var options = {
        name: document.getElementById('name_on_card').value
    }

    stripe.createToken(card, options).then(function(result) {
        if (result.error) {
        // Inform the user if there was an error.
        var errorElement = document.getElementById('card-errors');
        errorElement.textContent = result.error.message;
        } else {
        // Send the token to your server.
        stripeTokenHandler(result.token);
        }
    });
    });

    // Submit the form with the token ID.
    function stripeTokenHandler(token) {
    // Insert the token ID into the form so it gets submitted to the server
    var form = document.getElementById('payment-form');
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', token.id);
    form.appendChild(hiddenInput);

    // Submit the form
    form.submit();
    }
</script> -->
@endpush
