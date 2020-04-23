@include('layouts.head_scripts')
@include('layouts.header')

<link rel="stylesheet" type="text/css" href="{{asset('styles/booking.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/booking_responsive.css')}}">

<div class="home">
    <div class="background_image" style="background-image:url(images/booking.jpg)"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content text-center">
                        <div class="home_title">Book a room</div>
                        <div class="booking_form_container">
                            <form action="reservation" method="POST" class="booking_form" id="booking_form">
								@csrf
								<div class="d-flex flex-xl-row flex-column align-items-start justify-content-start">
									<label style="color:white; font-size:18px; top:30px;">Reserve room:</label>
									<div class="booking_input_container d-flex flex-row align-items-start justify-content-start flex-wrap">
										<div><input type="text" name="date_from" class=" booking_input booking_input_a booking_in" placeholder="Check in" required="required"></div>
										<div><input type="text" name="date_to" class="datepicker booking_input booking_input_a booking_out" placeholder="Check out" required="required"></div>

										<div>
											<select class="form-control" name="room_id" style="border-width:2px; width: 190%; height: 54px; background-color: grey; color:white;">
												<option value="">Room</option>
												@foreach ($rooms as $room)
													<option value="{{ $room->id }}">{{$room->title}}</option>
												@endforeach
											</select>
										</div>

									</div>
{{--									<div><button class="booking_button trans_200" >Book Now</button></div>--}}
									<div><button class="booking_button trans_200" type="submit" >Book Now</button></div>

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
						<h2 style="">Rooms in our offer:</h2>
						<div class="owl-carousel owl-theme booking_slider">

					@foreach ($rooms as $room)
							<!-- Slide -->
							<div class="booking_item">
								<div class="background_image" style="background-image:url({{asset('uploads/'.$room->cover_image)}})"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_item_content">
									<div class="booking_item_list">
										<p style="font-size:22px; color:white;">{{$room->description}}</p>
									</div>
								</div>
								<div class="booking_price">{{$room->price}}$/Night</div>
								<div class="booking_link"><a href="#">{{$room->title}}</a></div>
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
