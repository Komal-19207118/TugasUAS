<h3>Daftar Peserta Seminar</h3>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">No HP</th>
                <th scope="col">Tempat, Tanggal Lahir</th>
                <th scope="col">Alamat</th>
                <th scope="col">Seminar</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($peserta as $row) :
                $status = ($row['status'] == 1) ? 'Accepted' : 'Not Accepted';
            ?>
                <tr>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['no_hp']; ?></td>
                    <td><?= $row['tempat_lahir'] . ', ' . $row['tanggal_lahir']; ?></td>
                    <td><?= $row['alamat']; ?></td>
                    <td><?= $row['jenis_seminar']; ?></td>
                    <td><?= $status; ?></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary" onclick="acc('<?= site_url('administrator/acc/' . $row['id']); ?>', '<?= $row['no_hp'];?>', '<?= $row['jadwal'];?>')">Accept</a>
                        <a href="#" class="btn btn-sm btn-danger" onclick="not_acc('<?= site_url('administrator/not_acc/' . $row['id']); ?>', '<?= $row['no_hp'];?>', '<?= $row['jenis_seminar'];?>')">Not Accept</a>
                    </td>
                </tr>
            <?php
            endforeach;
            ?>
        </tbody>
    </table>
</div>

<script>
    let url_wa = null

    function redirectWA() {
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
            url_wa = `whatsapp://send?`
        else
            url_wa = `https://web.whatsapp.com/send?`
    }

    function acc(url, no_hp, jadwal) {
        window.open(`${url_wa}phone=${no_hp}&text=Selamat%20Akun%20Anda%20Telah%20Diterima%20Sebagai%20Peserta%20Seminar, %20Jadwalnya%20Tanggal%20${jadwal}.`, '_blank');
        window.location = url
    }

    function not_acc(url, no_hp, jenis_seminar) {
        window.open(`${url_wa}phone=${no_hp}&text=Maaf%20Akun%20Anda%20Tidak%20Diterima%20Sebagai%20Peserta%20${jenis_seminar}.`, '_blank');
        window.location = url
    }

    function onSetEmail() {
        let email = document.getElementById('email').value
        document.getElementById('btn-bukti').setAttribute('href', `${url_wa}text=Hallo%20Saya%20Peserta%20Seminar%20Dengan%20Email%20${email}%20Ingin%20Mengkonfirmasi%20Pembayaran%20Seminar`)
    }

    redirectWA()
</script>