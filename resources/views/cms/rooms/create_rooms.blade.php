<!DOCTYPE html>
<html lang="en">
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
                    <h1 class="h3 mb-0 text-gray-800">Create a new room</h1>
                </div>
                <form method="POST" action="{{ route('/cms/rooms/store_rooms') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-12">
                            <label>Cover image</label>
                            <input class="btn btn-primary" style="width: 100%;padding: 0px 0px;" name="file"  type="file" />
                            <div class="row">
                                <div class="col-md-12">
                                    <label>Insert title</label>
                                    <input class="form-control" name="title" value="" >
                                </div>
                                <div class="col-md-4">
                                    <label>Room type</label>
                                    <input class="form-control" name="room_type" />
                                </div>
                                <div class="col-md-4">
                                    <label>Number of beds</label>
                                    <input class="form-control" name="beds_number" />
                                </div>
                                <div class="col-md-4">
                                    <label>Room price</label>
                                    <input class="form-control" name="price" />
                                </div>
                            </div>
                            <label>Description about room</label>
                            <textarea class="ckeditor form-control" name="description" cols="40" rows="6" id="description"
                                      spellcheck="true"
                                      placeholder="">

                </textarea>
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
