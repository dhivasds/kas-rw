<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Dashboard Kas RW</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Premium Bootstrap 5 Landing Page Template" />
    <meta name="keywords" content="bootstrap 5, premium, marketing, multipurpose" />
    <meta content="Themesbrand" name="author" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style.min.css" rel="stylesheet" type="text/css" />
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body data-bs-spy="scroll" data-bs-target="#navbar" data-bs-offset="20">
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src">
                    <img src="images/favicon.ico" width="30" height="30">
                    Kas RW
                </div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <!-- Button Logout Mobile -->
            <div class="app-header__menu">
                <span>
                    <a href="dashboard.html" type="button" class="btn-icon btn-icon-only btn btn-danger btn-sm mobile-toggle-header-nav">Logout</a>
                </span>
            </div>
            <!-- End Button Logout Mobile -->
            <div class="app-header__content">
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <!-- Profile Name -->
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        <?php echo $_SESSION['admin']; ?>
                                    </div>
                                    <div class="widget-subheading">
                                        Ketua RW
                                    </div>
                                </div>
                                <!-- End Profile Name -->

                                <!-- Button Logout -->
                                <div class="widget-content-right header-user-info ml-3">
                                    <a href="logout.php" type="button" class="btn-shadow p-1 btn btn-danger btn-sm">Logout</a>
                                    <!-- <button type="button" class="btn-shadow p-1 btn btn-danger btn-sm">
                                        Logout
                                    </button> -->
                                </div>
                                <!-- End Button Logout -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="app-main">
            <!-- Sidebar -->
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Dashboards Kas</li>
                            <li>
                                <a href="dashboard.html" class="mm-active">
                                    <i class="bi bi-cash"></i>
                                    Laporan Kas Keseluruhan
                                </a>
                            </li>

                            <li class="app-sidebar__heading">Laporan Kas</li>
                            <li>
                                <a href="kasMasuk.html">
                                    <i class="bi bi-graph-up-arrow"></i>
                                    Kas Masuk
                                </a>

                            </li>
                            <li>
                                <a href="kasKeluar.html">
                                    <i class="bi bi-graph-down-arrow"></i>
                                    Kas Keluar
                                </a>

                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Sidebar -->


            <div class="app-main__outer">
                <div class="app-main__inner">
                    <!-- Total -->
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Total Kas</div>
                                            <div class="widget-subheading">Total Seluruh Kas</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-success">Rp160.000</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Kas Masuk</div>
                                            <div class="widget-subheading">Total Kas Masuk</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-warning">Rp50.000</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content">
                                <div class="widget-content-outer">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Kas Keluar</div>
                                            <div class="widget-subheading">Total Kas Keluar</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-danger">Rp25.000</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- End Total -->

                    <!-- Table -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-header">Data Kas
                                    <div class="btn-actions-pane-right">
                                        <!-- Search -->
                                        <form class="d-flex" role="search">
                                            <input class="form-control me-2" type="search" placeholder="Search..">
                                            <button class="btn btn-outline-primary" type="submit">Search</button>
                                        </form>
                                        <!-- End Search -->
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>Jenis Pemasukan</th>
                                                <th class="text-center">Jumlah</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Keterangan</th>
                                                <th class="text-center">Created At</th>
                                                <th class="text-center">Updated At</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Data 1 -->
                                            <tr>
                                                <td class="text-center text-muted">1</td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">Penghiasan untuk Kemerdekaan
                                                                </div>
                                                                <div class="widget-subheading opacity-7">Lorem ipsum
                                                                    dolor sit.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">Rp25.000</td>
                                                <td class="text-center">
                                                    <div class="badge badge-danger">Kas Keluar</div>
                                                </td>
                                                <td class="text-center">Biaya Donatur Masyarakat RW 01</td>
                                                <td class="text-center">2022-11-27</td>
                                                <td class="text-center">2022-11-27</td>
                                                <td class="text-center">
                                                    <button type="button" id="PopoverCustomT-1" class="btn btn-success"><i class="bi bi-pencil-square"></i></button>
                                                    <button type="button" id="PopoverCustomT-1" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                                </td>
                                            </tr>
                                            <!-- End Data 1 -->

                                            <!-- Data 2 -->
                                            <tr>
                                                <td class="text-center text-muted">2</td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">Iuran Warga RW 01
                                                                </div>
                                                                <div class="widget-subheading opacity-7">Lorem ipsum
                                                                    dolor sit amet.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">Rp50.000</td>
                                                <td class="text-center">
                                                    <div class="badge badge-success">Kas Masuk</div>
                                                </td>
                                                <td class="text-center">Iuran Keamanan Warga</td>
                                                <td class="text-center">2022-11-26</td>
                                                <td class="text-center">2022-11-26</td>
                                                <td class="text-center">
                                                    <button type="button" id="PopoverCustomT-1" class="btn btn-success"><i class="bi bi-pencil-square"></i></button>
                                                    <button type="button" id="PopoverCustomT-1" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                                </td>
                                            </tr>
                                            <!-- End Data 2 -->
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-block text-center card-footer">
                                    <!-- Tambah Data -->
                                    <a href="tambahData.html" class="btn-wide btn btn-primary">Tambah Data</a>
                                    <button class="btn-wide btn btn-success">Simpan Data</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Table -->
                </div>
            </div>
        </div>
        <!-- JS -->
        <script type="text/javascript" src="js/main_dashboard.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>

</html>