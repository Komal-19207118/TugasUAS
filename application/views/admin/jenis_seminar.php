<h3>Jenis Seminar</h3>
<a href="<?= site_url('administrator/tambah_jenis_seminar');?>" class="btn btn-primary">+ Tambah</a>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Seminar</th>
                <th scope="col">HTM</th>
                <th scope="col">Jadwal</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($seminar as $key => $row):
            ?>
                <tr>
                    <td><?= $key+1; ?></td>
                    <td><?= $row['jenis_seminar']; ?></td>
                    <td>Rp. <?= number_format($row['htm']); ?></td>
                    <td><?= $row['jadwal']; ?></td>
                    <td>
                        <a href="<?= site_url('administrator/del_jenis_seminar/' . $row['id']); ?>" class="btn btn-sm btn-danger">Delete</a>
                        <a href="<?= site_url('administrator/edit_jenis_seminar/' . $row['id']); ?>" class="btn btn-sm btn-primary">Edit</a>
                    </td>
                </tr>
            <?php
            endforeach;
            ?>
        </tbody>
    </table>
</div>