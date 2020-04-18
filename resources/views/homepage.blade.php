@include('layouts.head_scripts')
@include('layouts.header')
@include('layouts.home')
@include('layouts.menu')

<!-- Split Section Left dynamic-->
@foreach ($news as $new)
@if ($new->id %2 == 0)
{{--  if id%2==0  LEFT  else RIGHT  --}}
<div class="split_section_left container_custom">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="split_section_left_content">
                    <div class="split_section_title"><h1>{{$new->title}}</h1></div>
                    <div class="split_section_text">
                        {!!$new->description!!}
                                 </div>

                    <!-- Loaders -->
                    <div class="loaders_container d-flex flex-row align-items-start justify-content-start flex-wrap">

                        <!-- Loader -->


                    </div>
                </div>
            </div>

            <!-- Loaders Image -->
            <div class="col-xl-6">
                <div class="split_section_image split_section_left_image">
                    <div class="background_image" style="background-image:url({{asset('uploads/'.$new->cover_image)}})"></div>
                </div>
            </div>

        </div>
    </div>
</div>
@else
    <div class="split_section_right container_custom">
        <div class="container">
            <div class="row row-xl-eq-height">

                <div class="col-xl-6 order-xl-1 order-2">
                    <div class="split_section_image">
                        <div class="background_image" style="background-image:url({{asset('uploads/'.$new->cover_image)}})"></div>
                    </div>
                </div>

                <div class="col-xl-6 order-xl-2 order-1">
                    <div class="split_section_right_content">
                        <div class="split_section_title"><h1>{{$new->title}}</h1></div>
                        <div class="split_section_text">
                            {!!$new->description!!}
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
    @endif
@endforeach



<!-- Footer -->

@include('layouts.footer');