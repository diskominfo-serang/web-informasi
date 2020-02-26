<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <!-- Title -->
        <title>Diskominfo - Kabupaten Serang</title>
        <!-- Favicon -->
        <link rel="icon" href="img/core-img/logo-kabupaten-serang.jpg">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!-- Preloader -->
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
        <!-- ##### Header Area Start ##### -->
        <header class="header-area">
            <!-- Navbar Area -->
            <div class="mag-main-menu" id="sticker">
                <div class="classy-nav-container breakpoint-off">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="magNav">
                        <!-- Nav brand -->
                        <a href="index.html" class="nav-brand"><img src="img/core-img/logo-kominfo2.png" alt="Dinas Komunikasi Informatika Persandian dan Statistik - Kabupaten Serang" title="Dinas Komunikasi Informatika Persandian dan Statistik - Kabupaten Serang"></a>
                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>
                        <!-- Untuk Menu -->
                        <div class="nav-content d-flex align-items-center">
                            <?php include 'include/menu.php'; ?>
                            <div class="top-meta-data d-flex align-items-center">
                                <!-- Top Search Area -->
                                <div class="top-search-area">
                                    <form action="index.html" method="post">
                                        <input type="search" name="top-search" id="topSearch" placeholder="Ketik dan Enter...">
                                        <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- ##### Header Area End ##### -->
        <!-- ##### Hero Area Start ##### -->
        <?php include 'include/hero.php'; ?>
        <!-- ##### Hero Area End ##### -->
        <!-- ##### Mag Posts Area Start ##### -->
        <section class="mag-posts-area d-flex flex-wrap">
            <!-- >>>>>>>>>>>>>>>>>>>>
            Main Posts Area
            <<<<<<<<<<<<<<<<<<<<< -->
            <?php include 'include/main.php'; ?>
            <!-- >>>>>>>>>>>>>>>>>>>>
            Post Right Sidebar Area
            <<<<<<<<<<<<<<<<<<<<< -->
            <?php include 'include/rightbar.php'; ?>
        </section>
        <!-- ##### Mag Posts Area End ##### -->
        <!-- ##### Footer Area Start ##### -->
        <?php include 'include/footer.php'; ?>
        <!-- ##### Footer Area End ##### -->
        <!-- ##### All Javascript Script ##### -->
        <!-- jQuery-2.2.4 js -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <!-- Popper js -->
        <script src="js/bootstrap/popper.min.js"></script>
        <!-- Bootstrap js -->
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <!-- All Plugins js -->
        <script src="js/plugins/plugins.js"></script>
        <!-- Active js -->
        <script src="js/active.js"></script>
    </body>
</html>
