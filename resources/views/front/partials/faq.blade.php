<section class="section-padding-top" id="faq-page">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 text-center">
                <div class="page-title">
                    <h4 class="heading-4 title purple">{{__('home.Frequently asked questions')}}</h4>
                    <p>{{$site_details->faq_description_en}}</p>
                </div>
                <div class="space-80"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                @for($i=0;$i<5;$i++)
                <div class="faq-box">
                    <h4 class="title">{{$faqs[$i]->question}}</h4>
                    <p>{{$faqs[$i]->answer}}</p>
                </div>
               
                @endfor
            </div>
            <div class="col-xs-12 col-sm-6">
                @for($i=5;$i<8;$i++)
                <div class="faq-box">
                    <h4 class="title">{{$faqs[$i]->question}}</h4>
                    <p>{{$faqs[$i]->answer}} </p>
                </div>
                @endfor
             
                <div class="qustion-box-2">
                    <div class="qustion-icon">
                        <img src="{{asset('front/images/q-icon.png')}}" alt="">
                    </div>
                    <h4 class="title">{{__('home.Do you have any other questions?')}}</h4>
                    <p>{{__('home.Would be happy to hear how I can help you out.')}}</p>
                    <a href="mailto:{{$site_details->support_email}}"><i class="fa fa-envelope-o"></i> {{$site_details->support_email}}</a>
                </div>
            </div>
        </div>
    </div>
</section>