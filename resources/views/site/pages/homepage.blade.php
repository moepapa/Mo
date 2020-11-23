@extends('site.app')
@section('title', 'Homepage')

@section('content')
<div class="container-fluid" style="margin-top: 1rem;">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-7">
            <section class="hero-section" id="mart">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">          
                        <div class="carousel-item active" style="background-image: url('slide2.jpg')">
                            <a href="{{ url('/about') }}">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="feature">
                                    <span class="cat-link">
                                        သစ်ပင်စိုက်ပါတို့ကမ္ဘာ၊သာယာလှပစိမ်းမြမြ
                                    </span>
                                    <div class="feature-title">
                                        <h4 class="entry-title">သစ်ပင်ပန်းမန်များ စိုက်ပျိုးခြင်းမှ များစွာသော အကျိုးကျေးဇူးများ.....</h4>
                                    </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item" style="background-image: url('slide1.jpg')">
                            <a href="{{ url('/short') }}">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="feature">
                                    <span class="cat-link">
                                        သက်တမ်းတိုပျိုးပင်များအကြောင်း
                                    </span>
                                    <div class="feature-title">
                                        <h4 class="entry-title">သက်တမ်းတိုပန်းပင်အများစုမှာ အပင်ပုမျိုးများ ဖြစ်ကြသည်.....</h4>
                                    </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item" style="background-image: url('slide3.jpg')">
                            <a href="{{ url('/long') }}">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="feature">
                                    <span class="cat-link">
                                        သက်တမ်းရှည်ပျိုးပင်များအကြောင်း
                                    </span>
                                    <div class="feature-title">
                                        <h4 class="entry-title">သက်တမ်းရှည်ပန်းပင်အများစုမှာ အပင်ရှည်မျိုးများ ဖြစ်ကြသည်.....</h4>
                                    </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item" style="background-image: url('slide4.jpg')">
                            <a href="{{ url('/tree') }}">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="feature">
                                    <span class="cat-link">
                                        အရိပ်ရပျိုးပင်များအကြောင်း
                                    </span>
                                    <div class="feature-title">
                                        <h4 class="entry-title">အရိပ်ရပျိုးပင်အများစုမှာ သက်တမ်းရှည်ပြီး အပင်ရှည်မျိုးများ ဖြစ်ကြ.....</h4>
                                    </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item" style="background-image: url('slide5.jpg')">
                            <a href="{{ url('/fruit') }}">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="feature">
                                    <span class="cat-link">
                                        သီးပင်စားပင်ပျိုးပင်များအကြောင်း
                                    </span>
                                    <div class="feature-title">
                                        <h4 class="entry-title">သီးပင်စားပင်အများစုမှာ သက်တမ်းရှည်ပြီး အပင်ရှည်မျိုးများ ဖြစ်.....</h4>
                                    </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item" style="background-image: url('slide6.jpg')">
                            <a href="{{ url('/orchid') }}">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="feature">
                                    <span class="cat-link">
                                        သစ်ခွပျိုးပင်များအကြောင်း
                                    </span>
                                    <div class="feature-title">
                                        <h4 class="entry-title">သစ်ခွပျိုးပင်များထဲမှ ယခု စိုက်ပျိုးရောင်းချလျက်ရှိသော.....</h4>
                                    </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item" style="background-image: url('slide7.jpg')">
                            <a href="{{ url('/thazin') }}">
                                <div class="carousel-caption d-none d-md-block">
                                    <div class="feature">
                                    <span class="cat-link">
                                        သဇင်ပျိုးပင်များအကြောင်း
                                    </span>
                                    <div class="feature-title">
                                        <h4 class="entry-title">ရောင်းချလျက်ရှိသော သဇင်မှာ ရခိုင်သဇင် ဖြစ်သည်။ သဇင်ပန်း.....</h4>
                                    </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
            </section>
        </div>
        <div class="col-12 col-sm-12 col-md-5">
            <div class="card">
                <h3 class="short" style="text-align:center; margin-top:1rem;">ပျိုးပင်များစိုက်ပျိုးရောင်းချရခြင်း၏ရည်ရွယ်ချက်</h3>
                <p class="pagg">"သစ်ပင်စိုက်ပါတို့ကမ္ဘာ၊ သာယာလှပစိမ်းမြမြ" ဆိုသည့် ဆောင်ပုဒ်အတိုင်း ကမ္ဘာကြီးလှပသာယာဖို့အတွက် တနိုင်တပိုင် ပါဝင်ကူညီရခြင်း ဖြစ်ပါတယ်။အိမ်အပြင်ဘက် ခြံထဲမှာသာမက အိမ်အတွင်းမှာ အပင်စိုက်ပျိုးထားရှိခြင်းဟာ ယခုခေတ်မှာ ခေတ်စားလာပါတယ်။ ဧည့်ခန်းထဲမှာ သစ်ပင် ပန်းမန်ရှိခြင်းဟာ ကျန်းမာရေးအကျိုးကျေးဇူးများကိုပေးနိုင်ပါတယ်လို့ ပညာရှင်များက ပြောကြားလိုက်ပါတယ်။ အိမ်တွင်းသာမက အိမ်ပြင်မှာ ပန်းမန်များ စိုက်ပျိုးခြင်းဟာ ကျန်းမာရေးအကျိုးကျေးဇူးများကိုပေးနိုင်ပါတယ်လို့ ပညာရှင်များ. . . .<a class="link" href="{{ url('/about') }}">&nbsp;&nbsp;&nbsp;ဆက်လက်ဖတ်ရှုရန် <i class="far fa-hand-point-right"></i></a></p>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6">
                        <a class="btn btn-success" href="{{ url('/short') }}">&nbsp;&nbsp;&nbsp;သက်တမ်းတိုပျိုးပင်များအကြောင်း <i class="far fa-hand-point-right"></i></a>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6">
                        <a class="btn btn-success" href="{{ url('/long') }}">&nbsp;&nbsp;&nbsp;သက်တမ်းရှည်ပျိုးပင်များအကြောင်း <i class="far fa-hand-point-right"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6">
                        <a class="btn btn-success" href="{{ url('/tree') }}">&nbsp;&nbsp;&nbsp;အရိပ်ရပျိုးပင်များအကြောင်း <i class="far fa-hand-point-right"></i></a>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6">
                        <a class="btn btn-success" href="{{ url('/fruit') }}">&nbsp;&nbsp;&nbsp;သီးပင်စားပင်ပျိုးပင်များအကြောင်း <i class="far fa-hand-point-right"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6">
                        <a class="btn btn-success" href="{{ url('/orchid') }}">&nbsp;&nbsp;&nbsp;သစ်ခွပျိုးပင်များအကြောင်း <i class="far fa-hand-point-right"></i></a>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6">
                        <a class="btn btn-success" href="{{ url('/thazin') }}">&nbsp;&nbsp;&nbsp;သဇင်ပျိုးပင်များအကြောင်း <i class="far fa-hand-point-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>
@stop