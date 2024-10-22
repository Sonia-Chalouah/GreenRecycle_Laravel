
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Green Recycle</title>
    <link rel="icon" href="{{ asset('img/logo/recycling.ico') }}" type="image/x-icon">
    <!-- Custom fonts for this template-->
    <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">




</head>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('admin.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">


                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-dark bg-light topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars">zaazaz</i>
                    </button>

                    <!-- Topbar Search -->
                   @include('admin.topbar')
                <!-- End of Topbar -->

           <div>


<!-- resources/views/formations/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Create Training</title>
</head>
<body>


    <div class="container">
    <h1 class="h4 mb-4 text-gray-800">Create a New Training</h1>



    <form action="{{ route('formations.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control form-control-sm" name="name" id="name" value="{{ old('name') }}" >
            @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control form-control-sm" name="description" id="description" rows="3" >{{ old('description') }}</textarea>
            @error('description')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        </div>

        <div class="form-group">
            <label for="date_formation">Date:</label>
            <input type="date" class="form-control form-control-sm" name="date_formation" id="date_formation" value="{{ old('date_formation') }}" >
            @error('date_formation')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        </div>

        <div class="form-group">
            <label for="duree">Duration (in hours):</label>
            <input type="number" class="form-control form-control-sm" name="duree" id="duree" value="{{ old('duree') }}" >
            @error('duree')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        </div>

        <div class="form-group">
            <label for="lieu">Location:</label>
            <input type="text" class="form-control form-control-sm" name="lieu" id="lieu" value="{{ old('lieu') }}" >
            @error('lieu')
            <span class="text-danger">{{ $message }}</span>
        @enderror
        </div>

        <div class="form-group">
    <label for="image" class="btn btn-sm mb-3" style="background-color: #28a745; color: white; border-color: #28a745;">Choisir une image</label>
    <input type="file" class="form-control-file" name="image" id="image" accept="image/*" style="display: none;" onchange="updateFileName()">
    <span id="file-name" style="margin-left: 10px;">Aucune image choisie</span>
</div>

<div class="text-center">
    <button type="submit" class=""btn btn-sm mb-3" style="background-color: #28a745; color: white; border-color: #28a745;">Create Formation</button>

</div>

    </form>
</div>
</body>
</html>


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
@include('admin.logout')
<!-- Bootstrap core JavaScript-->
<script src="admin/vendor/jquery/jquery.min.js"></script>
<script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="admin/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="admin/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="admin/js/demo/chart-area-demo.js"></script>
<script src="admin/js/demo/chart-pie-demo.js"></script>

</body>
</html>
