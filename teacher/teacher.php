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
                    <div class="d-flex justify-content-between align-items-center mt-4 mb-4">
                        <h1 class="text-dark fw-bold border-start border-danger border-5 ps-3">Teacher Directory</h1>
                        <a href="./createNew.php" class="btn btn-success shadow-sm">
                            <i class="bi bi-plus-circle me-1"></i> Add New Teacher
                        </a>
                    </div>

                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-white py-3">
                            <h5 class="card-title mb-0 text-muted"><i class="bi bi-table me-2"></i>Teacher Records</h5>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle mb-0">
                                    <thead class="table-light">
                                        <tr class="text-uppercase small fw-bold">
                                            <th class="ps-4">ID</th>
                                            <th>Photo</th>
                                            <th>Teacher Name</th>
                                            <th>Course Name</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include('../init/db.init.php');
                                        global $db;
                                        $query = $db->prepare("SELECT tbl_teachers.*, tbl_course.course_name 
                                                 FROM tbl_teachers
                                                 LEFT JOIN tbl_course ON tbl_teachers.course_id = tbl_course.id");
                                        $query->execute();
                                        $result = $query->get_result();

                                        if ($result && $result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                // Handle missing photos
                                                $photoPath = !empty($row['photo']) ? $row['photo'] : '../assets/img/default-avatar.png';
                                        ?>
                                                <tr>
                                                    <td class="ps-4 fw-bold text-muted">#<?php echo $row['teacher_id'] ?></td>
                                                    <td>
                                                        <img src="<?php echo $photoPath ?>"
                                                            alt="Profile"
                                                            width="50"
                                                            height="50"
                                                            class="rounded-circle object-fit-cover border">
                                                    </td>
                                                    <td>
                                                        <div class=" text-dark"><?php echo htmlspecialchars($row['teacher_name']) ?></div>
                                                    </td>
                                                    <td>
                                                        <span>
                                                            <?php echo htmlspecialchars($row['course_name'] ?? 'N/A') ?>
                                                        </span>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="./view_teacher.php?teacher_id=<?php echo $row['teacher_id']; ?>" class="btn btn-primary">View</a>
                                                        <a href="./edit.php?teacher_id=<?php echo $row['teacher_id']; ?>" class="btn btn-success">Edit</a>
                                                        <a href='./delete.php?teacher_id=<?php echo $row['teacher_id'] ?> ' onclick="return confirm('Are you sure you want to delete this record?');" class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                        <?php
                                            }
                                        } else {
                                            echo "<tr><td colspan='5' class='text-center py-5 text-muted'>No records found.</td></tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="py-5"></div>
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