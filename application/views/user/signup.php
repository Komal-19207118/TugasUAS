<div class="container pt-5">
    <h3 align="center">Sign Up SIPS User</h3>
    <div class="row mt-3">
        <div class="col-md-4"></div>
        <div class="col-md-4 col-12 border p-5">
            <form action="<?= site_url('user/auth/process_signup'); ?>" method="POST">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <label for="no_hp" class="form-label">No HP</label>
                    <input type="tel" name="no_hp" class="form-control" id="no_hp" placeholder="Ex: +6286654356776" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Sign Up</button>
                </div>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>