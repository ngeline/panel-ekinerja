<?= $this->extend('layouts/index'); ?>

<?= $this->section('main-content'); ?>
<section class="section">
    <div class="card">
        <div class="card-header">Simple Datatable</div>
        <div class="card-body">
            <table class="table table-striped" id="table1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>NIK</th>
                        <th>NAMA</th>
                        <th>Role</th>
                        <th>Pengawas</th>
                        <th>Jabatan</th>
                        <th>Bidang</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $no = 1;
                    ?>
                    <?php foreach ($users as $key => $val) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td>
                                <img src="<?= base_url('assets/uploads/' . $val->foto); ?>" alt="image" width="85" height="85" />
                            </td>
                            <td><strong><?= $val->nik; ?></strong></td>
                            <td><?= $val->nama; ?></td>
                            <td><?= $val->role; ?></td>
                            <td><?= $val->nama_pengawas; ?></td>
                            <td><?= $val->nama_jabatan; ?></td>
                            <td><?= $val->nama_bidang; ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>