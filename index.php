<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Management System1</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="./css/style.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html" style="font-size: 25px;">Admin Dashboard</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..."
                    aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark bg-dark shadow-lg" id="sidenavAccordion" style="background-color: #1a1d20 !important;">
        <div class="sb-sidenav-menu">
            <div class="nav px-3">
                <div class="sb-sidenav-menu-heading text-uppercase small fw-bold text-muted mt-4 mb-2" style="font-size: 11px; letter-spacing: 1px;">
                    Main Core
                </div>

                <a class="nav-link py-3 rounded-3 mb-1 transition-all active-link" href="index.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    <span class="fw-medium">Dashboard</span>
                </a>

                <div class="sb-sidenav-menu-heading text-uppercase small fw-bold text-muted mt-3 mb-2" style="font-size: 11px; letter-spacing: 1px;">
                    Data Management
                </div>

                <a class="nav-link collapsed py-3 rounded-3 mb-1 transition-all" href="#" 
                   data-bs-toggle="collapse" data-bs-target="#collapseLayouts" 
                   aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    <span class="fw-medium">Tables</span>
                    <div class="sb-sidenav-collapse-arrow ms-auto"><i class="fas fa-chevron-down small"></i></div>
                </a>

                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav ms-4 border-start border-secondary border-opacity-25 ps-3">
                        <a class="nav-link py-2 mb-1 rounded-2 text-muted-hover" href="./students/student.php">
                            <i class="fas fa-user-graduate me-2 small"></i> Students
                        </a>
                        <a class="nav-link py-2 mb-1 rounded-2 text-muted-hover" href="./teacher/teacher.php">
                            <i class="fas fa-chalkboard-teacher me-2 small"></i> Teacher
                        </a>
                        <a class="nav-link py-2 mb-1 rounded-2 text-muted-hover" href="./course/course.php">
                            <i class="fas fa-book me-2 small"></i> Course
                        </a>
                    </nav>
                </div>
            </div>
        </div>
        
        <div class="sb-sidenav-footer bg-transparent border-top border-secondary border-opacity-25 py-3 px-4">
            <div class="small text-muted">Logged in as:</div>
            <div class="fw-bold text-white-50">Admin User</div>
        </div>
    </nav>
</div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <div class="mt-4 mb-5 pb-2 border-bottom">
                        <h1 class="fw-bold text-dark">System Dashboard</h1>
                        <p class="text-muted">Overview of your institution's records and statistics.</p>
                    </div>

                    <div class="row g-4">
                        <div class="col-xl-4 col-md-6">
                            <div class="card border-0 shadow-sm h-100 overflow-hidden">
                                <div class="card-body bg-danger bg-opacity-10 p-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="text-danger text-uppercase fw-bold mb-1">Teachers</h6>
                                            <h2 class="fw-bold mb-0">Manage</h2>
                                        </div>
                                        <div class="bg-danger bg-opacity-25 p-3 rounded-circle">
                                            <i class="fas fa-chalkboard-teacher fa-2x text-danger"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-danger border-0 py-3">
                                    <a class="small text-white stretched-link d-flex align-items-center justify-content-between text-decoration-none" href="./teacher/teacher.php">
                                        <span>View All Teachers</span>
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6">
                            <div class="card border-0 shadow-sm h-100 overflow-hidden">
                                <div class="card-body bg-primary bg-opacity-10 p-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="text-primary text-uppercase fw-bold mb-1">Students</h6>
                                            <h2 class="fw-bold mb-0">Directory</h2>
                                        </div>
                                        <div class="bg-primary bg-opacity-25 p-3 rounded-circle">
                                            <i class="fas fa-user-graduate fa-2x text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-primary border-0 py-3">
                                    <a class="small text-white stretched-link d-flex align-items-center justify-content-between text-decoration-none" href="./students/student.php">
                                        <span>View All Students</span>
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 col-md-6">
                            <div class="card border-0 shadow-sm h-100 overflow-hidden">
                                <div class="card-body bg-success bg-opacity-10 p-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="text-success text-uppercase fw-bold mb-1">Courses</h6>
                                            <h2 class="fw-bold mb-0">Curriculum</h2>
                                        </div>
                                        <div class="bg-success bg-opacity-25 p-3 rounded-circle">
                                            <i class="fas fa-book-open fa-2x text-success"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer bg-success border-0 py-3">
                                    <a class="small text-white stretched-link d-flex align-items-center justify-content-between text-decoration-none" href="./course/course.php">
                                        <span>View All Courses</span>
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-12 text-center text-muted">
                            <small>Last updated: <?= date('F d, Y') ?></small>
                        </div>
                    </div>
                </div>
            </main>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="./js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="./js/datatables-simple-demo.js"></script>
</body>

</html>