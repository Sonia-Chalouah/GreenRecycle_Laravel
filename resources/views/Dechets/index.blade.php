<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Green Recycle - Déchets</title>
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
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    @include('admin.topbar')
                    <!-- End of Topbar -->

                </nav>
                <!-- End of Topbar -->

                <!-- Page Content -->
                <div class="container">
                    <h1 class="my-4">Liste des Déchets</h1>
                    <a href="{{ route('addDechet') }}" class="btn btn-success mb-3">Ajouter un Déchet</a>
                    <a href="{{ route('centres.index') }}" class="btn btn-success mb-3">Centres</a>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Catégorie</th>
                                <th>Quantité</th>
                                <th>Centre de Recyclage</th> <!-- Add this column for the Centre name -->
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $dechet)
                                <tr>
                                    <td>{{ $dechet->id }}</td>
                                    <td>{{ $dechet->categorie }}</td>
                                    <td>{{ $dechet->quantite }}</td>
                                    <td>{{ $dechet->centreRecyclage ? $dechet->centreRecyclage->nom : 'N/A' }}</td> <!-- Display the Centre name -->
                                    <td>
                                        <!-- Edit Icon -->
                                        <a href="{{ url('/updateDechet', $dechet->id) }}" class="btn btn-link action-btn" title="Modifier">
                                            <i class="fas fa-edit text-info"></i> <!-- Edit Icon with Blue Color -->
                                        </a>
                    
                                        <!-- Delete Icon -->
                                        <form action="{{ route('dechets.destroy', $dechet->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-link action-btn" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce déchet ?');" title="Supprimer">
                                                <i class="fas fa-trash text-danger"></i> <!-- Trash Icon with Red Color -->
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- End of Page Content -->

            </div>
            <!-- End of Content Wrapper -->

            <!-- Footer -->
            @include('admin.footer')
            <!-- End of Footer -->
        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        @include('admin.logout')

        <!-- Bootstrap core JavaScript-->
        <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>

        <!-- Page level plugins -->
        <script src="{{ asset('admin/vendor/chart.js/Chart.min.js') }}"></script>

        <!-- Page level custom scripts -->
        <script src="{{ asset('admin/js/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('admin/js/demo/chart-pie-demo.js') }}"></script>

</body>
</html>
