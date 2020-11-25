@extends('site.app')
@section('title', 'သစ်ခွပျိုးပင်များအကြောင်း')

@section('content')
<section class="section-content bg padding-y">
    <div class="container">
        <div id="code_prod_complex">
            <div class="row">
                <div class="col-12 col-sm-4 col-md-1"></div>
                <div class="col-12 col-sm-4 col-md-10">
                    <h6 class="short">သစ်ခွပျိုးပင်များ</h6>
                    <div class="row" style="margin-bottom: 1rem;">
                        <div class="col-12 col-sm-4 col-md-1"></div>
                        <div class="col-12 col-sm-4 col-md-10">
                            <div class="item-img-wrap ">
                                <img src="{{ url('/slide6.jpg') }}" class="img-responsive" alt="workimg" id="hover">
                                <div class="item-img-overlay">
                                    <a href="#" class="show-image">
                                        <span></span>
                                    </a>
                                </div>
                            </div> 
                        </div>
                        <div class="col-12 col-sm-4 col-md-1"></div>
                    </div>
                    <h6 class="short">စိုက်ပျိုးနည်းစနစ်နှင့်အပင်ပြုစုပုံ</h6>
                    <p class="pagg">သစ်ခွပျိုးပင်များထဲမှ ယခု စိုက်ပျိုးရောင်းချလျက်ရှိသော ပန်းပင်များမှာ (၁)Lenavat၊ (၂)Pimsai၊ (၃)Bhimayothin၊ (၄)Sanderiana၊ (၅)Udom Gold၊ (၆)Pissamai၊ (၇)Vantryနှင့် (၈)DannyGermanတို့ ဖြစ်ပါသည်။ သစ်ခွအမည်သာ ကွဲပြားပြီး မျိုးစိပ်တူများဖြစ်သည့်အတွက် အပင်သဘာဝနှင့်သွင်ပြင်လက္ခဏာများမှာ တူညီကြပါသည်။</p><br>
                    <h6 class="little">(၁)စိုက်ပျိုးပြုစုပုံနှင့်အလင်းရောင်</h6>
                    <p class="pagg">သစ်သားခြင်းဖြင့် စိုက်ပျိုးရပြီး မီးသွေးထည့်ပေးရပါမည်။ လိုအပ်သောအလင်းရောင်မှာ ၇၅%ဖြစ်ပါသည်။</p><br>
                    <h6 class="little">(၂)ပတ်ဝန်းကျင်အနေအထား</h6>
                    <p class="pagg">(က)လေဝင်လေထွက်ကောင်းရမည်။ (ခ)စိုထိုင်းဆရှိသော အခြေအနေဖြစ်ရမည်။ (ဂ)ရေကောင်းရေသန့်ဖြစ်ရမည်။</p><br>
                    <h6 class="little">(၃)အပင်ရေပေးစနစ်</h6>
                    <p class="pagg">သစ်ခွပင်ကို ရေပေးရာတွင် ဖျန်း၍ ပေးသောစနစ်(spray)သည် အကောင်းဆုံးဖြစ်ပါသည်။ အရွက်၊ ပင်စည်၊ အမြစ်၊ အိုး၊ သစ်သားခြင်း၊ ခုံတန်း၊ ပတ်ဝန်းကျင်အားလုံးအပါအဝင် ရေပက်ဖျန်းပေးသင့်ပါသည်။ နံနက်နှင့် ညနေအဓိက ထား၍ ရေဖျန်းပေးရမည်။</p><br>
                    <h6 class="little">(၄)မြေဩဇာနှင့် မြေဩဇာပေးစနစ်</h6>
                    <p class="pagg">မြေဩဇာတွင် ဓါတ်မြေဩဇာနှင့် သဘာဝမြေဩဇာဟူ၍ အဓိက(၂)မျိုး ရှိပါသည်။ သစ်ခွအများစုသည် လေရှူမြစ်ရှိသောကြောင့် မြေဩဇာကို ရေတွင် ဖျော်ပြီး ပက်ဖျန်းပေးရပါသည်။ မြေဩဇာကို အရွက်၊ ပင်စည်၊ အမြစ်၊ အိုး၊ သစ်သားခြင်း၊ ခုံတန်း၊ ပတ်ဝန်းကျင်အားလုံးအပါအဝင် ပက်ဖျန်းပေးသင့်ပါသည်။ မြေဩဇာကို နံနက်ပိုင်းဖျန်းသင့်ပါသည်။ သဘာဝမြေဩဇာအဖြစ် သဘာဝပစ္စည်းများဖြစ်သော ငါးပုပ်ရည်၊ ဂဇော်ရည်၊ နှမ်းဖတ်၊ ပဲဖတ်ပုပ်ရည်၊ နွားချေးရည်စသည်တို့ဖြင့် ဖျော်စပ်ပြီး အပင်ကို ရေနှင့်ရော၍ ပက်ဖျန်းပေးရပါသည်။</p><br>
                </div>
                <div class="col-12 col-sm-4 col-md-1"></div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-2 col-md-1"></div>
                <div class="col-12 col-sm-2 col-md-2">
                    <a href="{{ url('/') }}" class="btn btn-success"><i class="far fa-hand-point-left"></i>&nbsp;&nbsp;Home</a>
                </div>
                <div class="col-12 col-sm-2 col-md-2"></div>
                <div class="col-12 col-sm-2 col-md-2"></div>
                <div class="col-12 col-sm-2 col-md-2"></div>
                <div class="col-12 col-sm-2 col-md-2">
                    <a href="mailto:moepapamyintshwe@gmail.com?subject = Feedback&body = Message" class="btn btn-success"><i class="fa fa-envelope-open text-green" style="font-size:15px"></i>&nbsp;&nbsp;Send Feedback</a>
                </div>
                <div class="col-12 col-sm-2 col-md-1"></div>
            </div>
        </div>
    </div>
</section>
@stop