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
                    <div class="text-center py-4">
                        <h1 class="mt-3 text-success fw-bold display-4">View Course Information</h1>
                        <p class="text-muted">Detailed overview of the selected academic module</p>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <a href="./course.php" class="btn btn-danger shadow-sm">
                            <i class="fas fa-arrow-left me-2"></i>Back to List
                        </a>
                    </div>


                    <?php
                    include "../init/db.init.php";

                    // Get and sanitize ID
                    $id = isset($_GET['id']) ? intval($_GET['id']) : 0;

                    // Use Prepared Statements for better security
                    $stmt = $db->prepare("SELECT * FROM `tbl_course` WHERE id = ?");
                    $stmt->bind_param("i", $id);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $course = $result->fetch_assoc();

                    if ($course) : // Only show the card if the course exists
                    ?>
                        <div class="card shadow-sm border border-primary">
                            <div class="row g-0 align-items-center">
                                <div class="col-md-4 text-center p-4">
                                    <?php
                                    // Improved check: if database has a value, show it. 
                                    // If you store paths like 'uploads/img.jpg', make sure the path is correct.
                                    if (!empty($course['photo'])) : ?>
                                        <img src="<?php echo htmlspecialchars($course['photo']); ?>"
                                            class="img-fluid rounded shadow-sm" style="max-height: 300px; object-fit: cover;" />
                                    <?php else : ?>
                                        <img src="https://via.placeholder.com/300x300?text=No+Photo"
                                            class="img-fluid rounded" />
                                    <?php endif; ?>
                                </div>

                                <div class="col-md-8">
                                    <div class="card-body">
                                        <span class="text-muted d-block">Course Name:</span>
                                        <h2 class="text-primary mb-4"><?php echo htmlspecialchars($course['course_name']); ?></h2>

                                        <div class="mb-3">
                                            <span class="text-muted d-block">Price:</span>
                                            <h3 class="fw-bold text-success">
                                                $<?php echo number_format($course['course_price'], 2); ?>
                                            </h3>
                                        </div>

                                        <hr>

                                        <div class="mt-4">
                                            <a href="./edit.php?id=<?php echo $course['id']; ?>" class="btn btn-success">Edit Course</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="alert alert-warning mt-4">Course not found.</div>
                    <?php endif;

                    $db->close();
                    ?>
                </div>
                <div style="height: 100vh"></div>
            </main>
        </div>
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