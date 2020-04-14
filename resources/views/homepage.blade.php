@include('layouts.head_scripts')
@include('layouts.header')
@include('layouts.home')
@include('layouts.menu')

<!-- Split Section Right -->

<div class="split_section_right container_custom">
    <div class="container">
        <div class="row row-xl-eq-height">

            <div class="col-xl-6 order-xl-1 order-2">
                <div class="split_section_image">
                    <div class="background_image" style="background-image:url(images/milestones.jpg)"></div>
                </div>
            </div>

            <div class="col-xl-6 order-xl-2 order-1">
                <div class="split_section_right_content">
                    <div class="split_section_title"><h1>Luxury Resort</h1></div>
                    <div class="split_section_text">
                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse nec faucibus velit. Quisque eleifend orci ipsum, a bibendum lacus suscipit sit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse nec faucibus velit. Quisque eleifend orci ipsum, a bibendum lacus suscipit sit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse nec faucibus velit. Quisque eleifend orci.</p>
                    </div>

                    <!-- Milestones -->
                    <div class="milestones_container d-flex flex-row align-items-start justify-content-start flex-wrap">

                        <!-- Milestone -->
                        <div class="milestone d-flex flex-row align-items-start justify-content-start">
                            <div class="milestone_content">
                                <div class="milestone_counter" data-end-value="45">0</div>
                                <div class="milestone_title">Rooms available</div>
                            </div>
                        </div>

                        <!-- Milestone -->
                        <div class="milestone d-flex flex-row align-items-start justify-content-start">
                            <div class="milestone_content">
                                <div class="milestone_counter" data-end-value="21" data-sign-after="K">0</div>
                                <div class="milestone_title">Tourists this year</div>
                            </div>
                        </div>

                        <!-- Milestone -->
                        <div class="milestone d-flex flex-row align-items-start justify-content-start">
                            <div class="milestone_content">
                                <div class="milestone_counter" data-end-value="2">0</div>
                                <div class="milestone_title">Swimming pools</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Split Section Left -->

<div class="split_section_left container_custom">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="split_section_left_content">
                    <div class="split_section_title"><h1>Wedding venue</h1></div>
                    <div class="split_section_text">
                        <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse nec faucibus velit. Quisque eleifend orci ipsum, a bibendum lacus suscipit sit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse nec faucibus velit. Quisque eleifend orci ipsum, a bibendum lacus suscipit sit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse nec faucibus velit. Quisque eleifend orci.</p>
                    </div>

                    <!-- Loaders -->
                    <div class="loaders_container d-flex flex-row align-items-start justify-content-start flex-wrap">

                        <!-- Loader -->
                        <div class="loader_container text-center">
                            <div class="loader text-center" data-perc="0.9">
                                <div class="loader_content">
                                    <div class="loader_title">Good Services</div>
                                </div>
                            </div>
                        </div>

                        <!-- Loader -->
                        <div class="loader_container text-center">
                            <div class="loader text-center" data-perc="0.8">
                                <div class="loader_content">
                                    <div class="loader_title">Tourists</div>
                                </div>
                            </div>
                        </div>

                        <!-- Loader -->
                        <div class="loader_container text-center">
                            <div class="loader text-center" data-perc="1.0">
                                <div class="loader_content">
                                    <div class="loader_title">Satisfaction</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Loaders Image -->
            <div class="col-xl-6">
                <div class="split_section_image split_section_left_image">
                    <div class="background_image" style="background-image:url(images/loaders.jpg)"></div>
                </div>
            </div>

        </div>
    </div>
</div>



<!-- Footer -->

@include('layouts.footer');