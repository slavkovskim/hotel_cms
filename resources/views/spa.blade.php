@include('layouts.head_scripts')
@include('layouts.header')

<link rel="stylesheet" type="text/css" href="{{asset('styles/booking.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/booking_responsive.css')}}">

<div class="home">
    <div class="background_image" style="background-image:url(images/spaCoverImage.jpg)"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content text-center">
                        <div class="home_title">Book a spa treatment</div>
                        <div class="booking_form_container">
                            <form action="#" class="booking_form" id="booking_form">
                                <div class="d-flex flex-xl-row flex-column align-items-start justify-content-start">
                                    <div class="booking_input_container d-flex flex-row align-items-start justify-content-start flex-wrap">
                                        <div><input type="text" class="datepicker booking_input booking_input_a booking_in" placeholder="Check in" required="required"></div>
                                        <div><input type="text" class="datepicker booking_input booking_input_a booking_out" placeholder="Check out" required="required"></div>
                                        <div><input type="number" class="booking_input booking_input_b" placeholder="Room" required="required"></div>
                                    </div>
                                    <div><button class="booking_button trans_200">Book Spa Now</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="booking">
    <div class="container">
        <div class="row">
            <div class="col">

                <!-- Booking Slider -->
                <div class="booking_slider_container">
                    <h2 style="">Spa treatments we can offer:</h2>
                    <div class="owl-carousel owl-theme booking_slider">

                    @foreach ($spas as $spa)
                        <!-- Slide -->
                            <div class="booking_item">
                                <div class="background_image" style="background-image:url({{asset('uploads/'.$spa->cover_image)}})"></div>
                                <div class="booking_overlay trans_200"></div>
                                <div class="booking_item_content">
                                    <div class="booking_item_list">
                                        <p style="font-size:22px; color:white;">{{$spa->description}}</p>
                                    </div>
                                </div>
                                <div class="booking_price">{{$spa->price}} $/treatment</div>
                                <div class="booking_link"><a href="#">{{$spa->title}}</a></div>
                            </div>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Details Right -->



<!-- Details Left -->


<!-- Special -->



<!-- Footer -->

@include('layouts.footer');
</div>
