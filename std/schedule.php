<?php
require_once '../auth/auth.php';
include "../db/fetch_std.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Schedule</title>
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
    <link rel="stylesheet" href="../assets/css/Schedule.css">
</head>
<script>
    function handleImageError(image) {
        image.onerror = null;
        image.src = 'https://img.freepik.com/free-icon/user_318-804790.jpg'; // Path to your default image
        image.alt = 'Default Image'; // Alt text for the default image
    }
</script>

<body>

    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php"><i class="menu-icon fa fa-user-circle"></i>Profile </a>
                    </li>
                    <li class="active">
                        <a href="schedule.php"><i class="menu-icon fa fa-table"></i>Schedule </a>
                    </li>
                    <li>
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
        <div class="content">
            <!-- Widgets  -->
            <div class="clearfix"></div>
            <!-- Orders -->
            <div class="container justify-content-center">
                <div class="row ">
                    <div class=" col-lg-12">
                        <div class="schedule-table table-responsive ">
                            <table class="table-responsive col-lg-12 bg-white justify-content-center" style="padding:0">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>08 am</th>
                                        <th>10 am</th>
                                        <th>12 pm</th>
                                        <th class="last">02 pm</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="day">Saturday</td>
                                        <td class="active" colspan="2">
                                            <h4>Communications</h4>
                                            <p>8:30 am - 11:40 am</p>
                                            <div class="hover">
                                                <h4>Communications</h4>
                                                <p>28202</p>
                                                <span>Dr.Nabila</span>
                                            </div>
                                        </td>
                                        <td class="active" colspan="2">
                                            <h4>Operating System</h4>
                                            <p>12:30 pm - 03 pm</p>
                                            <div class="hover">
                                                <h4>Operating System</h4>
                                                <p>27321</p>
                                                <span>Dr.Ahmed Amer</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="day">Sunday</td>
                                        <td class="active">
                                            <h4>Measurment</h4>
                                            <p> 10 am - 11 am</p>
                                            <div class="hover">
                                                <h4>Measurment</h4>
                                                <p>27321</p>
                                                <span>Dr.Howida</span>
                                            </div>
                                        </td>
                                        <td class="active">
                                            <h4>Computer Organizaion</h4>
                                            <p>10 am - 11:40 am</p>
                                            <div class="hover">
                                                <h4>Computer Organizaion</h4>
                                                <p>27321</p>
                                                <span>Dr.Tamer</span>
                                            </div>
                                        </td>
                                        <td class="active" colspan="2">
                                            <h4>Integrated Circuits</h4>
                                            <p>12:30 pm - 03 pm</p>
                                            <div class="hover">
                                                <h4>Integrated Circuits</h4>
                                                <p>28202</p>
                                                <span>Dr.Nisreen</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="day">Monday</td>
                                        <td class="active">
                                            <h4>Integrated Circuits</h4>
                                            <p>08:30 am - 10:00 am</p>
                                            <div class="hover">
                                                <h4>Integrated Circuits</h4>
                                                <p>25518</p>
                                                <span>Eng.Osama Samir</span>
                                            </div>
                                        </td>
                                        <td class="active">
                                            <h4>Computer Organizaion</h4>
                                            <p>10:00 am - 1:40 am</p>
                                            <div class="hover">
                                                <h4>Computer Organizaion</h4>
                                                <p>25518</p>
                                                <span>Eng.Doaa</span>
                                            </div>
                                        </td>
                                        <td class="active">
                                            <h4>Communications</h4>
                                            <p>12:30 pm - 02:00 pm</p>
                                            <div class="hover">
                                                <h4>Communications</h4>
                                                <p>27321</p>
                                                <span>Eng.Omar Oghlo</span>
                                            </div>
                                        </td>
                                        <td class="active">
                                            <h4>Measurments</h4>
                                            <p>02:00 pm - 03:30 pm</p>
                                            <div class="hover">
                                                <h4>Measurments</h4>
                                                <p>Lab</p>
                                                <span>Eng. Alaa</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="day">Tuesday</td>
                                        <td class="active">
                                            <h4>Power Electronics</h4>
                                            <p>08:30 am - 11 am</p>
                                            <div class="hover">
                                                <h4>Power Electronics</h4>
                                                <p>Lab</p>
                                                <span>Dr.Enas</span>
                                            </div>
                                        </td>
                                        <td class="active">
                                            <h4>Power Electronics</h4>
                                            <p>11:30 am - 12:30 Pm</p>
                                            <div class="hover">
                                                <h4>Power Electronics</h4>
                                                <p>27321</p>
                                                <span>Eng. AbdElMoniem Draz</span>
                                            </div>
                                        </td>
                                        <td class="active">
                                            <h4>Operating Systems</h4>
                                            <p>12:30 pm - 02:00 pm</p>
                                            <div class="hover">
                                                <h4>Operating Systems</h4>
                                                <p>Lab</p>
                                                <span>Eng.Ahmed AbdELBasit</span>
                                            </div>
                                        </td>
                                        <td></td>

                                    </tr>
                                    <tr>
                                        <td class="day">Wednesday</td>
                                        <td colspan="5">
                                            <h1>OFF</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="day">Thursday</td>
                                        <td colspan="5">
                                            <h1>OFF</h4>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
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

</body>

</html>