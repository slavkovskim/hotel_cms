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
                    <h1 class="h3 mb-0 text-gray-800">Clients</h1>
                    <a href="{{ route('/cms/clients/create_client') }}">
                        <input class="btn btn-success" type="button" name="edit" value="Create new client" >
                    </a>
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Surname</th>
                            <th scope="col">Gender</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($clients as $client)
                            <tr>
                                <th scope="row">{{$client->id}}</th>
                                <td>{{$client->name}}</td>
                                <td>{{$client->surname}}</td>
                                <td>
                                    @if($client->gender==0)
                                        Male
                                    @else
                                        Female
                                    @endif
                                </td>

                                <td>{{$client->email}}</td>
                                <td>{{$client->phone}}</td>
                                <td>
                                    <a href="{{ asset('/cms/clients/edit_client').'/'.$client->id }}">
                                        <input class="btn btn-warning" type="button" name="edit" value="Edit" >
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ asset('/cms/clients/delete_client').'/'.$client->id.'/'.$client->user_id }}">
                                        <input class="btn btn-danger" type="button" name="edit" value="Delete" >
                                    </a>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

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
