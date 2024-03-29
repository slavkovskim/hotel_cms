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
                    <h1 class="h3 mb-0 text-gray-800">Edit Employee</h1>
                </div>
                <form action="{{ route('/cms/employees/update_employee') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <label>First Name</label>
                            <input class="form-control" name="name" value="{{$employe->name}}" />
                        </div>
                        <div class="col-md-3">
                            <label>Last Name</label>
                            <input class="form-control" name="surname" value="{{$employe->surname}}" />
                        </div>
                        <div class="col-md-3 text-center">
                            <label>Gender</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Male</label>
                                    <input class="form-control" type="radio" {{ ( $employe->gender == 0) ? 'checked' : '' }} name="gender" value="0" />
                                </div>
                                <div class="col-md-6">
                                    <label>Female</label>
                                    <input class="form-control" type="radio" {{ ( $employe->gender == 1) ? 'checked' : '' }} name="gender" value="1" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label>Email</label>
                            <input class="form-control" name="email" value="{{$employe->email}}" />

                        </div>
                        <div class="col-md-3">
                            <label>Phone</label>
                            <input class="form-control" name="phone" value="{{$employe->phone}}" />
                        </div>
                        <div class="col-md-3">
                            <label>Work position</label>
                            <select class="form-control" name="works_at">
                                <option value="">Choose</option>
                                <option {{ ( $employe->works_at == 0) ? 'selected' : '' }} value="0">Hotel</option>
                                <option {{ ( $employe->works_at == 1) ? 'selected' : '' }}  value="1">Spa</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label>Password</label>
                            <input class="form-control " name="password"  value="" />

                            <label style="color: red;">(Insert new password only if you want to change it!)</label>
                        </div>
                        <div class="col-md-3 -pull-right">
                            <input style="margin-top: 10%" class="btn btn-success -pull-right" type="submit" value="Submit" >
                        </div>
                    </div>
                    <input type="hidden" name="user_id" value="{{$employe->user_id}}" />
                    <input type="hidden" name="employe_id" value="{{$employe->id}}" />
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
