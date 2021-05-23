@extends('front.layouts.app')

@section('content')
  <!-- Header-Area -->
  @include('front.partials.header')
  <!-- Header-Area / -->
  <!-- Service-Area -->
  @include('front.partials.services')
  <!-- Service-Area / -->
  <!-- Project-Area -->
  @include('front.partials.project')
  <!-- Feature-Area / -->
  <!-- Testimonial-Area -->
  @include('front.partials.clients')
  <!-- Testimonial-Area / -->
  <!-- Price-Area -->
  @include('front.partials.price')
  <!-- Price-Area -->
  @include('front.partials.gallery')

  @include('front.partials.team')

  @include('front.partials.contact_us')


  <!-- FAQ-Area -->
   @include('front.partials.faq')
  <!-- FAQ-Area -->
  <!-- Sponsor-Area -->
  @include('front.partials.sponsor')
  <!-- Sponsor-Area / -->
@endsection
@section('script')
<script type="text/javascript">
    $('#formAddContact').on('submit', function(event) {
        event.preventDefault();

        let name = $('#name').val();
        let email = $('#email').val();
        let phone = $('#phone').val();
        let website = $('#website').val();
        let message = $('#message').val();
        $.ajax({
            url: "contact_Us",
            type: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                name: name,
                email: email,
                phone: phone,
                website: website,
                message: message,
            },
            success: function(response) {

                $(".alert-success-message").css("display", "block");
                $(".alert-success-message").html('<P style="text-align:center">Thank you.').hide()
                    .fadeIn(1500, function() {
                        $('.alert-success-message');
                    }).fadeOut(1500, function() {
                        $('.alert-success-message');
                    }).reset();
            },
        });
        document.getElementById("formAddContact").reset();
    });

</script>
@endsection