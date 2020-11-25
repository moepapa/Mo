<!-- ========================= FOOTER ========================= -->
<footer class="section-footer bg-light">
<hr>
    <div class="container">
        <section class="footer-top padding-top font-small">
            <div class="row">
                <aside class="col-8 col-sm-8 col-md-5">
                <h5 style="color: black; font-size: medium; font-weight: bold; font-family: Niconne;"> <i class="fas fa-leaf green"></i><i class="fab fa-pagelines green"></i>
                DahliaSeedlings <i class="fab fa-pagelines green"></i><i class="fas fa-leaf green"></i> </h5>
                <hr class=" accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 100px; background-color: rgb(92, 185, 4); font-weight: bolder;">
                    <ul class="list-unstyled">
                        <li>									
                            <a href="{{ url('/about') }}">
                            <img class="img-fluid" src="{{ asset('storage/garden.jpg') }}" alt="" id="ss2">&nbsp;&nbsp;
                            ပျိုးပင်များစိုက်ပျိုးရောင်းချရခြင်း
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/delipay') }}">
                            သယ်ယူပို့ဆောင်ခနှင့်ငွေပေးချေစနစ် &nbsp;<i class="fas fa-truck fa-3x" style="margin-top:2rem;"></i>
                            </a>
                        </li>
                    </ul>
                </aside>
                <aside class="col-4 col-sm-4 col-md-3">
                    <h5 style="color: black; font-size: medium; font-weight: bold; font-family: Niconne;"><div class="icon-wrap icon-xs text-green"><i class="fa fa-user"></i></div><b>My Account</b></h5>
                    <hr class=" accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 80px; background-color: rgb(92, 185, 4); font-weight: bolder;">
                    <ul class="list-unstyled">
                        <li> <a href="{{ route('register') }}"> User register </a></li><br>
                        <li> <a href="{{ route('login') }}"> User Login </a></li><br>
                        <li> <a href="{{ route('account.orders') }}"> My Orders </a></li><br>
                        <li> <a href="{{ route('logout') }}"> User Logout </a></li>
                    </ul>
                </aside>
                <aside class="col-12 col-sm-12 col-md-4">
                    <article>
                        <h5 style="color: black; font-size: medium; font-weight: bold; font-family: Niconne;"><div class="icon-wrap icon-xs text-green"><i class="fas fa-id-card"></i></div><b>Contact Us</b></h5>
                        <hr class=" accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 80px; background-color: rgb(92, 185, 4); font-weight: bolder;">
                        <ul class="list-unstyled">
                            <li style="font-weight:bold;"><i class="fa fa-phone text-green" style="font-size:15px"></i>&nbsp;&nbsp;<strong>Phone:  </strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;09751360622</li> <br>
                            <li><i class="fab fa-facebook  fa-fw text-green" style="font-size:15px"></i>&nbsp;&nbsp;<strong>Facebook:</strong>&nbsp;&nbsp;&nbsp;<a href="https://web.facebook.com/DahliaSeedlings-100176605119762/">DahliaSeedlings</a></li><br> 
                            <li><i class="fa fa-envelope-open text-green" style="font-size:15px"></i>&nbsp;&nbsp;<strong>Feedback:</strong>&nbsp;&nbsp;&nbsp;&nbsp;<a href = "mailto:moepapamyintshwe@gmail.com?subject = Feedback&body = Message">Send Feedback with Email</a></li><br>
                            <li><i class="fas fa-map-marker-alt text-green"style="font-size:18px"></i>&nbsp;&nbsp;<strong>Address:</strong>&nbsp;&nbsp;<a href="https://goo.gl/maps/UqZmLRFFJ3XzWzB78">Kyaukse Township, Mandalay Division</a></li>
                        </ul>
                    </article>
                </aside>
            </div>
            <!-- row.// -->
            <br>
        </section>
        <!-- //footer-top -->
    </div>
    <!-- //container -->
    <!-- <div class="footer-copyright text-center py-3 darkgreen">© 2020 Copyright:
        <a href="{{ url('/') }}"> DahliaSeedlings.com</a>
    </div>Copyright -->
</footer>
<!-- ========================= FOOTER END // ========================= -->
