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
            <nav class="sb-sidenav accordion sb-sidenav-dark bg-dark shadow-lg" id="sidenavAccordion"
                style="background-color: #1a1d20 !important;">
                <div class="sb-sidenav-menu">
                    <div class="nav px-3">
                        <div class="sb-sidenav-menu-heading text-uppercase small fw-bold text-muted mt-4 mb-2"
                            style="font-size: 11px; letter-spacing: 1px;">
                            Main Core
                        </div>

                        <a class="nav-link py-3 rounded-3 mb-1 transition-all active-link" href="../index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            <span class="fw-medium">Dashboard</span>
                        </a>

                        <div class="sb-sidenav-menu-heading text-uppercase small fw-bold text-muted mt-3 mb-2"
                            style="font-size: 11px; letter-spacing: 1px;">
                            Data Management
                        </div>

                        <a class="nav-link collapsed py-3 rounded-3 mb-1 transition-all" href="#"
                            data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false"
                            aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            <span class="fw-medium">Tables</span>
                            <div class="sb-sidenav-collapse-arrow ms-auto"><i class="fas fa-chevron-down small"></i>
                            </div>
                        </a>

                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordion">
                            <nav
                                class="sb-sidenav-menu-nested nav ms-4 border-start border-secondary border-opacity-25 ps-3">
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
                    <div class="container-fluid px-4">
                        <div class="d-flex justify-content-between align-items-center mt-4 mb-4">
                            <div>
                                <h1 class="text-dark fw-bold mb-0 border-start border-primary border-5 ps-3">
                                    Add Student Profile
                                </h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb mb-0 ps-3">
                                        <li class="breadcrumb-item"><a href="./student.php"
                                                class="text-decoration-none text-muted">student</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Add New Profile</li>
                                    </ol>
                                </nav>
                            </div>

                            <div class="d-flex align-items-center">
                                <a href="./student.php" class="btn btn-outline-danger shadow-sm px-4">
                                    <i class="bi bi-arrow-left me-1"></i> Back to Directory
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="container mt-5 mb-5">
                        <div class="card shadow border-0">
                            <div class="card-header bg-primary text-white py-3 d-flex align-items-center justify-content-between">
                                <h4 class="mb-0 fw-bold"><i class="fas fa-user-plus me-2"></i> Student Registration</h4>
                                <span class="badge bg-white text-primary rounded-pill px-3">New Entry</span>
                            </div>

                            <div class="card-body p-4 bg-light-subtle">
                                <form method="POST" action="./createAction.php" enctype="multipart/form-data">

                                    <div class="row g-4 mb-4">
                                        <div class="col-md-6">
                                            <label for="student_name" class="form-label text-uppercase small fw-black text-muted">Full Name</label>
                                            <div class="input-group">
                                                <span class="input-group-text bg-white"><i class="fas fa-user text-primary"></i></span>
                                                <input type="text" name="student_name" class="form-control border-start-0" id="student_name" placeholder="e.g. John Doe" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="gender" class="form-label text-uppercase small fw-black text-muted">Gender</label>
                                            <select class="form-select border-primary-subtle" name="gender" id="gender">
                                                <option value="choosegender" selected disabled>Select...</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="phone" class="form-label text-uppercase small fw-black text-muted">Phone Number</label>
                                            <div class="input-group">
                                                <span class="input-group-text bg-white"><i class="fas fa-phone-alt text-primary"></i></span>
                                                <input type="text" name="phone" class="form-control border-start-0" id="phone" placeholder="000-000-000">
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    include "../init/db.init.php";

                                    // Fetch all courses
                                    $courses = [];
                                    $sql = "SELECT id, course_name FROM tbl_course";
                                    $result = $db->query($sql);
                                    if ($result && $result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            $courses[] = $row;
                                        }
                                    }
                                    ?>

                                    <div class="row g-4 mb-4">
                                        <div class="col-md-4">
                                            <label for="course" class="form-label text-uppercase small fw-black text-muted">Course Selection</label>
                                            <select name="course" class="form-select border-primary-subtle" id="course" required>
                                                <option value="" disabled selected>Select course...</option>
                                                <?php
                                                // Assuming your $courses fetch logic stays here
                                                foreach ($courses as $course):
                                                ?>
                                                    <option value="<?= htmlspecialchars($course['id']); ?>"><?= htmlspecialchars($course['course_name']); ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="start_date" class="form-label text-uppercase small fw-black text-muted">Start Date</label>
                                            <input type="date" name="start_date" class="form-control border-primary-subtle">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="end_date" class="form-label text-uppercase small fw-black text-muted">End Date</label>
                                            <input type="date" name="end_date" class="form-control border-primary-subtle">
                                        </div>
                                    </div>

                                    <div class="p-3 rounded-4 bg-white border mb-4 shadow-sm">
                                        <div class="row g-3 align-items-end">
                                            <div class="col-md-3">
                                                <label for="total" class="form-label text-uppercase small fw-bold">Total ($)</label>
                                                <input type="number" step="any" name="total" id="total" class="form-control form-control-lg bg-light" placeholder="Input total">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="discount" class="form-label text-uppercase small fw-bold">Discount (%)</label>
                                                <input type="number" step="any" name="discount" id="discount" class="form-control form-control-lg bg-light" placeholder="Input discount">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="paid" class="form-label text-uppercase small fw-bold">Paid ($)</label>
                                                <input type="number" step="any" name="paid" id="paid" class="form-control form-control-lg border-success" placeholder="Input paid">
                                            </div>
                                            <div class="col-md-3">
                                                <label for="indebted" class="form-label text-uppercase small fw-bold text-danger">Indebted ($)</label>
                                                <input type="number" step="any" name="indebted" id="indebted" class="form-control form-control-lg border-danger text-danger fw-bold" placeholder="Input indebted">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row g-4 mb-4">
                                        <div class="col-md-6">
                                            <label for="address" class="form-label text-uppercase small fw-black text-muted">Full Address</label>
                                            <textarea class="form-control" name="address" id="address" rows="2" placeholder="Street name, City..."></textarea>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="remark" class="form-label text-uppercase small fw-black text-muted">Special Remarks</label>
                                            <textarea class="form-control" name="remark" id="remark" rows="2" placeholder="Any additional notes..."></textarea>
                                        </div>
                                    </div>

                                    <div class="row g-4 mb-5">
                                        <div class="col-md-6">
                                            <div class="p-3 border rounded-3 bg-white text-center">
                                                <label class="form-label fw-bold d-block mb-3">Student Card Image</label>
                                                <input type="file" name="photo_card_student" id="photo_card_student" class="form-control mb-2" onchange="previewImage2(event)">
                                                <div class="d-flex justify-content-center">
                                                    <img id="imagePreview2" class="img-thumbnail shadow-sm" style="display:none; max-height: 120px; border-radius: 8px;" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="p-3 border rounded-3 bg-white text-center">
                                                <label class="form-label fw-bold d-block mb-3">Profile Photo</label>
                                                <input type="file" name="photo" id="photo" class="form-control mb-2" onchange="previewImage1(event)">
                                                <div class="d-flex justify-content-center">
                                                    <img id="imagePreview1" class="img-thumbnail shadow-sm" style="display:none; max-height: 120px; border-radius: 8px;" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr class="my-4 opacity-25">

                                    <div class="d-flex justify-content-between align-items-center">
                                        <button type="reset" class="btn btn-link text-decoration-none text-muted">Clear all fields</button>
                                        <div class="d-flex gap-2">
                                            <a href="./student.php" class="btn btn-outline-secondary px-4">Cancel</a>
                                            <button name="btn_save" type="submit" class="btn btn-primary px-5 fw-bold shadow-sm rounded-pill">
                                                <i class="fas fa-check-circle me-1"></i> Register Student
                                            </button>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>

    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>-->
    <!--<script src="js/scripts.js"></script>-->
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="../js/datatables-simple-demo.js"></script>
    <script>
        // Function to preview the image
        function previewImage1(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var image = document.getElementById('imagePreview1');
                image.style.display = 'block'; // Show image when loaded
                image.src = reader.result; // Set image source to the file's content
            }
            reader.readAsDataURL(event.target.files[0]); // Read the uploaded file
        }


        function previewImage2(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var image = document.getElementById('imagePreview2');
                image.style.display = 'block'; // Show image when loaded
                image.src = reader.result; // Set image source to the file's content
            }
            reader.readAsDataURL(event.target.files[0]); // Read the uploaded file
        }
    </script>


    <!--display img2 -->
    <script>
        // Function to preview the image
        function previewImage2(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var image = document.getElementById('imagePreview2');
                image.style.display = 'block'; // Show image when loaded
                image.src = reader.result; // Set image source to the file's content
            }
            reader.readAsDataURL(event.target.files[0]); // Read the uploaded file
        }
    </script>

    <!--calculateIndebted-->
    <script>
        function calculateIndebted() {
            const total = parseFloat(document.getElementById('total').value) || 0;
            const discount = parseFloat(document.getElementById('discount').value) || 0; // as %
            const paid = parseFloat(document.getElementById('paid').value) || 0;

            const discountedTotal = total - (total * (discount / 100));
            const indebted = discountedTotal - paid;

            document.getElementById('indebted').value = indebted.toFixed(2);
        }

        // Attach event listeners
        document.getElementById('total').addEventListener('input', calculateIndebted);
        document.getElementById('discount').addEventListener('input', calculateIndebted);
        document.getElementById('paid').addEventListener('input', calculateIndebted);
    </script>
</body>

</html>