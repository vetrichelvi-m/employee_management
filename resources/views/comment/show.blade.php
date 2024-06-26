<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - Task</title>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="#">Task Managament</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i
                        class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!"> @php
                        $user = Auth::user();
                    @endphp
                            <div class="small"><b>{{ $user->name }}</b></div>
                        </a></li>
                    <li><a class="dropdown-item" href="{{ route('profile') }}">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="{{ route('auth.logout') }}">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <div class="sb-sidenav-menu-heading">Interface</div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            operartion
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="{{ route('comment.index') }}">Comment</a>
                                <a class="nav-link" href="#">Task</a>
                                <a class="nav-link" href="{{ route('auth.logout') }}">Logout</a></li>

                            </nav>
                        </div>


                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    @php
                        $user = Auth::user();
                    @endphp
                    <div class="small">Logged in as:{{ $user->name }}</div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">comment</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tables</li>
                    </ol>

                    <div class="card mb-4">

                        <div class="card-body bg-primary">

                            <body class="bg-primary">
                                <div id="layoutAuthentication">
                                    <div id="layoutAuthentication_content">
                                        <main>
                                            <div class="container">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-7">
                                                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                                                            <div class="card-header">
                                                                <h3 class="text-center font-weight-light my-4">Comment
                                                                </h3>
                                                            </div>
                                                            <div class="card-body">


                                                                <div class="row mb-3">
                                                                    <div class="col-md-6">
                                                                        <div class="form-floating mb-3 mb-md-0">

                                                                            <input class="form-control"
                                                                                value="{{ $comment->content }}"
                                                                                readonly />
                                                                            <label for="inputFirstName">Post</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-floating">
                                                                            <textarea id="description" class="form-control" placeholder="Enter Description" style="resize: none;" readonly>{{ $comment->task->title }}</textarea>
                                                                            <label for="description">Task Name</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <div class="col-md-6">
                                                                    <div class="form-floating mb-3 mb-md-0">

                                                                        <input class="form-control"
                                                                            value="{{ $comment->user->name }}"
                                                                            readonly />
                                                                        <label for="inputPasswordConfirm">
                                                                            User</label>

                                                                    </div>
                                                                </div>





                                                            </div>
                                                            <div class="mt-4  mb-0">
                                                                <div class="d-grid"><button type="submit"
                                                                        class="btn btn-primary btn-block"
                                                                        onclick="javascript:window.history.back();">Go
                                                                        Back</button>
                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                    </div>
            </main>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
</body>
</div>
</div>
</div>
</main>
<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Your Website 2023</div>
            <div>
                <a href="#">Privacy Policy</a>
                &middot;
                <a href="#">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
</script>
<script src="js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
    crossorigin="anonymous"></script>
<script src="js/datatables-simple-demo.js"></script>
<link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
<script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
