@extends('site.app')
@section('title', 'About')

@section('content')
    <div class="container-fluid" style="margin-top:10px;">
        <div class="row">
            <div class="col-12 col-sm-4 col-md-2"></div>
            <div class="col-12 col-sm-4 col-md-8">
                <div class="item-img-wrap ">
                    <img src="{{ asset('storage/garden.jpg') }}" class="img-responsive" alt="workimg" id="hover">
                    <div class="item-img-overlay">
                        <a href="#" class="show-image">
                            <span></span>
                        </a>
                    </div>
                </div> 
            </div>
            <div class="col-12 col-sm-4 col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-4 col-md-2"></div>
            <div class="col-12 col-sm-4 col-md-8">
                <h3 class="about">ပျိုးပင်များစိုက်ပျိုးရောင်းချရခြင်း၏ရည်ရွယ်ချက်</h3>
                <p class="pagg">" သစ်ပင်စိုက်ပါတို့ကမ္ဘာ၊ သာယာလှပစိမ်းမြမြ " ဆိုသည့် ဆောင်ပုဒ်အတိုင်း ကမ္ဘာကြီးလှပသာယာဖို့အတွက် တနိုင်တပိုင် ပါဝင်ကူညီရခြင်း ဖြစ်ပါတယ်။အိမ်အပြင်ဘက် ခြံထဲမှာသာမက အိမ်အတွင်းမှာ အပင်စိုက်ပျိုးထားရှိခြင်းဟာ ယခုခေတ်မှာ ခေတ်စားလာပါတယ်။ ဧည့်ခန်းထဲမှာ သစ်ပင် ပန်းမန်ရှိခြင်းဟာ ကျန်းမာရေးအကျိုးကျေးဇူးများကိုပေးနိုင်ပါတယ်လို့ ပညာရှင်များက ပြောကြားလိုက်ပါတယ်။ အိမ်တွင်းသာမက အိမ်ပြင်မှာ ပန်းမန်များ စိုက်ပျိုးခြင်းဟာ ကျန်းမာရေးအကျိုးကျေးဇူးများအနေဖြင့် လေကောင်းလေသန့်ပိုရရှိခြင်း၊ အိမ်ခန်းကို ပိုမိုနေချင့်စဖွယ်ဖြစ်စေခြင်း၊  စိတ်ကျန်းမာရေးတိုးတက်လာစေခြင်း၊ စိတ်ဖိစီးမှုဖြစ်စရာအကြောင်းတွေကိုမေ့လျော့စေနိုင်ခြင်း၊ အလုပ်ကိစ္စများပိုမိုပြီးမြောက်စေခြင်း၊ နေမြန်မြန်ပြန်ကောင်းစေရန်အထောက်အကူဖြစ်ခြင်း စတဲ့ အကျိုးကျေးဇူးများရရှိစေနိုင်ပါတယ်။ ဒါကြောင့် ကျန်းမာရေးအထောက်အကူဖြစ်စေတဲ့ ပန်းမန်များ တနိုင်တပိုင် စိုက်ပျိုးနိုင်ရန်အတွက် DahliaSeedlings မှ ပျိုးပင်များကို ဈေးနှုန်းချိုသာစွာဖြင့် ရောင်းချပေးရခြင်း ဖြစ်ပါတယ်။ ဝယ်ယူအားပေးမှုကို အထူးပင် ကျေးဇူးတင်ရှိပါတယ်ရှင့်။</p>
                <div class="row">
                    <div class="col-5 col-sm-5 col-md-3">
                        <a href="{{ url('/') }}" class="btn btn-success"><i class="far fa-hand-point-left"></i>&nbsp;&nbsp;Home</a>
                    </div>
                    <div class="col-2 col-sm-2 col-md-6"></div>
                    <div class="col-5 col-sm-5 col-md-3">
                        <a href="mailto:moepapamyintshwe@gmail.com?subject = Feedback&body = Message" class="btn btn-success"><i class="fa fa-envelope-open text-green" style="font-size:15px"></i>&nbsp;&nbsp;Send Feedback</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 col-md-2"></div>
        </div>
    </div>
@stop