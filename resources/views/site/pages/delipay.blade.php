@extends('site.app')
@section('title', 'ပို့ဆောင်ခနှင့်ငွေပေးချေစနစ်')

@section('content')
<section class="section-content bg padding-y">
    <div class="container">
        <div id="code_prod_complex">
            <div class="row">
                <div class="col-12 col-sm-4 col-md-2"></div>
                <div class="col-12 col-sm-4 col-md-8">
                    <h6 class="short"><i class="fas fa-truck"></i>&nbsp; သယ်ယူပို့ဆောင်ခနှင့်ငွေပေးချေစနစ် &nbsp;<i class="far fa-credit-card"></i></h6>
                    <p class="pagg">သယ်ယူပို့ဆောင်ခအနေဖြင့် မြို့နယ်အလိုက် ကွာခြားနိုင်ပါသည်။ မြို့အတွင်းပို့ခမှာ (၁၅၀၀)ကျပ် ဖြစ်ပါသည်။ နယ်ဝေးပို့ခမှာ (၂၅၀၀)ကျပ် ဖြစ်ပါသည်။</p><br>
                    <h6 class="little">(1)Pay with Wave Pay or Wave Money &nbsp;<img src="{{ url('wave.jpg') }}" style="width:25px; height:23px;"></h6>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6">
                            <p class="pagg" style="margin-left:10%;">WAVEPAY Account Name: Moe Pa Pa&nbsp;&nbsp;</p><br>
                            <p class="pagg" style="margin-left:10%;">WAVEPAY Account Ph-no: 09751360622&nbsp;&nbsp;</p><br>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6">
                            <img src="{{ url('wave.png') }}" style="width:95px; height:93px;">
                        </div>
                    </div>
                    <h6 class="little">(2)Pay with KBZPay or KBZ Bank &nbsp;<img src="{{ url('kbz.jpeg') }}" style="width:25px; height:23px;"></h6>
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-6">
                            <p class="pagg" style="margin-left:10%;">KBZPay Account Name: Moe Pa Pa&nbsp;&nbsp;</p><br>
                            <p class="pagg" style="margin-left:10%;">KBZPay Account No: 09751360622&nbsp;&nbsp;</p><br>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6">
                            <img src="{{ url('kbz.jpeg') }}" style="width:95px; height:93px;">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-2 col-md-2"></div>
                <div class="col-12 col-sm-2 col-md-2">
                    <a href="{{ url('/') }}" class="btn btn-success"><i class="far fa-hand-point-left"></i>&nbsp;&nbsp;Home</a>
                </div>
                <div class="col-12 col-sm-2 col-md-2"></div>
                <div class="col-12 col-sm-2 col-md-2"></div>
                <div class="col-12 col-sm-2 col-md-2">
                    <a href="mailto:moepapamyintshwe@gmail.com?subject = Feedback&body = Message" class="btn btn-success"><i class="fa fa-envelope-open text-green" style="font-size:15px"></i>&nbsp;&nbsp;Send Feedback</a>
                </div>
                <div class="col-12 col-sm-2 col-md-2"></div>
            </div>
        </div>
    </div>
</section>
@stop