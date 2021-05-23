<section class="section-padding-top" id="testimonial-page">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 text-center">
                <div class="page-title">
                    <h4 class="heading-4 title purple">{{__('home.What Our Client Say')}}</h4>
                    <p>{{$site_details->client_description_en}}</p>
                </div>
                <div class="space-80"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                <div class="testimonials v2 dots-none side-arrow purple-nav">
                    @if($reviews )
                    @foreach($reviews as $review)
                    <div class="single-testimonial">
                        <div class="desc">{{$review->comment}}</div>
                        <h5 class="name">{{$review->name}}</h5>
                        <span class="position">{{$review->position}}</span>
                    </div>
                    @endforeach
                    @endif
                  
                </div>
            </div>
        </div>
    </div>
</section>