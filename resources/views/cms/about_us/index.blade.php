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
                    <h1 class="h3 mb-0 text-gray-800">About us</h1>
                </div>
                <form action="{{ route('/cms/about_us/update_about_us') }}" method="">
                    @csrf
                    <input type="hidden" name="id_about_us" value="{{ $about_us->id }}" >

                    <label>Edit title</label>
                    <input class="form-control" name="title" value="{{ $about_us->title }}" >
                    <br>
                    <label>Edit description</label>
                    <textarea class="ckeditor form-control" name="description" cols="40" rows="6" id="description"
                              spellcheck="true"
                              placeholder="">
                     {{ $about_us->description }}
                </textarea>
                    <br>
                    <input class="btn btn-success" type="submit" value="Submit" >
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
