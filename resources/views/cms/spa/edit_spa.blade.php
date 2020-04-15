<!DOCTYPE html>
<html lang="en">
{{--<script type="text/javascript" src="{{ asset('/ckeditor/ckeditor.js') }}"></script>--}}
{{--<script src="{{ asset('/ckeditor/samples/js/sample.js') }}"></script>--}}
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
                    <h1 class="h3 mb-0 text-gray-800">Edit spa</h1>
                </div>
                <form action="{{ route('/cms/spa/update_spa') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="spas_id" value="{{ $spas->id }}" >
                    <div class="row">

                        <div class="col-md-12">
                            <label>Edit title</label>
                            <input class="form-control" name="title" value="{{ $spas->title }}" >
                       <br>
                        </div>

                        <div class="col-md-12">
                            <label>Edit description</label>
                            <textarea class="ckeditor form-control" name="description" cols="40" rows="6" id="description"
                                      spellcheck="true"
                                      placeholder="">
                                {{ $spas->description }}
                                </textarea>
                            <br>
                        </div>

                        <div class="col-md-12">
                            <label>Edit picture</label>
                            <div style="position:relative;">
                                <img class="" style="height: 200px" src="{{url('uploads/'.$spas->cover_image)}}">
                                <br>
                            </div>
                            <br>
                            <input class="btn btn-primary" style="width: 100%;padding: 0px 0px;" name="file"  type="file" />
                            <br>
                        </div>
                    <br>

                        <div style="position:relative; left:1%;">
                    <label>Edit spa employee</label>
                        <select class="form-control" name="employee_id">
                            @foreach ($employees as $employee)
                                <option value="{{ $employee->id }}">{{$employee->name}}</option>
                            @endforeach
                        </select>
                    <br>
                        </div>

                         <div class="col-md-12">
                            <label>Edit price</label>
                            <input class="form-control" name="price" value="{{ $spas->price }}" >
                        </div>
<br>

                        <div style="position:relative; left:1%;">
                        <div>
                            <label>Time and date from</label>
                            <input class="form-control" type="datetime-local" value="{{$spas->time_from}}" />
                        </div>

                        <div>
                            <label>Time and date to</label>
                            <input class="form-control" type="datetime-local" value="{{$spas->time_to}}" />
                        </div>
                        </div>
                    </div>
                    <br>
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
