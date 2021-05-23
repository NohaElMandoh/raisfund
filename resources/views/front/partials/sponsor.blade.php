<div class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 text-center">
                <div class="page-title">
                    <h4 class="heading-4 title">{{__('home.Trusted By')}}</h4>
                    <p>{{$site_details->sponsor_description_en}}</p>
                </div>
                <div class="space-80"></div>
            </div>
        </div>
        <div class="row">
            <div class="sponsors">
                @if(!empty($sponsors))
                @foreach($sponsors as $sponsor)
                <div class="item">
                    <img src="{{Voyager::image($sponsor->image)}}" alt="{{$sponsor->title_en}}">
                </div>
                @endforeach
               @endif
            </div>
        </div>
    </div>
</div>