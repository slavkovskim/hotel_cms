@include('layouts.head_scripts')

@include('layouts.header')

<title>Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="The River template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
<link href="plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">



<style>
    body{
        background-color: black;
    }

</style>

<div class="home">
    <div class="background_image" style="background-image:url(images/contact.jpg)"></div>
    <div class="home_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="home_content text-center">
                        <div class="home_title">Contact us!</div>
                        <h3 style="color: white;">Our staff at Hotel MS would be happy to hear your feedback! :)</h3>
                        <div class="booking_form_container">
                            <form action="#" class="booking_form" id="booking_form">
                                <div class="d-flex flex-xl-row flex-column align-items-start justify-content-start">

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact">
    <div class="container">


            <!-- Contact Content -->
            <div>
                <div class="contact_content">

                    <div class="contact_list">
                        <ul>
                            <li>Karpos, Skopje</li>
                            <li>+38971/000-111</li>
                            <li>mirkoslavkovski@gmail.com</li>
                        </ul>
                    </div>
                    <div class="contact_form_container">
                        <form method="POST" action="{{ route('contact.store') }}" class="contact_form" id="contact_form" enctype="multipart/form-data" >
                            @csrf
{{--                            <input type="hidden" name="id_contact_us" value="{{ $contact_us->id }}" >--}}
{{--                            <form method="POST" action="{{ route('/cms/rooms/store_rooms') }}" enctype="multipart/form-data">--}}
                            <div class="row">
                                <div class="col-md-6 input_container">
                                    <input type="text" name="name" class="contact_input" placeholder="Your name" required="required">
                                </div>
                                <div class="col-md-6 input_container">
                                    <input type="email" name="email" class="contact_input" placeholder="Your email address" required="required">
                                </div>
                            </div>
                            <div class="input_container"><input type="text" name="subject" class="contact_input" placeholder="Subject"></div>
                            <div class="input_container"><textarea name="message" class="contact_input contact_textarea" placeholder="Message" required="required"></textarea></div>
                            <button class="contact_button" type="submit">Send</button>
                        </form>
                    </div>
                </div>
            </div>



    </div>
</div>
