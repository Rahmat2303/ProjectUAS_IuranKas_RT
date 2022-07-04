<?= $this->include('template/admin_header'); ?>

<h2><?= $title; ?></h2>
<form class="formTambah" action="" method="post">
    <p>
        <input class="inputan" type="text" name="keterangan" value="<?= $data['keterangan']; ?>">
    </p>
    <p>
        <input class="inputan" type="date" name="tanggal" value="<?= $data['tanggal']; ?>">
    </p>
    <p>
        <input class="inputan" type="text" name="bulan" value="<?= $data['bulan']; ?>">
    </p>
    <p>
        <input class="inputan" type="text" name="tahun" value="<?= $data['tahun']; ?>">
    </p>
    <p>
        <input class="inputan" type="text" name="jumlah" value="<?= $data['jumlah']; ?>">
    </p>
    <p>
        <input class="inputan" type="text" name="warga_id" value="<?= $data['warga_id']; ?>">
    </p>
    <p>
        <input type="submit" value="Tambah" class="btn" id="tombolTambah">
    </p>
</form>

<?= $this->include('template/footer'); ?>