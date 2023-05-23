<?php
require_once '../auth/auth.php';
require_once '../auth/adminAuth.php';
include "../db/fetch_std.php";
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

    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />
    <script>
        function handleImageError(image) {
            image.onerror = null;
            image.src = 'https://img.freepik.com/free-icon/user_318-804790.jpg'; // Path to your default image
            image.alt = 'Default Image'; // Alt text for the default image
        }
    </script>

</head>

<body>
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <?php
        include "../part/header.php";
        include "../part/nav_search.php";
        ?>
        <!-- /#header -->

        <!-- Content -->
        <div class="content">
            <div class="row">
                <div class="col-lg-3 col-md-6">
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


                <div class="col-lg-3 col-md-6">
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


                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-3">
                                    <i class="pe-7s-browser"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text"><span class="count">11</span></div>
                                        <div class="stat-heading">Subjects</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-4">
                                    <i class="pe-7s-users"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text"><span class="count">
                                                <?php echo count($query); ?>
                                            </span></div>
                                        <div class="stat-heading">Students</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->
        <br><br><br><br><br>
        <center>
            <h3>Click here to start searching!</h3>
            <form action="search.php" class="search-bar">
                <input type="search" name="search" pattern=".*\S.*" required>
                <button class="search-btn" type="submit">
                    <span>Search</span>
                </button>
            </form>
            <?php
            if (isset($_GET['search'])) {
                include "../db/search_std.php";
                // Display search results
                $i = 0;
                if ($stmt->rowCount() > 0) {
                    echo "<h2>Search Results:</h2>";
                    ?>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="serial">#</th>
                                        <th class="avatar">Avatar</th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Attendance %</th>
                                        <th>Attendance No.</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = $stmt->fetch()) { ?>
                                        <?php
                                        $i++;
                                        $att_number = $row['score'];
                                        echo "<tr>";
                                        echo "<td class=\"serial\">" . ($i) . "</td>";
                                        echo "<td class=\"avatar\">";
                                        echo "<div class=\"round-img\">";
                                        echo '<a href="#"><img id="userImage" class="rounded-circle" src="../images/avatar/' . $row['avatar'] . '" alt="" onerror="handleImageError(this);"></a>';
                                        echo '</div>';
                                        echo '</td>';
                                        echo '<td>' . $row['id'] . '</td>';
                                        echo '<td>  <span class="name">' . $row['name'] . '</span> </td>';
                                        echo '<td> <span class="product">' . (round(($att_number / $total_lectures) * 100)) . '%</span> </td>';
                                        echo '<td><span class="count">' . $att_number . '</span></td>';
                                        echo '<td>';
                                        if (($att_number / $total_lectures) * 100 >= 50) {
                                            echo '<span class="badge badge-complete">Safe</span>';
                                        } else {
                                            echo '<span class="badge badge-pending">Warning</span>';
                                        }
                                        echo '</td>';
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div> <!-- /.table-stats -->
                    </div>
                    <?php
                } else {
                    echo "<p>No results found.</p>";
                }

                // Close database connection
                $pdo = null;
            }
            ?>
        </center>
        <br><br><br><br><br><br><br>
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