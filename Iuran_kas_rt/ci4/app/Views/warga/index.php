<?= $this->include('template/header'); ?>
<div class="atas">
        <form method="get" class="form-search">
                    <input type="text" name="q" value="<?= $q; ?>" placeholder="Cari Nama">
                    <input type="submit" value="Cari" class="btn" style="background-color: #771ac4; color: white;">
        </form>
</div>

<div class="tabel">
    <table class="table table-bordered table-hover" border="2">
        <thead>
            <tr>
                <th>No</th>
                <th>Nik</th>
                <th>Nama</th>
                <th>Kelamin</th>
                <th>Alamat</th>
                <th>No. Rumah</th>

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
        </tr>
        <?php endforeach; else: ?>
        <tr>
            <td colspan="6">Belum ada data.</td>
        </tr>
        <?php endif; ?>
        </tbody>
</table>
</div>
<?= $pager->only(['q'])->links(); ?>

<?= $this->include('template/footer'); ?>