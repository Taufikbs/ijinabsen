<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
</div><!-- End Page Title -->


<section class="section dashboard">
    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header"><i class="bi bi-calendar2-week"></i>
                            <span class="text-primary">
                                <?php
                                $this->date = date("Y-m-d H:i:s");
                                echo tgl_ind($this->date);
                                ?>
                            </span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Hai,
                                <strong><?=ucwords(strtolower($this->fungsi->user_login()->name))?></strong>
                            </h5>
                            <p>Selamat datang kembali, di Sistem Informasi Manajemen Pengelolaan Perijinan Absensi
                                Kampus PENS Sumenep. Sistem ini menyediakan layanan berbasis online untuk pengurusan
                                permohonan ijin absen.</p>
                            <?php if($this->fungsi->user_login()->level == 3) { ?>
                            <p><small>Anda sudah melakukan permohonan ijin absen sebanyak :
                                    <strong><?= $this->fungsi->count_ijinabsen_byuser() ?> </strong> kali</small></p>
                            <a href="<?= site_url('ijinabsen/add') ?>" class="btn btn-primary btn-sm"><i
                                    class="bi bi-journal-plus me-1"></i> Buat Baru Permohonan Ijin</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card revenue-card">
                        <div class="card-body">
                            <h5 class="card-title">Approved <span>| Disetujui</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-bookmark-check"></i>
                                </div>
                                <div class="ps-3">
                                    <h6><?=$this->fungsi->count_ijinabsen() != 0 ? $data_approved->approved : 0?></h6>
                                    <span class="text-success small pt-1 fw-bold">
                                        <?= round($this->fungsi->count_ijinabsen() != 0 ? $data_approved->approved / $this->fungsi->count_ijinabsen() * 100 : 0)?>%</span>
                                    <span class="text-muted small pt-2 ps-1">dari
                                        <strong><?=$this->fungsi->count_ijinabsen()?></strong> Data Ijin Absen</span>

                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Sales Card -->

                <!-- Revenue Card -->
                <div class="col-xxl-4 col-md-6">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Pending <span>| Menunggu</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-bookmark-dash"></i>
                                </div>
                                <div class="ps-3">
                                    <h6><?=$this->fungsi->count_ijinabsen() != 0 ? $data_pending->pending : 0?></h6>
                                    <span class="text-warning small pt-1 fw-bold">
                                        <?= round($this->fungsi->count_ijinabsen() != 0 ? $data_pending->pending / $this->fungsi->count_ijinabsen() * 100 : 0)?>%</span>
                                    <span class="text-muted small pt-2 ps-1">dari
                                        <strong><?=$this->fungsi->count_ijinabsen()?></strong> Data Ijin Absen</span>

                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Revenue Card -->

                <!-- Customers Card -->
                <div class="col-xxl-4 col-xl-12">

                    <div class="card info-card customers-card">
                        <div class="card-body">
                            <h5 class="card-title">Rejected <span>| Ditolak</span></h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-bookmark-x"></i>
                                </div>
                                <div class="ps-3">
                                    <h6><?=$this->fungsi->count_ijinabsen() != 0 ? $data_rejected->rejected : 0?></h6>
                                    <span class="text-danger small pt-1 fw-bold">
                                        <?= round($this->fungsi->count_ijinabsen() != 0 ? $data_rejected->rejected / $this->fungsi->count_ijinabsen() * 100 : 0)?>%</span>
                                    <span class="text-muted small pt-2 ps-1">dari
                                        <strong><?=$this->fungsi->count_ijinabsen()?></strong> Data Ijin Absen</span>

                                </div>
                            </div>

                        </div>
                    </div>

                </div><!-- End Customers Card -->

            </div>
        </div>




        <div class="col-lg-4">
            <!-- News & Updates Traffic -->
            <div class="card">
                <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                            <h6>Filter</h6>
                        </li>

                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                </div>

                <div class="card-body pb-0">
                    <h5 class="card-title">Permohonan Ijin <span> | Hari ini</span></h5>
                    <?php foreach($row_date->result() as $key => $data) { ?>
                    <div class="news">
                        <div class="post-item clearfix">
                            <img src="<?=base_url('uploads/user/'.$data->image)?>" alt=""
                                style="width:50px; border-radius:50%;">
                            <h4><a href="#"><?=ucwords(strtolower($data->user_name))?></a>|
                                <small><?=$data->nama_jabatan?>
                            </h4>
                            <p><b>alasan:</b> <i><?=$data->alasan?></i> [<small
                                    class="text-primary"><?=longdate_indo($data->tanggal)?> <?=$data->jam?></small>]
                                <small><?=$data->status == 1 ? "<span class='text-success'><i class='bi bi-check-circle'></i> Approved</span>" : 
                                    ($data->status == 2 ? "<span class='text-warning'><i class='bi bi-clock'></i> Pending</span>" : "<span class='text-danger'><i class='bi bi-x-circle'></i> Rejected</span>")?></small>
                            </p>
                            <br>
                        </div>
                    </div><!-- End sidebar recent posts-->
                    <?php } ?>
                </div>
            </div><!-- End News & Updates -->
        </div>

    </div>
    <div class="row">
        <div id="calendar"></div>
    </div>
</section>

<script language="javascript">
setTimeout(function() {
    window.location.reload(1);
}, 20000);
</script>