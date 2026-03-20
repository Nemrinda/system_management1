<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Static Navigation - SB uAdmin</title>
    <link href="../css/style.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

</head>

<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.html">Start Bootstrap</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
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

                <a class="nav-link py-3 rounded-3 mb-1 transition-all active-link" href="../index.php">
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
                        <a class="nav-link py-2 mb-1 rounded-2 text-muted-hover" href="../teacher/teacher.php">
                            <i class="fas fa-chalkboard-teacher me-2 small"></i> Teacher
                        </a>
                        <a class="nav-link py-2 mb-1 rounded-2 text-muted-hover" href="../course/course.php">
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
                    <h1 class="mt-3 text-primary fw-bold fs-1 text-center">Update New Student</h1>
                    <div class=" col-md-12 d-flex justify-content-end">
                        <a href="./student.php" class="btn btn-danger mb-2 mx-2 mt-2">Back to List</a>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="./createAction.php" class="border p-3 rounded-3" enctype="multipart/form-data">
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="title" class="form-label">Student_name</label>
                                    <input type="text" name="student_name" class="form-control" id="student_name" placeholder="Input student_name">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="title" class="form-label">Gender</label>
                                    <select class="form-control form-select" name="gender" id="gender">
                                        <option value="choosegender">Choose gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="title" class="form-label">Phone</label>
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Input phone">
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="title" class="form-label">Course</label>
                                    <select class="form-control form-select" name="course">
                                        <option value="choosecourse">Choose course</option>
                                        <option value="php">Php</option>
                                        <option value="csharp">C#</option>
                                        <option value="cpp">C++</option>
                                        <option value="cprogramming">C Programming</option>
                                        <option value="vue">Vue</option>
                                        <option value="javascript">JavaScript</option>
                                        <option value="css">CSS</option>
                                        <option value="java">Java</option>

                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="title" class="form-label">Start_date</label>
                                    <input type="date" name="start_date" class="form-control" placeholder="start_date">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="title" class="form-label">Start_date</label>
                                    <input type="date" name="start_date" class="form-control" placeholder="start_date">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="title" class="form-label">Total</label>
                                    <input type="number" name="total" class="form-control" placeholder="Input total">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="title" class="form-label">Discount</label>
                                    <input type="number" name="discount" class="form-control" placeholder="Input discount">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="title" class="form-label">Piad</label>
                                    <input type="number" name="paid" class="form-control" placeholder="Input paid">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="title" class="form-label">Indebted</label>
                                    <input type="number" name="indebted" class="form-control" placeholder="Input indebted">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="title" class="form-label">Address</label>
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                        <label for="floatingTextarea">Comments</label>
                                    </div>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="slidePhoto" class="form-label"> Photo</label>
                                    <input type="file" accept="image/*" name="photo" class="form-control" id="photo" onchange="previewImage(event)">
                                    <img id="imagePreview" style="display:none; margin-top: 10px; max-width: 20%; height: auto;" />
                                </div>


                                <div class=" col-md-6">
                                    <button name="btn_save" type="submit" class="btn btn-success mb-2 mt-2">Update New</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </main>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>

    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>-->
    <!--<script src="js/scripts.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="../js/datatables-simple-demo.js"></script>
</body>

</html>s