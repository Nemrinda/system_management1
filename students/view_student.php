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
        <a class="navbar-brand ps-3" href="index.html">Course Bootstrap</a>
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
                    <div class="d-flex align-items-center justify-content-between mt-4 mb-4">
                        <h1 class="h2">Student Profile</h1>
                        <div class="d-flex align-items-center">
                            <a href="./student.php" class="btn btn-outline-danger shadow-sm px-4">
                                <i class="bi bi-arrow-left me-1"></i> Back to Directory
                            </a>
                        </div>
                    </div>

                    <?php
                    include "../init/db.init.php";
                    $id = intval($_GET['id']);

                    $sql = "SELECT tbl_students.*, tbl_course.course_name 
                    FROM tbl_students
                    LEFT JOIN tbl_course ON tbl_students.course= tbl_course.id
                    WHERE tbl_students.id = ?";

                    $stmt = $db->prepare($sql);
                    $stmt->bind_param("i", $id);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $course = $result->fetch_assoc();

                    $stmt->close();
                    $db->close();

                    if ($course):
                    ?>
                        <div class="card shadow border-0 overflow-hidden">
                            <div class="row g-0">
                                <div class="col-md-4 bg-light text-center p-5 border-end">
                                    <?php
                                    $photoPath = (!empty($course['photo']) && file_exists($course['photo']))
                                        ? htmlspecialchars($course['photo'])
                                        : "https://via.placeholder.com/300x300?text=No+Photo";
                                    ?>
                                    <div class="position-relative d-inline-block">
                                        <img src="<?= $photoPath ?>"
                                            class="img-fluid rounded-circle shadow-sm border border-4 border-white"
                                            style="width: 220px; height: 220px; object-fit: cover;"
                                            alt="Profile Photo" />
                                        <span class="position-absolute bottom-0 end-0 badge rounded-pill bg-primary px-3 py-2 border border-2 border-white">
                                            <?= htmlspecialchars($course['gender'] ?? 'Student') ?>
                                        </span>
                                    </div>

                                    <h3 class="mt-4 fw-bold text-dark mb-0"><?= htmlspecialchars($course['student_name']); ?></h3>
                                    <p class="text-muted small">ID: #<?= htmlspecialchars($course['id']); ?></p>

                                    <div class="mt-4 p-3 bg-white rounded-3 border shadow-sm">
                                        <p class="small text-uppercase fw-bold text-muted mb-1">Balance Due</p>
                                        <h4 class="text-danger fw-black mb-0">$<?= number_format($course['indebted'] ?? 0, 2) ?></h4>
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="card-body p-5">
                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <h5 class="text-uppercase fw-bold text-primary mb-0">Information Details</h5>
                                            <a href="./edit.php?id=<?= $course['id']; ?>" class="btn btn-outline-primary btn-sm rounded-pill px-3">
                                                <i class="fas fa-edit me-1"></i> Edit Profile
                                            </a>
                                        </div>

                                        <div class="list-group list-group-flush">
                                            <div class="list-group-item px-0 py-3 border-0 border-bottom">
                                                <div class="row">
                                                    <div class="col-sm-4 text-muted small text-uppercase fw-bold">Department / Course</div>
                                                    <div class="col-sm-8 fw-semibold text-dark">
                                                        <i class="fas fa-book-open text-primary me-2"></i>
                                                        <?= htmlspecialchars($course['course_name'] ?? 'Not Assigned') ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="list-group-item px-0 py-3 border-0 border-bottom">
                                                <div class="row">
                                                    <div class="col-sm-4 text-muted small text-uppercase fw-bold">Contact Number</div>
                                                    <div class="col-sm-8 fw-semibold text-dark">
                                                        <i class="fas fa-phone text-primary me-2"></i>
                                                        <?= htmlspecialchars($course['phone'] ?? 'N/A') ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="list-group-item px-0 py-3 border-0 border-bottom">
                                                <div class="row">
                                                    <div class="col-sm-4 text-muted small text-uppercase fw-bold">Full Address</div>
                                                    <div class="col-sm-8 text-secondary">
                                                        <i class="fas fa-map-marker-alt text-primary me-2"></i>
                                                        <?= htmlspecialchars($course['address'] ?? 'N/A') ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="list-group-item px-0 py-3 border-0">
                                                <div class="row">
                                                    <div class="col-sm-4 text-muted small text-uppercase fw-bold">Remarks</div>
                                                    <div class="col-sm-8 text-secondary italic">
                                                        "<?= htmlspecialchars($course['remark'] ?? 'No special notes available.') ?>"
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-5 g-3">
                                            <div class="col-sm-4">
                                                <div class="p-3 border-start border-primary border-4 bg-light">
                                                    <div class="small text-muted">Total Fee</div>
                                                    <div class="h5 mb-0">$<?= number_format($course['total'] ?? 0, 2) ?></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="p-3 border-start border-success border-4 bg-light">
                                                    <div class="small text-muted">Paid Amount</div>
                                                    <div class="h5 mb-0">$<?= number_format($course['paid'] ?? 0, 2) ?></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="p-3 border-start border-info border-4 bg-light">
                                                    <div class="small text-muted">Discount</div>
                                                    <div class="h5 mb-0"><?= htmlspecialchars($course['discount'] ?? 0) ?>%</div>
                                                </div>
                                            </div>
                                        </div>

                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="alert alert-warning">Teacher record not found.</div>
                    <?php endif; ?>

                </div>
                <div style="height: 10vh"></div>
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