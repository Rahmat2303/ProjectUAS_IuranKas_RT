<?= $this->include('template/admin_header'); ?>

<h4 style="text-align: center">Data Warga RT 008</h4>
<div class="atas">
    <li>
        <div id="tombolTambah" class="btn mx-4">
            <a class="tombolTambah" href="<?= base_url('admin/warga/add'); ?>">Tambah Data Warga</a>
        </div>
    </li>
    <li>
        <form method="get" class="form-search">
            <input type="text" name="q" value="<?= $q; ?>" placeholder="Cari Nama">
            <input type="submit" value="Cari" class="btn" style="background-color: #771ac4; color: white;">
        </form>
    </li>
</div>
<div class="tabel">
    <table class="table table-bordered table-hover" border="2">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nik</th>
                <th>Nama</th>
                <th>Kelamin</th>
                <th>Alamat</th>
                <th>No. Rumah</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php if($warga): foreach($warga as $row): ?>
        <tr>
            <td><?= $row['warga_id']; ?></td>
            <td><?= $row['nik']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['kelamin']; ?></td>
            <td><?= $row['alamat']; ?></td>
            <td><?= $row['no_rumah']; ?></td>
            <td><?= $row['status']; ?></td>
            <td>
                <a id="tombolTambahan" class="btn" href="<?= base_url('/admin/warga/edit/' .$row['warga_id']);?>">Ubah</a>
                <a class="btn btn-danger" onclick="return confirm('Yakin menghapus data?');" href="<?= base_url('/admin/warga/delete/' .$row['warga_id']);?>">Hapus</a>
            </td>
        </tr>
        <?php endforeach; else: ?>
        <tr>
            <td colspan="7">Belum ada data.</td>
        </tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>
<?= $pager->only(['q'])->links(); ?> 


<?= $this->include('template/footer'); ?>
