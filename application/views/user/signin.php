<div class="container pt-5">
    <h3 align="center">Sign In SIPS User</h3>
    <div class="row mt-3">
        <div class="col-md-4"></div>
        <div class="col-md-4 col-12 border p-5">
            <?php
            if($this->session->flashdata('msg_login') != null) {
            ?>
            <div class="border rounded p-3 mb-3"><?= $this->session->flashdata('msg_login');?></div>
            <?php } ?>
            <form action="<?= site_url('user/auth/signin'); ?>" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Sign In</button>
                    <a href="<?= site_url('user/auth/signup');?>" class="btn btn-light">Sign Up</a>
                </div>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>