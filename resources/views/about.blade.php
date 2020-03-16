@include('layouts.head_scripts')
@include('layouts.header')
@include('layouts.menu')

<style>
    body{
        background-color: black;
    }
</style>
<div class="about" style="background-color: black; color:white;">
    <div class="container">
        <br>
        <div class="row">
            <div class="col-lg-6">
                <div class="about_title"><h1>{{$about_us->title}}</h1></div>
            </div>
        </div>
        <div class="row about_row">

            <!-- About Content -->
            <div class="col-lg-6">
                <div class="about_content">
                    <div class="about_text">
                        {!! $about_us->description !!}
                    </div>

                </div>
            </div>

            <!-- About Images -->
            <div class="col-lg-6" style="top:150px;">
                <div class="about_images d-flex flex-row align-items-start justify-content-between flex-wrap">
                    <img src="images/about_1.png" alt="">
                    <img src="images/about_2.png" alt="">
                    <img src="images/about_3.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>