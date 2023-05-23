<?php
require_once "../db/connect.php";
require_once '../auth/auth.php';
$att = $conn->prepare('SELECT score FROM student WHERE id = :id;');
$att->bindParam(':id', $_SESSION['id']);
$att->execute();
$att = $att->fetch(PDO::FETCH_ASSOC);
$total_lectures = 750;
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Attendance Smart System</title>
    <meta name="description" content="Attendance Smart System">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/style.css.map">

    <script>
        function handleImageError(image) {
            image.onerror = null;
            image.src = 'https://img.freepik.com/free-icon/user_318-804790.jpg'; // Path to your default image
            image.alt = 'Default Image'; // Alt text for the default image
        }
    </script>
</head>

<body>

    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">

                    <li>
                        <a href="index.php"><i class="menu-icon fa fa-user-circle"></i>Profile </a>

                    </li>
                    <li>
                        <a href="schedule.php"><i class="menu-icon fa fa-table"></i>Schedule </a>
                    </li>
                    <li class="active">
                        <a href="Std_Atdd.php"><i class="menu-icon fa fa-list-ul"></i>Attendance </a>
                    </li>
                    <li>
                        <a href="../logout.php"><i class="menu-icon fa fa-sign-out"></i>Log out </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php include "../part/header.php" ?>
        <!-- /#header -->

        <!-- Content -->
        <div class="content animated fadeIn">
            <div class="clearfix"></div>
            <!-- Orders -->
            <div class="orders">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="pe-7s-notebook"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">
                                                    <?php echo $total_lectures; ?>
                                                </span></div>
                                            <div class="stat-heading">Lectures</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-2">
                                        <i class="pe-7s-clock"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">750</span></div>
                                            <div class="stat-heading">Hours</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-3">
                                        <i class="pe-7s-browser"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text"><span class="count">5</span></div>
                                            <div class="stat-heading">Subjects</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    </div>
                </div>
                <div class="row justify-content-center ">
                    <div class="col-lg-6">
                        <div class="card mt-3">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">Measurments </h6>
                                    <span class="text-secondary">
                                        1
                                    </span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">Operating Systems</h6>
                                    <span class="text-secondary">
                                        1
                                    </span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">Computer Organization</h6>
                                    <span class="text-secondary">
                                        1
                                    </span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">Power Electronics</h6>
                                    <span class="text-secondary">
                                        1
                                    </span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">Communications</h6>
                                    <span class="text-secondary">
                                        1
                                    </span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">Integrated Circuits</h6>
                                    <span class="text-secondary">
                                        1
                                    </span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">Total Lectures Attended</h6>
                                    <span class="text-secondary">
                                        <?= $att['score'] ?>
                                    </span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                    <h6 class="mb-0">Total Lectures Absence</h6>
                                    <span class="text-secondary">
                                        <?= $total_lectures - $att['score'] ?>
                                    </span>
                                </li>
                                <li class="list-group-item d-flex justify-content-center align-items-center ">
                                    <?php
                                    if (($att['score'] / $total_lectures) * 100 > 50) {
                                        echo '<h2 class="text-success"> You Are Safe </h1>';
                                    } else {
                                        echo '<h2 class="text-danger"> You Are UnSafe </h1>';
                                    }
                                    ?>
                                </li>
                            </ul>
                        </div>
                        <!-- /# card -->
                    </div>
                </div>
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2023 - Attendance Smart System
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by Attendance Seekers</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="../assets/js/main.js"></script>

</html>