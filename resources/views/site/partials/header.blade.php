  <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-arrow-up"></i></button>
<header class="section-header">
    <section class="header-main bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-4 col-md-2">
                    <div class="brand-wrap">
                        <a style="color:rgb(72, 250, 2);" href="{{ url('/') }}">
                        <i class="fas fa-home"></i>&nbsp; မူလစာမျက်နှာ
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="brand-wrap">
                        <a href="{{ url('/') }}">
                            <i class="fas fa-leaf green"></i><i class="fab fa-pagelines green"></i>&nbsp;&nbsp; DahliaSeedlings &nbsp;&nbsp;<i class="fab fa-pagelines green"></i><i class="fas fa-leaf green"></i>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <form action="{{ route('seedling.search') }}" method="GET" class="search-form">
                        <div class="input-group">
                            <input type="text" class="search-box" name="query" value="{{ request()->input('query') }}" id="query" placeholder="Search for seedlings">
                            <div class="input-group-append">
                                <button class="btn btn-success" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-sm-6 col-md-4">
                    <div class="widgets-wrap d-flex justify-content-end">
                        <div class="widget-header">
                            <a href="{{ route('checkout.cart') }}" class="icontext">
                                <div class="icon-wrap icon-xs bg-success round text-white"><i
                                        class="fa fa-shopping-cart"></i></div>
                                <div class="text-wrap">
                                    <medium>{{ $cartCount }} items</medium>
                                </div>
                            </a>
                        </div>
                        @guest
                            <div class="widget-header">
                                <a href="{{ route('login') }}" class="ml-3 icontext">
                                    <div class="icon-wrap icon-xs bg-success round text-white"><i class="fa fa-user"></i></div>
                                    <div class="text-wrap"><span>Login</span></div>
                                </a>
                            </div>
                            <div class="widget-header">
                                <a href="{{ route('register') }}" class="ml-3 icontext">
                                    <div class="icon-wrap icon-xs bg-success round text-white"><i class="fa fa-user"></i></div>
                                    <div class="text-wrap"><span>Register</span></div>
                                </a>
                            </div>
                        @else
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->full_name }} <span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('account.orders') }}">Orders</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container-fluid bg-light">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <marquee width="100%" direction="left" height="30px" style="color: rgb(114, 204, 30); font-size: larger; font-weight: bold;">
                <i class="fas fa-leaf green"></i><i class="fab fa-pagelines green"></i> DahliaSeedlings <i class="fab fa-pagelines green"></i><i class="fas fa-leaf green"></i> မှ ပန်းပျိုးပင်မျိုးစုံကို သက်တမ်းအလိုက် ဈေးနှုန်းချိုသာစွာဖြင့် မှာယူရရှိနိုင်ပါသည်။ <i class="fas fa-tree green"></i> <b>စိတ်ချမ်းသာ၊ ကိုယ်ကျန်းမာဖို့ ပန်းမန်များ မှာယူစိုက်ပျိုးကြပါစို့</b> <i class="fas fa-tree green"></i> ဆက်သွယ်မေးမြန်းရန် ဖုန်း-၀၉၇၅၁၃၆၀၆၂၂
                </marquee>
            </div>
        </div>
    </div>
    @include('site.partials.nav')
</header>