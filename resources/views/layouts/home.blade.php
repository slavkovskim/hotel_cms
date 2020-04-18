<div class="home">
    <div class="background_image" style="background-image:url(images/about.jpg)"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content text-center">
                        <div class="home_title">Welcome to Hotel MS!</div>
                        <div class="booking_form_container">
                            <form action="#" class="booking_form" id="booking_form">
                                <div class="d-flex flex-xl-row flex-column align-items-start justify-content-start">
                                    <label style="color:white; font-size:18px; top:30px;">Reserve room:</label>
                                    <div class="booking_input_container d-flex flex-row align-items-start justify-content-start flex-wrap">
                                        <div><input type="text" class="datepicker booking_input booking_input_a booking_in" placeholder="Check in" required="required"></div>
                                        <div><input type="text" class="datepicker booking_input booking_input_a booking_out" placeholder="Check out" required="required"></div>

                                        <div>
                                        <select class="form-control" name="room_id">
                                            <option value="">Room</option>
                                            @foreach ($rooms as $room)
                                                <option value="{{ $room->id }}">{{$room->title}}</option>
                                            @endforeach
                                        </select>
                                  </div>




                                    </div>
                                    <div><button class="booking_button trans_200">Book Now</button></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>