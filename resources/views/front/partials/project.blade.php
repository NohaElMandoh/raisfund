@if(!empty($projects))

<section class="section-padding-top" style="background-image: url({{asset('front/images/section-bg-4.png')}});background-position: right center; background-size: 60% auto;">
    <div class="container">
        <div class="row middle-row">
            <div class="col-xs-12 col-md-5 wow fadeInLeft">
                <h4 class="heading-4">{{$projects[0]->title_en}}</h4>
                <p>{{$projects[0]->description_en}}</p>
                <div class="space-15"></div>
                <a href="{{route('project',$projects[0]->id)}}" class="bttn-4">{{__('home.Read More')}}</a>
                <div class="space-60 hidden visible-xs visible-sm"></div>
            </div>
            <div class="col-xs-12 col-md-6 col-md-offset-1 wow fadeInRight">
                <figure class="wow">
                    <img src="{{Voyager::image($projects[0]->image)}}" alt="deshbord">
                </figure>
            </div>
        </div>
    </div>
</section>

<!-- Project-Area / -->
<!-- Project-Area -->
<section   class="section-padding" style="background-image: url({{asset('front/images/section-bg-5.png')}}); background-size: 60% auto; background-position: bottom left;">
    <div class="container">
        <div class="row middle-row">
            <div class="col-xs-12 col-md-7 wow fadeInRight">
                <figure class="wow">
                    <img src="{{Voyager::image($projects[1]->image)}}" alt="deshbord">
                </figure>
                <div class="space-60 hidden visible-xs visible-sm"></div>
            </div>
            <div class="col-xs-12 col-md-5 wow fadeInLeft">
                <h6 class="upper text-blue">{{$projects[1]->sub_title_en}}</h6>
                <h4 class="heading-4">{{$projects[1]->title_en}}</h4>
                <p>{{$projects[1]->description_en}}</p>
                <div class="space-15"></div>
                <a href="{{route('project',$projects[1]->id)}}" class="bttn-4">{{__('home.Read More')}}</a>
            </div>
        </div>
    </div>

    @endif