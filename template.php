<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboad | Ijin Absen</title>
    <link rel="icon" type="image/png" href="<?=base_url()?>assets/assets/img/pens_ic.ico" />
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?=base_url()?>assets/assets/img/favicon.png" rel="icon">
    <link href="<?=base_url()?>assets/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?=base_url()?>assets/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?=base_url()?>assets/assets/css/style.css" rel="stylesheet">
    <style>
    .img-circle {
        border-radius: 50%;
        border: 2px white;
    }
    </style>

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="<?=base_url()?>assets/assets/img/pens.png" alt="">
                <span class="d-none d-lg-block">Ijin Absen</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->
                <?php if($this->fungsi->user_login()->level == 1 || $this->fungsi->user_login()->level == 2) { ?>

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span
                            class="badge bg-warning badge-number"><?=$this->fungsi->count_pending_list() == NULL ? '0' : $this->fungsi->count_pending_list() ?></span>
                    </a><!-- End Notification Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">
                            You have 4 new notifications
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-exclamation-circle text-warning"></i>
                            <div>
                                <h4>Lorem Ipsum</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>30 min. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-x-circle text-danger"></i>
                            <div>
                                <h4>Atque rerum nesciunt</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>1 hr. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Sit rerum fuga</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>2 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-info-circle text-primary"></i>
                            <div>
                                <h4>Dicta reprehenderit</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer">
                            <a href="#">Show all notifications</a>
                        </li>

                    </ul><!-- End Notification Dropdown Items -->

                </li><!-- End Notification Nav -->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-chat-left-text"></i>
                        <span class="badge bg-primary badge-number"><?=$this->fungsi->count_current_date()?></span>
                    </a><!-- End Messages Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                        <li class="dropdown-header">
                            You have 3 new messages
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="<?=base_url()?>assets/assets/img/messages-1.jpg" alt=""
                                    class="rounded-circle">
                                <div>
                                    <h4>Maria Hudson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>4 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>Anna Nelson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>6 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>David Muldon</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>8 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="dropdown-footer">
                            <a href="#">Show all messages</a>
                        </li>

                    </ul><!-- End Messages Dropdown Items -->

                </li><!-- End Messages Nav -->
                <?php } ?>

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="<?=base_url('uploads/user/'.$this->fungsi->user_login()->image)?>" alt="Profile"
                            class="rounded-circle">
                        <span
                            class="d-none d-md-block dropdown-toggle ps-2"><?=$this->fungsi->user_login()->name?></span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6><?=$this->fungsi->user_login()->name?></h6>
                            <span><?=$this->fungsi->user_login()->level == 1 ? "Root" : ($this->fungsi->user_login()->level == 2 ? "Admin"  : "Pengguna")?></span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="<?=site_url('profil')?>">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="<?=site_url('auth/logout')?>">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="<?=$this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'nav-link' : 'nav-link collapsed'?>"
                    href="<?=site_url('dashboard')?>">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="<?=$this->uri->segment(1) == 'profil' || $this->uri->segment(1) == '' ? 'nav-link' : 'nav-link collapsed'?>"
                    href="<?=site_url('profil')?>">
                    <i class="bi bi-person"></i>
                    <span>Profil</span>
                </a>
            </li><!-- End Profile Page Nav -->
            <?php if($this->fungsi->user_login()->level == 1 || $this->fungsi->user_login()->level == 2) { ?>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Master Data</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse                 
                    <?=$this->uri->segment(1) == 'atasan' || $this->uri->segment(1) == 'atasan_pejabat' || 
                    $this->uri->segment(1) == 'jabatan' || $this->uri->segment(1) == 'unitkerja' ? 'show' : ''?>"
                    data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="<?=site_url('atasan')?>"
                            <?=$this->uri->segment(1) == 'atasan' ? 'class="active"' : ''?>>
                            <i class="bi bi-circle"></i><span>Atasan</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=site_url('atasan_pejabat')?>"
                            <?=$this->uri->segment(1) == 'atasan_pejabat' ? 'class="active"' : ''?>>
                            <i class="bi bi-circle"></i><span>Atasan Pejabat</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=site_url('jabatan')?>"
                            <?=$this->uri->segment(1) == 'jabatan' ? 'class="active"' : ''?>>
                            <i class="bi bi-circle"></i><span>Jabatan</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=site_url('unitkerja')?>"
                            <?=$this->uri->segment(1) == 'unitkerja' ? 'class="active"' : ''?>>
                            <i class="bi bi-circle"></i><span>Unit Kerja</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Components Nav -->
            <?php } ?>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Forms</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse 
                    <?=$this->uri->segment(1) == 'ijinabsen' || 
                    $this->uri->segment(1) == 'ijincuti' || $this->uri->segment(1) == 'lembur' ? 'show' : ''?>"
                    data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="<?=site_url('ijinabsen')?>"
                            <?=$this->uri->segment(1) == 'ijinabsen' ? 'class="active"' : ''?>>
                            <i class="bi bi-circle"></i><span>Form Ijin</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=site_url('ijincuti')?>"
                            <?=$this->uri->segment(1) == 'ijincuti' ? 'class="active"' : ''?>>
                            <i class="bi bi-circle"></i><span>Form Cuti</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="bi bi-circle"></i><span>Form Lembur</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Forms Nav -->
            <?php if($this->fungsi->user_login()->level == 1 || $this->fungsi->user_login()->level == 2) { ?>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-bar-chart"></i><span>Laporan dan Analisa</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="charts-nav" class="nav-content collapse 
                    <?=$this->uri->segment(1) == 'report' || 
                    $this->uri->segment(2) == 'report_ijinabsen' ? 'show' : ''?>" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="<?=site_url('report')?>"
                            <?=$this->uri->segment(1) == 'report' ? 'class="active"' : ''?>>
                            <i class="bi bi-circle"></i><span>General</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=site_url('report/report_ijinabsen')?>"
                            <?=$this->uri->segment(2) == 'report_ijinabsen' ? 'class="active"' : ''?>>
                            <i class="bi bi-circle"></i><span>Permohonan Ijin Absen</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Charts Nav -->
            <?php } ?>

            <li class="nav-heading">Pages</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#fullscreenModal" data-bs-toggle="modal" data-bs-target="">
                    <i class="bi bi-shield-exclamation"></i>
                    <span>Aturan dan Kebijakan</span>
                </a>
            </li><!-- End Profile Page Nav -->
            <?php if($this->fungsi->user_login()->level == 1 || $this->fungsi->user_login()->level == 2) { ?>
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?=site_url('informasi')?>">
                    <i class="bi bi-megaphone"></i>
                    <span>Informasi</span>
                </a>
            </li><!-- End F.A.Q Page Nav -->
            <?php } ?>
            <?php if($this->fungsi->user_login()->level == 1) { ?>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#pengaturan-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-sliders"></i><span>Pengaturan</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="pengaturan-nav" class="nav-content collapse 
                    <?=$this->uri->segment(1) == 'user' || 
                    $this->uri->segment(1) == 'aplikasi' || $this->uri->segment(1) == 'form' ? 'show' : ''?>"
                    data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="<?=site_url('user')?>" <?=$this->uri->segment(1) == 'user' ? 'class="active"' : ''?>>
                            <i class="bi bi-circle"></i><span>Manajemen User</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="bi bi-circle"></i><span>Aplikasi</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="bi bi-circle"></i><span>Atur Form</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Forms Nav -->
            <?php } ?>

            <li class="nav-item">
                <a class="nav-link collapsed" href="<?=site_url('auth/logout')?>">
                    <i class="bi bi-box-arrow-in-left"></i>
                    <span>Sign Out</span>
                </a>
            </li><!-- End Login Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">
        <div class="modal fade" id="fullscreenModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Aturan dan Kebijakan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Beberapa aturan dan kebijakan Politenik Elektonika Negeri Surabaya melalui Bidang Pengelolaan
                            Sumber Daya Manusia terkait tata tertib dan kedisiplinan pegawai di lingkungan PENS sebagai
                            berikut:</p>
                        <ul>
                            <li>

                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div><!-- End Full Screen Modal-->

        <!-- start: page -->
        <?php echo $contents ?>
        <!-- end: page -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>PSDKU PENS Sumenep</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Developed by <a href="https://www.instagram.com/tbs_bambangs">tbs_bambang</a>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?=base_url()?>assets/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="<?=base_url()?>assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url()?>assets/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="<?=base_url()?>assets/assets/vendor/echarts/echarts.min.js"></script>
    <script src="<?=base_url()?>assets/assets/vendor/quill/quill.min.js"></script>
    <script src="<?=base_url()?>assets/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="<?=base_url()?>assets/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="<?=base_url()?>assets/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?=base_url()?>assets/assets/js/main.js"></script>

</body>

</html>