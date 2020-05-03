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
            <h1>Contact messages</h1>
<div style="position:relative;">
           @foreach($contact_uss as $contact_us)
      <div class="" style="border: 2px solid black; width:400px; text-align:center; color:black;">
       <div style="border:1px solid black;">  <p>Name: {{$contact_us->name}}</p> <p> Email: {{$contact_us->email}}</p> </div>
       <div style="border:1px solid black;">  <p>Subject: {{$contact_us->subject}}</p></div>
           <p> Message: </p> <p>{{$contact_us->message}}</p>

               <br>
               @endforeach
      </div>

</div>

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
@include('cms.layouts.footer')
@include('cms.layouts.js_footer')

</body>

</html>
