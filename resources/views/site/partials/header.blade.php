<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
<header class="section-header">
    <section class="header-main bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-2 col-sm-2 col-md-2">
                    <div class="brand-wrap">
                        <a style="color:rgb(102, 91, 41); font-family:Niconne;" href="{{ url('/') }}">
                        <i class="fas fa-home"></i>&nbsp; Home
                        </a>
                    </div>
                </div>
                <div class="col-4 col-sm-4 col-md-3">
                    <div class="brand-wrap">
                        <a href="{{ url('/') }}">
                            <img src="{{ url('logo.jpg') }}" width="35" height="32" class="d-inline-block align-top" alt="">
                            DahliaSeedlings
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <div class="container-fluid bg-light">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <marquee width="100%" direction="left" height="30px" style="color: black; font-size: medium; font-weight: bold; font-family: Niconne;">
                <i class="fas fa-leaf green"></i><i class="fab fa-pagelines green"></i> DahliaSeedlings <i class="fab fa-pagelines green"></i><i class="fas fa-leaf green"></i> မှ ပျိုးပင်မျိုးစုံကို သက်တမ်းအလိုက် ဈေးနှုန်းချိုသာစွာဖြင့် မှာယူရရှိနိုင်ပါသည်။ <i class="fas fa-tree green"></i> <b>စိတ်ချမ်းသာ၊ ကိုယ်ကျန်းမာဖို့ ပန်းမန်များ မှာယူစိုက်ပျိုးကြပါစို့</b> <i class="fas fa-tree green"></i> ဆက်သွယ်မေးမြန်းရန် ဖုန်း-၀၉၇၅၁၃၆၀၆၂၂
                </marquee>
            </div>
        </div>
    </div>
    @include('site.partials.nav')
</header>