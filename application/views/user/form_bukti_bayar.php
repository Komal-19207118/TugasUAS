<div class="container mt-5">
    <div class="border p-5">
        <h3 align="center">Form Bukti Bayar</h3>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama..." value="<?= $detail['nama'];?>" readonly required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" oninput="onSetEmail()" placeholder="Email..." value="<?= $detail['email'];?>" readonly required>
        </div>
        <div class="mb-3">
            <label for="no_hp" class="form-label">No HP</label>
            <input type="tel" name="no_hp" class="form-control" id="no_hp" placeholder="Ex: +6286654356776" value="<?= $detail['no_hp'];?>" readonly required>
        </div>
        <div class="mb-3">
            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir..." value="<?= $detail['tempat_lahir'];?>" readonly required>
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="<?= $detail['tanggal_lahir'];?>" readonly required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" id="alamat" placeholder="Alamat..." readonly required><?= $detail['alamat'];?></textarea>
        </div>
        <div class="mb-3">
            <label for="seminar" class="form-label">Seminar</label>
            <input type="text" name="seminar" class="form-control" id="seminar" placeholder="Seminar..." value="<?= $detail['jenis_seminar'];?>" readonly required>
        </div>
        <div class="mb-3">
            <label for="rek_tf" class="form-label">Rekening Transfer</label>
            <select name="rek_tf" id="rek_tf" class="form-control">
                <option value="1">BNI - 123456 (a/n komal)</option>
                <option value="2">BRI - 654321 (a/n komal)</option>
                <option value="3">BCA - 123654 (a/n komal)</option>
                <option value="4">OVO - 083456776543 (a/n komal)</option>
            </select>
        </div>
        <a href="#" class="btn btn-primary" id="btn-bukti" target="_blank">Kirim Bukti</a>
    </div>
</div>
<script>
    let url_wa = null

    function redirectWA() {
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
            url_wa = `whatsapp://send?phone=+6281287105948&text=`
        else
            url_wa = `https://web.whatsapp.com/send?phone=+6281287105948&text=`
    }

    function onSetEmail() {
        let email = document.getElementById('email').value
        document.getElementById('btn-bukti').setAttribute('href', `${url_wa}Hallo%20Saya%20Peserta%20Seminar%20Dengan%20Email%20${email}%20Ingin%20Mengkonfirmasi%20Pembayaran%20Seminar`)
    }

    redirectWA()
</script>