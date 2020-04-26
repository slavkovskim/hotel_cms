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
                <h1 class="h3 mb-0 text-gray-800">Spa reservations</h1>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Spa Name</th>
                            <th scope="col">Date and Time from</th>
                            <th scope="col">Date and Time to</th>
                            <th scope="col">Client Name</th>
                            <th scope="col">Client E-mail</th>
                            <th scope="col">Client Phone</th>
                            <th scope="col">Employee</th>
                            <th scope="col">Reservation Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $count=1; ?>
                        @foreach($spa_reservations as $reservation)
                            <tr>
                                <th scope="row">{{$count}}</th>
                                <td>{{$reservation->title}}</td>
                                <td>{{$reservation->time_date_from}}</td>
                                <td>{{$reservation->time_date_to}}</td>
                                <td>{{$reservation->name}}</td>
                                <td>{{$reservation->email}}</td>
                                <td>{{$reservation->phone}}</td>
                                <td>{{$reservation->ime_emp}}</td>
                                <td>
                                    @if($reservation->status==0)
                                        <a href="{{ asset('/cms/spa_reservations/changestatus').'/0/'.$reservation->id_reservation }}">
                                            <input class="btn btn-success" type="button" name="approve" value="Approve" >
                                        </a>
                                    @else
                                        <a href="{{ asset('/cms/spa_reservations/changestatus').'/1/'.$reservation->id_reservation }}">
                                            <input class="btn btn-danger" type="button" name="decline" value="Decline" >
                                        </a>
                                    @endif
                                </td>

                            </tr>
                            <?php $count++; ?>
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
