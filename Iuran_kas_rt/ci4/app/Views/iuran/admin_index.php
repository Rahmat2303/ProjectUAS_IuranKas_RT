<?= $this->include('template/admin_header'); ?>

<div class="atas">
    <li>
        <div id="tombolTambah" class="btn mx-4">
            <a class="tombolTambah" href="<?= base_url('admin/iuran/add'); ?>">Tambah Iuran Warga</a>
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
                <th>Nama</th>
                <th>Keterangan</th>
                <th>Tanggal</th>
                <th>Bulan</th>
                <th>Tahun</th>
                <th>Jumlah</th>
                <th>ID Warga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        <?php if($iuran): foreach($iuran as $row): ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['keterangan']; ?></td>
            <td><?= $row['tanggal']; ?></td>
            <td><?= $row['bulan']; ?></td>
            <td><?= $row['tahun']; ?></td>
            <td><?= $row['jumlah']; ?></td>
            <td><?= $row['warga_id']; ?></td>
            <td>
                <a id="tombolTambah" class="btn" href="<?= base_url('/admin/iuran/edit/' .$row['id']);?>">Ubah</a>
                <a class="btn btn-danger" onclick="return confirm('Yakin menghapus data?');" href="<?= base_url('/admin/iuran/delete/' .$row['id']);?>">Hapus</a>
            </td>
        </tr>
        <?php endforeach; else: ?>
        <tr>
            <td colspan="8">Belum ada data.</td>
        </tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>
<?= $pager->only(['q'])->links(); ?>

<?= $this->include('template/footer'); ?>