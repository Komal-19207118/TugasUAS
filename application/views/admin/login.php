<div class="container pt-5">
    <h3 align="center">Login SIPS Admin</h3>
    <div class="row mt-3">
        <div class="col-md-4"></div>
        <div class="col-md-4 col-12 border p-5">
            <form action="<?= site_url('administrator/process_login'); ?>" method="POST">
                <div class="mb-3">
                    <label for="exampleInputUsername" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="exampleInputUsername" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>