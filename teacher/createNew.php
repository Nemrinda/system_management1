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
        <a class="navbar-brand ps-3" href="index.html">Teacher Dashboard</a>
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
                                <a class="nav-link py-2 mb-1 rounded-2 text-muted-hover" href="./teacher/teacher.php">
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
                    <div class="container-fluid px-4">
                        <div class="d-flex justify-content-between align-items-center mt-4 mb-4">
                            <div>
                                <h1 class="text-dark fw-bold mb-0 border-start border-primary border-5 ps-3">
                                    Update Teacher Profile
                                </h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0 ps-3">
                                        <li class="breadcrumb-item"><a href="./teacher.php" class="text-decoration-none text-muted">Teachers</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Update Profile</li>
                                    </ol>
                                </nav>
                            </div>

                            <div class="d-flex align-items-center">
                                <a href="./teacher.php" class="btn btn-outline-danger shadow-sm px-4">
                                    <i class="bi bi-arrow-left me-1"></i> Back to Directory
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="container mt-2">
                            <div class="card shadow-sm">
                                <div class="card-header bg-primary text-white">
                                    <h4 class="mb-0">Teacher Registration</h4>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="./createAction.php" class="p-2" enctype="multipart/form-data">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label for="teacher_name" class="form-label fw-bold">Teacher Name</label>
                                                <input type="text" name="teacher_name" class="form-control" id="teacher_name" placeholder="Enter full name" required>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="gender" class="form-label fw-bold">Gender</label>
                                                <select class="form-select" name="gender" id="gender" required>
                                                    <option value="" selected disabled>Choose gender</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                    <option value="other">Other</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="phone" class="form-label fw-bold">Phone Number</label>
                                                <input type="tel" name="phone" class="form-control" id="phone" placeholder="e.g. 012345678">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="course_id" class="form-label fw-bold">Assigned Course</label>
                                                <select name="course_id" class="form-select" id="course_id" required>
                                                    <option value="" disabled selected>Select course</option>
                                                    <?php
                                                    include "../init/db.init.php";
                                                    $sql = "SELECT id, course_name FROM tbl_course";
                                                    $result = $db->query($sql);
                                                    if ($result && $result->num_rows > 0):
                                                        while ($course = $result->fetch_assoc()): ?>
                                                            <option value="<?= $course['id']; ?>"><?= htmlspecialchars($course['course_name']); ?></option>
                                                    <?php endwhile;
                                                    endif; ?>
                                                </select>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="start_date" class="form-label fw-bold">Start Date</label>
                                                <input type="date" name="start_date" id="start_date" class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="end_date" class="form-label fw-bold">End Date</label>
                                                <input type="date" name="end_date" id="end_date" class="form-control">
                                            </div>

                                            <div class="col-md-12">
                                                <label for="address" class="form-label fw-bold">Address</label>
                                                <textarea class="form-control" name="address" id="address" rows="3" placeholder="Enter full address..."></textarea>
                                            </div>

                                            <div class="col-md-12">
                                                <label for="photo" class="form-label fw-bold">Profile Photo</label>
                                                <input type="file" accept="image/*" name="photo" class="form-control" id="photo" onchange="previewImage(event)">
                                                <div class="mt-3">
                                                    <img id="imagePreview" class="img-thumbnail" style="display:none; max-width: 150px; height: auto;" />
                                                </div>
                                            </div>

                                            <div class="col-12 mt-4">
                                                <button name="btn_save" type="submit" class="btn btn-primary px-4">
                                                    <i class="bi bi-save"></i> Create Teacher Record
                                                </button>
                                                <button type="reset" class="btn btn-outline-secondary px-4">Reset</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>


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
        // Function to preview the image
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var image = document.getElementById('imagePreview');
                image.style.display = 'block'; // Show image when loaded
                image.src = reader.result; // Set image source to the file's content
            }
            reader.readAsDataURL(event.target.files[0]); // Read the uploaded file
        }
    </script>
</body>

</html>