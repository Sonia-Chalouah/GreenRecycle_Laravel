<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <!-- Favicon -->
    <title>Green Recycle</title>
    <link rel="icon" href="{{ asset('img/logo/recycling.ico') }}" type="image/x-icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <style>
        /* Fixer la hauteur de la carte */
        .team-item {
            height: 400px; /* Taille fixe pour chaque carte */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        /* Fixer la taille de l'image et gérer l'aspect */
        .team-item img {
            width: 100%;
            height: 200px; /* Taille fixe de l'image */
            object-fit: cover; /* Ajuster l'image pour couvrir l'espace sans déformation */
        }

        /* Fixer la hauteur du texte */
        .team-text {
            padding: 20px;
            flex-grow: 1;
        }
    </style>
</head>
<body>
    <!-- Topbar Start -->
    @include('topbar')
    <!-- Topbar End -->
    <!-- Navbar Start -->
    @include('navbar')
    <!-- Navbar End -->
    <div class="container my-5">
        {{-- Success message --}}
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        {{-- Display the list of events --}}
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <p class="fs-5 fw-bold text-primary">Our Type Events</p>
                    <h1 class="display-5 mb-5">Discover Type Events</h1> <!-- Added title for clarity -->
                </div>
                <div class="row">
                    @foreach ($events as $event)
                        <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="team-item rounded">
                                @if($event->image)
                                    <img class="img-fluid" src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}">
                                @else
                                    <img class="img-fluid" src="{{ asset('img/no-image.jpg') }}" alt="No Image Available">
                                @endif
                                <div class="team-text">
                                    <h4 class="mb-0">{{ $event->title }}</h4>

                                    <a href="{{ route('events.events', $event->id) }}" class="btn btn-primary mt-auto">Go To Event <i class="fa fa-eye"></i></a> <!-- Bouton positionné en bas -->
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div> <!-- End row -->
                
            </div>
        </div>
    </div>
    <!-- Footer Start -->
    @include('footer')
    <!-- Footer End -->
    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/parallax/parallax.min.js') }}"></script>
    <script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>
    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
