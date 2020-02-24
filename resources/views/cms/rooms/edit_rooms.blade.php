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
                    <h1 class="h3 mb-0 text-gray-800">Edit room</h1>
                </div>
                <form action="{{ route('/cms/rooms/update_rooms') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="room_id" value="{{ $rooms->id }}" >
                    <div class="row">
                        <div class="col-md-12">
                            <label>Insert pictures</label>
                            <div class="col-md-6">
                                <img class="" style="height: 200px" src="{{url('uploads/'.$rooms->cover_image)}}">
                            </div>
                            <input class="btn btn-primary" name="file" type="file" value="" >
                        </div>

                        <div class="col-md-12">
                            <label>Insert title</label>
                            <input class="form-control" name="title" value="{{ $rooms->title }}" >
                        </div>

                        <div class="col-md-12">
                            <label>Insert room type</label>
                            <input class="form-control" name="room_type" value="{{ $rooms->room_type }}" >
                        </div>

                        <div class="col-md-12">
                            <label>Insert bed number</label>
                            <input class="form-control" name="beds_number" value="{{ $rooms->beds_number }}" >
                        </div>

                        <div class="col-md-12">
                            <label>Insert price</label>
                            <input class="form-control" name="price" value="{{ $rooms->price }}" >
                        </div>

                        <div class="col-md-12">
                            <label>Insert description</label>
                            <textarea class="ckeditor form-control" name="description" cols="40" rows="6" id="description"
                                      spellcheck="true"
                                      placeholder="">
                                {{ $rooms->description }}
                </textarea>
                        </div>
                    </div>
                    <input class="btn btn-success" type="submit" value="Submit" >
                    <input class="btn btn-danger"  type="submit" value="Cancel" >
                </form>

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
