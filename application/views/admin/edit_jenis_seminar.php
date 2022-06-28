<div class="container mt-5">
    <div class="border p-5">
        <h3 align="center">Form Edit Jenis Seminar</h3>
        <form action="<?= site_url('administrator/update_jenis_seminar/'.$detail['id']);?>" method="POST">
            <div class="mb-3">
                <label for="seminar" class="form-label">Seminar</label>
                <input type="text" name="jenis_seminar" class="form-control" id="jenis_seminar" value="<?= $detail['jenis_seminar'];?>" required>
            </div>
            <div class="mb-3">
                <label for="htm" class="form-label">HTM</label>
                <input type="number" name="htm" class="form-control" id="htm" value="<?= $detail['htm'];?>" required>
            </div>
            <div class="mb-3">
                <label for="jadwal" class="form-label">Jadwal</label>
                <input type="date" name="jadwal" class="form-control" id="jadwal" value="<?= $detail['jadwal'];?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
</div>