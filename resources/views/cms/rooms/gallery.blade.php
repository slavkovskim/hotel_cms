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
                    <h1 class="h3 mb-0 text-gray-800">Room Gallery</h1>
                </div>
                <form method="POST" action="{{ route('/cms/rooms/store_image') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <label>Choose images</label>
                    <input type="hidden" name="id_room" value="{{$room_id}}" >
                    <input class="btn btn-primary" style="width: 100%;padding: 0px 0px;" name="file[]" multiple  type="file" />
                    <input class="btn btn-success" type="submit" value="Submit">
                </form>


                <div class="row">
                    @if($rooms_gallery!=null)
                        @foreach($rooms_gallery as $room_gallery)
                            <div class="col-md-3 col-xs-3 col-sm-3 text-center" style="margin-top: 3%; ">
                                <div class="col-md-12">
                                    <img class="" style="height: 200px" src="{{url('uploads/'.$room_gallery->image)}}">

                                </div>
                                <p>Press the Delete button to remove picture from gallery.</p>
                                <div class="col-md-6">
                                    <a href="{{ asset('/cms/rooms/delete_gallery_image').'/'.$room_gallery->id}}">
                                        <input class="btn btn-danger" type="button" name="edit" value="Delete" style="width:100%;" >
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @endif
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
