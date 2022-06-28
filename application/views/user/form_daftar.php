<div class="mt-5">
    <div class="border p-5">
        <h3 align="center">Form Pendaftaran Seminar</h3>
        <form action="<?= site_url('user/home/proses_daftar'); ?>" method="POST">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama..." value="<?= $this->session->userdata('nama');?>" readonly required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email..." value="<?= $this->session->userdata('email');?>" readonly required>
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">No HP</label>
                <input type="tel" name="no_hp" class="form-control" id="no_hp" placeholder="Ex: +6286654356776" value="<?= $this->session->userdata('no_hp');?>" readonly required>
            </div>
            <div class="mb-3">
                <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir..." required>
            </div>
            <div class="mb-3">
                <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control" id="alamat" placeholder="Alamat..." required></textarea>
            </div>
            <div class="mb-3">
                <label for="seminar" class="form-label">Seminar</label>
                <select name="seminar" id="seminar" class="form-control" required>
                    <option value="">--Choose--</option>
                    <?php
                        foreach($seminar as $row) {
                            echo '<option value="'.$row['id'].'">'.$row['jenis_seminar'].' - '. number_format($row['htm']).'</option>';
                        }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Daftar</button>
            <button type="reset" class="btn btn-light">Reset</button>
        </form>
    </div>
</div>