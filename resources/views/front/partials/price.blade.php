<section class="section-padding-top" id="price-page">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 text-center">
                <div class="page-title">
                    <h4 class="heading-4 title purple">{{__('home.Simple and Transparent Pricing')}}</h4>
                    <p>{{$site_details->pricie_description_en}}</p>
                </div>
                <div class="space-80"></div>
            </div>
        </div>
        <div class="row">
            @if(!empty($plans))
            @foreach($plans as $plan)
            <div class="col-xs-12 col-sm-4">
                <div class="price-box purple wow fadeInLeft">
                    <h5 class="title">{{$plan->title_en}}</h5>
                    <div class="price-rate">${{$plan->price}}</div>
                    <div class="price-time">{{$plan->per_en}}</div> 
                    <div class="price-content">
                        <ul>
                            <li>{{$plan->newsletter}} {{__('home.Newsletters')}}</li>
                            <li>{{$plan->b_model_en}}</li>
                            <li>{{$plan->model_en}}</li>
                            <li>{{$plan->cources_en}} {{__('home.Course')}}</li>
                            <li>{{$plan->times_en}} {{__('home.to Crypto Hub')}}</li>
                        </ul>
                    </div>
                    <a href="{{route('payment',$plan->id)}}" class="bttn-3">@if ($loop->first){{__('home.Join Now')}} @else  {{__('home.Start My Trial')}}@endif</a>
                </div>
                <div class="space-60 hidden visible-xs"></div>
            </div>
            @endforeach
            @endif
           
        </div>
    </div>
</section>