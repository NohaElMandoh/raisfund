<section class="section-padding-top" id="service-page">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 text-center">
                <div class="page-title">
                    <h4 class="heading-4 title purple">{{__('home.Why Choose Us')}}</h4>
                    <p>	{{$site_details->service_description_en}} </p>
                </div>
                <div class="space-80"></div>
            </div>
        </div>
        <div class="row">
            @if(!empty($services))
            @foreach($services as $service)
            <div class="col-xs-12 col-sm-4">
                <div class="single-service wow zoomIn" data-wow-delay="0.3s" >
                    <div class="service-icon">
                        <img src="{{Voyager::image($service->image)}}" alt="Service Icon">
                    </div>
                    <h4 class="title">{{$service->title_en}}</h4>
                    <p>{{$service->description_en}}</p>
                </div>
            </div>
       @endforeach
       @endif
        </div>
    </div>
</section>