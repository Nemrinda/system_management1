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
        <a class="navbar-brand ps-3" href="index.html">Course Dashboard</a>
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
                                <a class="nav-link py-2 mb-1 rounded-2 text-muted-hover" href="../students/student.php">
                                    <i class="fas fa-user-graduate me-2 small"></i> Students
                                </a>
                                <a class="nav-link py-2 mb-1 rounded-2 text-muted-hover" href="../teacher/teacher.php">
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
                    <div class="d-flex justify-content-between align-items-center mt-4 mb-4">
                        <div>
                            <h1 class="text-dark fw-bold border-start btn-outline-danger border-5 ps-3">Edit Course Catalog</h1>
                            <p class="text-muted ms-3 mb-0">Manage and view all available academic programs.</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <a href="./course.php" class="btn btn-outline-danger shadow-sm px-4">
                                <i class="bi bi-arrow-left me-1"></i> Back to Directory
                            </a>
                        </div>
                    </div>
                    <?php
                    include "../init/db.init.php";
                    //get data course by id
                    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                        $id = (int)$_GET['id'];
                        $stm = $db->prepare("SELECT * FROM tbl_course WHERE id = ?");
                        $stm->bind_param("i", $id);
                        $stm->execute();
                        $result = $stm->get_result();
                        $course = $result->fetch_assoc();
                        $stm->close();
                    } else {
                        die("Invalid course ID.");
                    }
                    ?>
                    <div class="card-body">
                        <form method="post" action="./updateAction.php" class="border p-3 rounded-3 border-primary" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo htmlspecialchars($course['id']); ?>">

                            <div class="row">
                                <div class="col">
                                    <div class="col-md-12">
                                        <label for="title" class="form-label">course_name</label>
                                        <input type="text" name="course_name" class="form-control" id="course_name" value="<?php echo htmlspecialchars($course['course_name']); ?>" placeholder="Input course name">
                                    </div>
                                    <div class="mb-3 col-md-12 mt-3">
                                        <label for="title" class="form-label">course_price</label>
                                        <input type="text" name="course_price" class="form-control" id="course_price" value="<?php echo htmlspecialchars($course['course_price']); ?>" placeholder="Input course price">
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label for="slidePhoto" class="form-label"> Photo</label>
                                        <input type="file" accept="image/*" name="photo" class="form-control" id="photo" onchange="previewImage(event)">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <button name="btn_update" type="submit" class="btn btn-success mb-3 mt-3">Update Course</button>
                                    </div>
                                </div>
                                <div class="col mt-4">
                                    <div class="col-12 d-flex align-items-center justify-content-center">
                                        <?php if (!empty($course['photo'])) : ?>
                                            <img class="border border-secondary" src="<?php echo htmlspecialchars($course['photo']); ?>" id="imagePreview" style="width: 300px; height: 300px; object-fit: cover;" />
                                        <?php else : ?>
                                            <img class="border border-secondary" id="imagePreview" style="width: 300px; height: 300px; object-fit: cover;" />
                                        <?php endif; ?>
                                    </div>

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



    <script>
        function previewImage(event) {
            const preview = document.getElementById('imagePreview');
            const file = event.target.files[0];

            if (file) {
                preview.src = URL.createObjectURL(file);
                preview.style.display = 'block';
            }
        }
    </script>
</body>

</html>