@extends('site.app')
@section('title', $song->song_name)
@section('content')
    <section class="section-pagetop bg-white">
        <div class="container clearfix">
            <h2 class="title-page">{{ $song->song_name }}</h2>
        </div>
    </section>

    <!-- <div class="container">
        @if(session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div> -->

    <section class="section-content bg padding-y" id="site">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <div class="card">
                        <div class="row no-gutters">
                            <!-- <aside class="col-12 col-sm-12 col-md-6 border-right">
                                <article class="gallery-wrap">
                                    @if ($song->images->count() > 0)
                                        <div class="img-big-wrap">
                                            <div class="padding-y">
                                                <a href="{{ asset('storage/'.$song->images->first()->full) }}" data-fancybox="">
                                                    <img src="{{ asset('storage/'.$song->images->first()->full) }}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    @else
                                        <div class="img-big-wrap">
                                            <div>
                                                <a href="https://via.placeholder.com/176" data-fancybox=""><img src="https://via.placeholder.com/176"></a>
                                            </div>
                                        </div>
                                    @endif
                                    @if ($song->images->count() > 0)
                                        <div class="img-small-wrap">
                                            @foreach($song->images as $image)
                                                <div class="item-gallery">
                                                    <img src="{{ asset('storage/'.$image->full) }}" alt="" height="200" width="150">
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                </article>
                            </aside> -->
                            <aside class="col-12 col-sm-12 col-md-6">
                                <article class="p-5">
                                    <h3 class="titleName mb-3">{{ $song->song_name }}</h3><br>
                                    <dl class="row">
                                        <dt class="col-6 col-sm-6 col-md-4">သီချင်းအမည်</dt>
                                        <dd class="col-6 col-sm-6 col-md-8">- {{ $song->song_name }}</dd>
                                        <dt class="col-6 col-sm-6 col-md-4">ဖော်ပြချက်</dt>
                                        <dd class="col-6 col-sm-6 col-md-8">- {{ $song->description }}</dd>
                                    </dl>
                                   
                                </article>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
@stop
@push('scripts')
    <script>
        $(document).ready(function () {
            $('#addToCart').submit(function (e) {
                if ($('.option').val() == 0) {
                    e.preventDefault();
                    alert('Please select an option');
                }
            });
            $('.option').change(function () {
                $('#songPrice').html("{{ $song->sale_price != '' ? $song->sale_price : $song->price }}");
                let extraPrice = $(this).find(':selected').data('price');
                let price = parseFloat($('#songPrice').html());
                let finalPrice = (Number(extraPrice) + price).toFixed(2);
                $('#finalPrice').val(finalPrice);
                $('#songPrice').html(finalPrice);
            });
        });
    </script>
@endpush