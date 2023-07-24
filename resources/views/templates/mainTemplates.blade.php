<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>{{ $title }}</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

        <!-- DATATABLES -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">

        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="/css/styles.css" rel="stylesheet" />

        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
    </head>
    <body id="page-top">

        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
            <div class="container px-5">
                <a class="navbar-brand fw-bold" href="#page-top"><img src="/img/logoo.png" width= "100 px" alt="Super Laundry"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                        <li class="nav-item">
                            <a class="nav-link {{ ($active === "home") ? 'active' : '' }} me-lg-3" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ ($active === "products") ? 'active' : '' }} me-lg-3" href="/products">Products</a>
                        </li>
                        @auth
                        <li class="nav-item">
                            <a class="nav-link me-lg-3" href="/cart/{{ Auth::user()->id }}"><i class="bi bi-cart3"></i> My Cart</a>
                        </li>
                        @endauth
                    </ul>
                    @auth
                    <form action="/logout" method="post">
                        @csrf
                        <button class="btn bg-gradient-primary-to-secondary text-light rounded-pill px-3 mb-2 mb-lg-0" type="submit">
                            <span class="d-flex align-items-center">
                                <i class="bi bi-box-arrow-in-left me-2"></i>
                                <span class="small">Logout</span>
                            </span>
                        </button>
                    </form>
                    @else
                    <button class="btn bg-gradient-primary-to-secondary text-light rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#loginModal">
                        <span class="d-flex align-items-center">
                            <i class="bi bi-box-arrow-in-right me-2"></i>
                            <span class="small">Login</span>
                        </span>
                    </button>
                    @endauth
                </div>
            </div>
        </nav>

        @yield('container')

        <footer class="bg-black text-center py-5">
            <div class="container px-5">
                <div class="text-white-50 small">
                    <div class="mb-2">&copy; Your Website 2023. All Rights Reserved.</div>
                    <a href="#!">Privacy</a>
                    <span class="mx-1">&middot;</span>
                    <a href="#!">Terms</a>
                    <span class="mx-1">&middot;</span>
                    <a href="#!">FAQ</a>
                </div>
            </div>
        </footer>
        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-primary-to-secondary p-4">
                        <h5 class="modal-title font-alt text-white" id="loginModalLabel">Please Login</h5>
                        <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body border-0 p-4">
                        <form action="/login" method="post">
                            @csrf
                            <div class="form-floating mb-3">
                                <input class="form-control" name="email" id="email" type="email" placeholder="name@example.com" />
                                <label for="email">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" name="password" id="password" type="password" placeholder="Enter Password"/>
                                <label for="password">Password</label>
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary rounded-pill btn-lg mb-2" type="submit">Login</button>
                                <a href="/register" class="btn btn-outline-primary rounded-pill btn-lg">Register</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap Js-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <!-- Js-->
        <script src="/js/scripts.js"></script>

        <!-- DATATABLES -->
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
        <script>
            new DataTable('#table');
        </script>
    </body>
</html>