@extends('front.layouts.app')
@section('style')
<style>
    .mainmenu-area {

padding: 10px 0;

background-color: #00DBDE;
background-image: linear-gradient(
90deg
, #00DBDE 0%, #FC00FF 100%);
}
    .mainmenu-area.affix.menu2 {
background-color: #833ce0;
}
</style>
@endsection
@section('content')

<div class="Forms_Join">
    <div class="container">
        <div class="Form_Content">
            <div class="page-title">
                <h2 class="heading-4 title purple">{{__('home.Join')}} <span>{{__('home.Us')}}</span></h2>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group wow fadeInUp">
                            <label>{{__('home.First Name')}}</label>
                            <input id="name" name='name' type="text" class="form-control @error('name') is-invalid @enderror" required placeholder="{{__('home.Your Name')}}">
                            <span><i class="fa fa-user-o" aria-hidden="true"></i></span>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group wow fadeInUp">
                            <label>{{__('home.Your Email')}}</label>
                            <input id="email" name='email' type="text" class="form-control @error('email') is-invalid @enderror" required placeholder="{{__('home.Your Email')}}">
                            <span><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group wow fadeInUp">
                            <label>{{__('home.Phone')}}</label>
                            <input id='phone' name='phone' type="text" class="form-control" required placeholder="+02 000 000 000">
                            <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group wow fadeInUp">
                            <label>{{__('home.Password')}}</label>
                            <input id="password" name='password' type="passworrd" class="form-control l @error('password') is-invalid @enderror" required placeholder="{{__('home.Your password')}}">
                            <span><i class="fa fa-lock" aria-hidden="true"></i></span>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>
                  
                
                    <div class="col-lg-12">
                        <div class="loginButoon wow fadeInUp">
                            <button type="submit" class="btn btn-primary">{{__('home.Submit')}}</button>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="Social">
                            <div class="TitleOr">
                                <span class="or">{{__('home.or')}}</span>
                            </div>
                            <div class="Links">
                                <a  href="{{ url('auth/facebook') }}" class="facbook"><img src="{{asset('front/images/facebook.png')}}"> {{__('home.Join with facebook')}}</a>
                                <a href="{{ url('auth/google') }}" class="facbook"><img src="{{asset('front/images/google.png')}}"> {{__('home.Join with google')}}</a>
                                <a href="#" class="facbook"><img src="{{asset('front/images/twitter.png')}}"> {{__('home.Join with twitter')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
@section('script')
 
<script>
    $(document).on('click', '#close-preview', function(){ 
$('.image-preview').popover('hide');
// Hover befor close the preview
$('.image-preview').hover(
    function () {
       $('.image-preview').popover('show');
    }, 
     function () {
       $('.image-preview').popover('hide');
    }
);    
});

$(function() {
// Create the close button
var closebtn = $('<button/>', {
    type:"button",
    text: 'x',
    id: 'close-preview',
    style: 'font-size: initial;',
});
closebtn.attr("class","close pull-right");
// Set the popover default content
$('.image-preview').popover({
    trigger:'manual',
    html:true,
    title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
    content: "There's no image",
    placement:'bottom'
});
// Clear event
$('.image-preview-clear').click(function(){
    $('.image-preview').attr("data-content","").popover('hide');
    $('.image-preview-filename').val("");
    $('.image-preview-clear').hide();
    $('.image-preview-input input:file').val("");
    $(".image-preview-input-title").text("Browse"); 
}); 
// Create the preview image
$(".image-preview-input input:file").change(function (){     
    var img = $('<img/>', {
        id: 'dynamic',
        width:250,
        height:200
    });      
    var file = this.files[0];
    var reader = new FileReader();
    // Set preview image into the popover data-content
    reader.onload = function (e) {
        $(".image-preview-input-title").text("Change");
        $(".image-preview-clear").show();
        $(".image-preview-filename").val(file.name);            
        img.attr('src', e.target.result);
        $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
    }        
    reader.readAsDataURL(file);
});  
});
</script>
@endsection