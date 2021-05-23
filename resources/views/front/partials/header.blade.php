<header id="home-page" class="header-area text-white xs-center v2" style="background-image: url('{{Voyager::image($site_details->bannar_bg)}}');background-position: top center; ">
    <div class="table-cell">
        <div class="container">
            <div class="row middle-row">
                <div class="col-xs-12 col-md-5">
                    <h3 class="heading-3 text-white wow fadeInUp" data-wow-delay="0.2s">{{$site_details->banar_title_en}}</h3>
                    <p class="wow fadeInUp" data-wow-delay="0.4s" >{{$site_details->banar_description_en}}</p>
                    <div class="space-30"></div>
                    <a href="{{route('register')}}" class="bttn-4 wow fadeInUp" data-wow-delay="0.6s">{{__('home.apply')}}</a>
                    <div class="space-60 hidden visible-xs visible-sm"></div>
                </div>
                <div class="hidden-xs col-md-6 col-md-offset-1">
                    <figure class="single-image wow fadeInRight">
                        <img src="{{asset('front/images/isomatric-1.png')}}" alt="Laptop">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</header>