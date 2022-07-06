<?= $this->include('template/admin_header'); ?>

<h3 class="mx-4">Total Jumlah Kas Warga</h3>
<div class="tabel">
    <table border="2" class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Warga</th>
                <th>NIK</th>
                <th>Bulan</th>
                <th>Tahun</th>
                <th>Jumlah Kas</th>
            </tr>
        </thead>
        <tbody>
        <?php if($laporan): foreach($laporan as $row): ?>
        <tr>
            <td><?= $row['warga_id']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['nik']; ?></td>
            <td><?= $row['bulan']; ?></td>
            <td><?= $row['tahun']; ?></td>
            <td><?= $row['jumlah']; ?></td>
        </tr>
        <?php endforeach; else: ?>
        <tr>
            <td colspan="6">Belum ada data.</td>
        </tr>
        <?php endif; ?>
        <tr>
            <td class="tabelTotal" colspan="5">Total</td>
            <td class="tblTotal"><?= $total_laporan ?></td>
        </tr>
        </tbody>
    </table>
</div>

<?= $this->include('template/footer'); ?>