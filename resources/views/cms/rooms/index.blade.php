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
                    <h1 class="h3 mb-0 text-gray-800">Rooms</h1>
                </div>

                <div class="d-sm-flex align-items-center justify-content-between mb-4">

                    <a href="{{ route('/cms/rooms/create_rooms') }}">
                        <input class="btn btn-success" type="button"  value="Create a new room" >
                    </a>
                </div>

                <div class="row">

                    @foreach($rooms as $room)
                        <div class="col-md-3 col-xs-3 col-sm-3 text-center" style="margin-top: 3%; -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);">
                            <div class="col-md-12">
                                <img class="" style="height: 200px; width: 250px;" src="{{url('uploads/'.$room->cover_image)}}">
                            </div>
                            <h5 style="height: 50px;" class="text-center">{{$room->title}}</h5>
                            <p1 style="height: 30px; font-size:20px;" class="text-center">{{$room->price}}$</p1>
                            <div class="row">
                                <div class="col-md-12" >

                                    <a href="{{ asset('/cms/rooms/gallery').'/'.$room->id }}">
                                        <input class="btn btn-success" type="button" name="edit" value="Room Gallery" style="width:100%;" >
                                    </a>
                                    <br>
                                    <br>
                                </div>
                                <div class="col-md-6" >

                                    <a href="{{ asset('/cms/rooms/edit_rooms').'/'.$room->id }}">
                                        <input class="btn btn-warning" type="button" name="edit" value="Edit" style="width:100%;" >
                                    </a>
                                </div>

                                <div class="col-md-6">
                                    <a href="{{ asset('/cms/rooms/delete_rooms').'/'.$room->id}}">
                                        <input class="btn btn-danger" type="button" name="edit" value="Delete" style="width:100%;" >
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Content Row -->



                <!-- Content Row -->

                <!-- /.container-fluid -->

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
