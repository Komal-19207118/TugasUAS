<div class="mt-5">
    <div class="border p-5">
        <h3 align="center">Profile <?= $this->session->userdata('nama');?></h3>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama..." value="<?= $profile['nama'];?>" readonly required readonly>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email..." value="<?= $profile['email'];?>" readonly required readonly>
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">No HP</label>
                <input type="tel" name="no_hp" class="form-control" id="no_hp" placeholder="Ex: +6286654356776" value="<?= $profile['no_hp'];?>" readonly required readonly>
            </div>
            <div class="mb-3">
                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir..." value="<?= $profile['tempat_lahir'];?>" required readonly>
            </div>
            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="text" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="<?= $profile['tanggal_lahir'];?>" required readonly>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control" id="alamat" placeholder="Alamat..." required readonly><?= $profile['alamat'];?></textarea>
            </div>
            <div class="mb-3">
                <label for="seminar" class="form-label">Seminar</label>
                <input type="text" name="seminar" class="form-control" id="seminar" value="<?= $profile['jenis_seminar'];?>" required readonly>
            </div>
    </div>
</div>