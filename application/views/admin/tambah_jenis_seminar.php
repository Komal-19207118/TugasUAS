<div class="container mt-5">
    <div class="border p-5">
        <h3 align="center">Form Tambah Jenis Seminar</h3>
        <form action="<?= site_url('administrator/save_jenis_seminar/');?>" method="POST">
            <div class="mb-3">
                <label for="seminar" class="form-label">Seminar</label>
                <input type="text" name="jenis_seminar" class="form-control" id="jenis_seminar" required>
            </div>
            <div class="mb-3">
                <label for="htm" class="form-label">HTM</label>
                <input type="number" name="htm" class="form-control" id="htm" required>
            </div>
            <div class="mb-3">
                <label for="jadwal" class="form-label">Jadwal</label>
                <input type="date" name="jadwal" class="form-control" id="jadwal" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</div>