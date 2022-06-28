<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#"><b>SIPS</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= site_url('administrator'); ?>">&nbsp;&nbsp;Home&nbsp;&nbsp;</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= site_url('administrator/peserta'); ?>">&nbsp;&nbsp;Peserta Seminar&nbsp;&nbsp;</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= site_url('administrator/jenis_seminar'); ?>">&nbsp;&nbsp;Jenis Seminar&nbsp;&nbsp;</a>
                </li>
            </ul>
            <div class="d-flex text-white dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Setting
                </a>
                <ul class="dropdown-menu mr-4" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="<?= site_url('administrator/logout'); ?>">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<div class="container p-5">
    <?php
    if (isset($file)) {
        $this->load->view($file);
    } else {
    ?>
        <h3 align="center">Selamat Datang <?= $this->session->userdata('username'); ?></h3>
        <div class="row m-5">
            <div class="col-md-4"></div>
            <div class="col-md-4 col-12">
                <div class="card">
                    <div class="card-content p-5 text-center">
                        <b>Pendaftar Seminar</b>
                        <h4 class="mt-4"><?= $seminar; ?></h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    <?php } ?>
</div>