<section class="team-area section-padding" id="team-page">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 text-center">
                <div class="page-title">
                    <h4 class="heading-4 title purple">{{__('home.Our Team of Experts')}}</h4>
                    <p>{{$site_details->team_description_en}}</p>
                </div>
                <div class="space-80"></div>
            </div>
        </div>
        <div class="row">
            @if(!empty($teams) )
            @foreach($teams as $team)
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="single-team wow fadeInUp box_2 purple" data-wow-delay="0.3s" >
                    <figure class="team-photo">
                        <img src="{{Voyager::image($team->image)}}" alt="">
                    </figure>
                    <div class="team-content">
                        <h4 class="team-name">{{$team->name}}</h4>
                        <div class="team-position">{{$team->position}}</div>
                        <div class="social">
                            <a href="{{$team->linkedin}}"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
          

</section>