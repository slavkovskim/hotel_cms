<!DOCTYPE html>
<html lang="en">
<script type="text/javascript" src="{{ asset('/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('/ckeditor/samples/js/sample.js') }}"></script>
@include('cms.layouts.head')

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
@include('cms.layouts.sidebar')
<!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
        @include('cms.layouts.navbar')
        <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Create a new type of spa treatment</h1>
                </div>
                <form method="POST" action="{{ route('/cms/spa/store_spa') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-12">
                            <label>Image of treatment</label>
                            <input class="btn btn-primary" style="width: 100%;padding: 0px 0px;" name="file"  type="file" />
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Insert name of treatment</label>
                                    <input class="form-control" name="title" value="" >
                                </div>
                                <div class="col-md-12">
                                    <label>Insert spa treatment description</label>
                                    <textarea class="ckeditor form-control" name="description" cols="40" rows="6" id="description"
                                              spellcheck="true"
                                              placeholder="">
                                    </textarea>
                                <div class="col-md-4">
                                    <label>Which employee can do this service</label> <!-- tuka treba nesto kako drop-down i lista na vrabotenite -->
{{--                                    <input class="form-control" name="employee_id" /> <!--not quite sure about this one -->--}}
                                    <select class="form-control" name="employee_id">
                                        <option value="">Choose SPA employee</option>
                                        @foreach ($employees as $employee)
                                        <option value="{{ $employee->id }}">{{$employee->name}}</option>
                                            @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label>Price per hour</label>
                                    <input class="form-control" name="price" />
                                </div>

                                    <div>
                                     <label>Time and date from</label>
                                        <input class="form-control" type="date" name="time_from" />
                                    </div>

                                    <div>
                                        <label>Time and date to</label>
                                        <input class="form-control" type="date" name="time_to" />
                                    </div>
                        </div>
                    </div>
                    {{--@endforeach--}}
                    <input type="submit" class="btn btn-primary pull-right" />
                </form>

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
        @include('cms.layouts.footer')
        <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
@include('cms.layouts.logout_modal')

@include('cms.layouts.js_footer')

</body>

</html>
