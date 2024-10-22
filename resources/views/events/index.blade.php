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
    <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f8f9fc;
        }

        .btn-icon {
            display: inline-flex;
            align-items: center;
            padding: 5px 10px;
            border: none;
            background: none;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .btn-icon:hover {
            background-color: #e2e6ea;
            border-radius: 5px;
        }

        .btn-icon i {
            margin-right: 5px; /* Space between icon and text */
        }

        table th, table td {
            vertical-align: middle; /* Center the cell content */
        }

        .table img {
            width: 100px;
            height: auto; /* Maintain image ratio */
        }
    </style>
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
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    @include('admin.topbar')
                </nav>
                <!-- End of Topbar -->

                <div class="container">
                    <h1 class="mb-4">Events List</h1>

                    {{-- Success message --}}
                    @if(session('success'))
                        <div>
                            <p class="alert alert-success">{{ session('success') }}</p>
                        </div>
                    @endif

                    {{-- Search input --}}
                    <div class="mb-3">
                        <input type="text" id="search" class="form-control" placeholder="Search by title...">
                    </div>

                    {{-- Button to create a new Event --}}
                    <div>
                        <a href="{{ route('events.create') }}" class="btn btn-success mb-3">Create New Event</a>
                    </div>

                    {{-- Display the list of Events --}}
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                               <th>Type Event</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($events as $event)
                                <tr>
                                    <td>{{ $event->title }}</td>
                                    <td>{{ $event->description }}</td>
                                   <td>{{ $event->TypeEvent->title ?? 'N/A' }}</td>
                                    <td>
                                        @if($event->image)
                                            <img src="{{ asset('storage/' . $event->image) }}" alt="Event Image: {{ $event->title }}">
                                        @else
                                            No image
                                        @endif
                                    </td>
                                    <td>
                                        {{-- Edit Button --}}
                                        <a href="{{ route('events.edit', $event->id) }}" class="btn-icon text-warning" title="Edit">
                                            <i class="fas fa-edit fa-lg"></i>
                                        </a>

                                        {{-- Delete Form --}}
                                        <form action="{{ route('events.destroy', $event->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-icon text-danger" title="Delete" onclick="return confirm('Are you sure you want to delete this event?')">
                                                <i class="fas fa-trash fa-lg"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{ route('type_events.statistics') }}" class="btn btn-success">View events Statistics</a>
                </div>
            </div>
            <!-- Footer -->
            @include('admin.footer')
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

    <script>
        // Écouter les frappes dans le champ de recherche
        document.getElementById('search').addEventListener('input', function() {
            let query = this.value.toLowerCase(); // Convertir en minuscule pour comparaison
            let rows = document.querySelectorAll('tbody tr'); // Sélectionner toutes les lignes du tableau

            rows.forEach(function(row) {
                // Récupérer le texte du titre dans la première colonne
                let title = row.querySelector('td:first-child').textContent.toLowerCase();
                
                // Vérifier si le titre contient la chaîne de recherche
                if (title.includes(query)) {
                    row.style.display = ''; // Afficher la ligne si elle correspond
                } else {
                    row.style.display = 'none'; // Masquer la ligne si elle ne correspond pas
                }
            });
        });
    </script>
</body>
</html>