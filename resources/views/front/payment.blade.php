@extends('front.layouts.app')
@section('style')
    <style>
        .mainmenu-area {

            padding: 10px 0;

            background-color: #00DBDE;
            background-image: linear-gradient(90deg, #00DBDE 0%, #FC00FF 100%);
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
                    <h2 class="heading-4 title purple">Join <span>Us</span></h2>
                </div>
                <form id="sendRequest">
                    @csrf
                    <div class="alert alert-success alert-success-message" style="display:none">
                        {{ Session::get('success') }}
                    </div>
                    <input type="hidden" id="package" name="package" value="{{$package_id}}">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="Header_Item_title">Account Information</p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group wow fadeInUp">
                                <label>First Name</label>
                                <input id="first_name" name="first_name"  required type="text" class="form-control" placeholder="Your Name">
                                <span><i class="fa fa-user-o" aria-hidden="true"></i></span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group wow fadeInUp">
                                <label>Last Name</label>
                                <input id="second_name" name="second_name"  required  type="text" class="form-control" placeholder="Your Name">
                                <span><i class="fa fa-user-o" aria-hidden="true"></i></span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group wow fadeInUp">
                                <label> Business Name</label>
                                <input id='business_name' name='business_name' required type="text" class="form-control" placeholder="Your  Business Name">
                                <span><i class="fa fa-line-chart" aria-hidden="true"></i></span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group wow fadeInUp">
                                <label>Country</label>

                                <span><i class="fa fa-home" aria-hidden="true"></i></span>
                                <select id="country_id" name='country_id' class="form-control">
                                    <option>select country</option>
                                    @if (!empty($countries))
                                        @foreach ($countries as $country)
                                            <option value={{ $country->id }}>{{ $country->name_en }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group wow fadeInUp">
                                <label> City </label>
                                {{-- <input type="text" class="form-control" placeholder="Your city"> --}}
                                <span><i class="fa fa-home" aria-hidden="true"></i></span>
                                <select name='city_id' id="city_id" required class="form-control">

                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group wow fadeInUp">
                                <label>Street Adress </label>
                                <input id='address' name='address' required type="text" class="form-control" placeholder="Your Adress">
                                <span><i class="fa fa-home" aria-hidden="true"></i></span>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group wow fadeInUp">
                                <label>Phone</label>
                                <input  id='phone' name='phone' required type="text" class="form-control" placeholder="+02 000 000 000">
                                <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group wow fadeInUp">
                                <label>Email</label>
                                <input id='email' name='email' required type="text" class="form-control" placeholder="Your Name">
                                <span><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                            </div>
                        </div>



                        <div class="col-lg-12">
                            <div class="loginButoon wow fadeInUp">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $("#country_id").on('change', function() {
                    event.preventDefault();
                    let country_id = $('#country_id').val();
                    var el = $('select[name="city_id"]');
                   
                    $.ajax({
                        url: "cities_by_country_id",
                        type: "POST",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            country_id: country_id,

                        },
                        success: function(response) {
                            $.each(response.cities, function(k, v) {
                            
                                $('#city_id').append(`<option value="${ v['id']}">
                                       ${ v['name_en']}
                                  </option>`);
                            });
                        }
                        });
                        
                    });
                    $('#sendRequest').on('submit', function(event) {
                        event.preventDefault();

                        let first_name = $('#first_name').val();
                        let second_name = $('#second_name').val();
                        let email = $('#email').val();
                        let phone = $('#phone').val();
                        let business_name = $('#business_name').val();
                        let address = $('#address').val();
                        let country_id = $('#country_id').val();
                        let city_id = $('#city_id').val();
                        let package = $('#package').val();

                        $.ajax({
                            url: "order",
                            type: "POST",
                            data: {
                                "_token": "{{ csrf_token() }}",
                                first_name: first_name,
                                second_name: second_name,
                                email: email,
                                phone: phone,
                                business_name: business_name,
                                address: address,
                                country_id: country_id,
                                city_id: city_id,
                                package:package
                            },
                            success: function(response) {

                                $(".alert-success-message").css("display", "block");
                                $(".alert-success-message").html(
                                        '<P style="text-align:center">Thank you.').hide()
                                    .fadeIn(1500, function() {
                                        $('.alert-success-message');
                                    }).fadeOut(1500, function() {
                                        $('.alert-success-message');
                                    }).reset();
                            },
                        });
                        document.getElementById("sendRequest").reset();
                    });

    </script>
@endsection
