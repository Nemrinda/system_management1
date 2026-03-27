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
                    <div class="d-flex justify-content-between align-items-center mt-4">
                        <div>
                            <h1 class="text-primary fw-bold mb-0 border-start border-primary border-5 ps-3">
                            <i class="fas fa-user-edit me-2"></i>   
                            Edit Teacher Profile
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
                    <hr class="my-4">

                    <div class="card-body bg-light-50 p-4">
                        <?php
                        include "../init/db.init.php";

                        // Get teacher data by ID
                        $id = $_GET['teacher_id'] ?? '';
                        $teacher = [];

                        if ($id) {
                            $stmt = $db->prepare("SELECT * FROM tbl_teachers WHERE teacher_id = ?");
                            $stmt->bind_param("i", $id);
                            $stmt->execute();
                            $result = $stmt->get_result();
                            $teacher = $result->fetch_assoc();
                            $stmt->close();
                        }

                        // Fetch courses for dropdown
                        $courses = [];
                        $result = $db->query("SELECT id, course_name FROM tbl_course");
                        if ($result && $result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $courses[] = $row;
                            }
                        }
                        ?>
                        <form method="POST" action="./editNewAction.php" class="shadow-sm bg-white p-4 rounded-3 border" enctype="multipart/form-data">
                            <input type="hidden" name="teacher_id" value="<?= htmlspecialchars($teacher['teacher_id']); ?>">

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label fw-semibold">Teacher Name</label>
                                            <div class="input-group">
                                                <span class="input-group-text bg-light"><i class="fas fa-user text-muted"></i></span>
                                                <input type="text" name="teacher_name" class="form-control" placeholder="Enter Full Name" value="<?= htmlspecialchars($teacher['teacher_name']); ?>" required>
                                            </div>
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label fw-semibold">Gender</label>
                                            <select name="gender" class="form-select">
                                                <option value="" disabled>Select gender</option>
                                                <option value="Male" <?= $teacher['gender'] == 'Male' ? 'selected' : '' ?>>Male</option>
                                                <option value="Female" <?= $teacher['gender'] == 'Female' ? 'selected' : '' ?>>Female</option>
                                                <option value="Other" <?= $teacher['gender'] == 'Other' ? 'selected' : '' ?>>Other</option>
                                            </select>
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label fw-semibold">Phone Number</label>
                                            <div class="input-group">
                                                <span class="input-group-text bg-light"><i class="fas fa-phone text-muted"></i></span>
                                                <input type="text" name="phone" class="form-control" value="<?= htmlspecialchars($teacher['phone']); ?>">
                                            </div>
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label fw-semibold">Assigned Course</label>
                                            <select name="course_id" class="form-select">
                                                <option value="" disabled>Select course</option>
                                                <?php foreach ($courses as $course) : ?>
                                                    <option value="<?= $course['id'] ?>" <?= isset($teacher['course_id']) && $teacher['course_id'] == $course['id'] ? 'selected' : '' ?>>
                                                        <?= htmlspecialchars($course['course_name']) ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label fw-semibold">Contract Start</label>
                                            <input type="datetime-local" name="start_date" class="form-control" value="<?= date('Y-m-d\TH:i', strtotime($teacher['start_date'])) ?>">
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label class="form-label fw-semibold">Contract End</label>
                                            <input type="datetime-local" name="end_date" class="form-control" value="<?= date('Y-m-d\TH:i', strtotime($teacher['end_date'])) ?>">
                                        </div>

                                        <div class="mb-3 col-12">
                                            <label class="form-label fw-semibold">Home Address</label>
                                            <textarea name="address" class="form-control" rows="2"><?= htmlspecialchars($teacher['address']); ?></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 border-start ps-4 text-center">
                                    <label class="form-label fw-semibold d-block">Profile Photo</label>
                                    <div class="mb-3">
                                        <?php
                                        $currentPhoto = !empty($teacher['photo']) ? htmlspecialchars($teacher['photo']) : 'https://via.placeholder.com/150';
                                        ?>
                                        <img id="imagePreview" src="<?= $currentPhoto ?>"
                                            class="img-thumbnail shadow-sm mb-3"
                                            style="width: 180px; height: 180px; object-fit: cover; border-radius: 50%;">

                                        <div class="mt-2">
                                            <label for="photoInput" class="btn btn-outline-secondary btn-sm">
                                                <i class="fas fa-camera me-1"></i> Change Photo
                                            </label>
                                            <input id="photoInput" type="file" accept="image/*" name="photo" class="d-none" onchange="previewImage(event)">
                                            <p class="text-muted small mt-2">Allowed: JPG, PNG (Max 2MB)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4">

                            <div class="d-flex justify-content-end gap-2">
                                <a href="./teacher.php" class="btn btn-light border px-4">Cancel</a>
                                <button name="btn_update" type="submit" class="btn btn-primary px-4 fw-bold shadow-sm">
                                    <i class="fas fa-save me-1"></i> Update Teacher Record
                                </button>
                            </div>
                        </form>
                    </div>

                    <script>
                        function previewImage(event) {
                            const preview = document.getElementById('imagePreview');
                            const file = event.target.files[0];

                            if (file) {
                                preview.src = URL.createObjectURL(file);
                                preview.style.display = 'inline-block';
                            }
                        }
                    </script>
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

</html>