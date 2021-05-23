<section id="contact-page" class="section-padding contact-area" style="background: url('images/welcome-4-Shape.png') no-repeat scroll center left 10px / 600px 100%;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 text-center">
                <div class="page-title">
                    <h4 class="heading-4 title">{{__('home.Contact our support forum')}}</h4>
                    <p>{{$site_details->contact_us_description_en}}</p>
                </div>
                <div class="space-80"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <form id="formAddContact" class="contactform">
                    {{ csrf_field() }}
                    <div class="alert alert-success alert-success-message" style="display:none">
                        {{ Session::get('success') }}
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="input-box">
                            <label for="name">{{__('home.Your Name')}}}} *</label>
                            <input type="text" name="name" id="name" class="form-input" required>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="input-box">
                            <label for="email">{{__('home.Your Email')}} *</label>
                            <input type="text" name="email" id="email" class="form-input"required >
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="input-box">
                            <label for="phone">{{__('home.Phone')}}</label>
                            <input type="text" name="phone" id="phone" class="form-input" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="input-box">
                            <label for="website">{{__('home.Website')}}</label>
                            <input type="text" id="website" name="website" class="form-input" required>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="input-box">
                            <label for="message">{{__('home.Message')}} *</label>
                            <textarea name="message" id="message" cols="30" rows="5" class="form-input" required></textarea>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <button class="bttn-3" type="submit">{{__('home.Submit')}} &nbsp;&nbsp;<i class="fa fa-paper-plane"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>