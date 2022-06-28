<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#"><b>SIPS</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= site_url('user/home'); ?>">&nbsp;&nbsp;Home&nbsp;&nbsp;</a>
                </li>
            </ul>
            <?php
            if ($this->session->userdata('login_user') == TRUE) {
            ?>
                <div class="d-flex text-white dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?= $this->session->userdata('nama');?>
                    </a>
                    <ul class="dropdown-menu mr-4" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?= site_url('user/auth/profile'); ?>">Profile</a></li>
                        <li><a class="dropdown-item" href="<?= site_url('user/auth/logout'); ?>">Logout</a></li>
                    </ul>
                </div>
            <?php
            } else {
            ?>
                <div class="d-flex"><a class="btn btn-light btn-sm" href="<?= site_url('user/auth'); ?>">Sign In</a></div>
            <?php
            }
            ?>
        </div>
    </div>
</nav>
<div id="bg-image" class="container p-5">
    <?php
    if (isset($file)) {
        $this->load->view($file);
    } else {
    ?>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-content p-5">
                        <h3 class="mb-5">Selamat Datang Di SIPS</h3>
                        <p class="mb-1">Website yang menyediakan</p>
                        <p class="mb-1">platform pendaftaran seminar</p>
                        <p class="mb-1">secara online guna menambah</p>
                        <p class="mb-1">wawasan bagi user</p> <br />
                        <p class="mb-1">Jika belum memiliki akun</p>
                        <p>dapat klik <a href="<?= site_url('user/auth/signup'); ?>" class="btn btn-primary">Daftar</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    <?php } ?>
</div>