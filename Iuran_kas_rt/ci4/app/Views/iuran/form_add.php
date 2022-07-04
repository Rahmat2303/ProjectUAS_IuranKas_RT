<?= $this->include('template/admin_header'); ?>

<h2><?= $title; ?></h2>
<form class="formTambah" action="" method="post">
    <p>
        <input class="inputan" type="text" name="keterangan" placeholder="Keterangan">
    </p>
    <p>
        <input class="inputan" type="date" name="tanggal" placeholder="Tanggal">
    </p>
    <p>
        <input class="inputan" type="text" name="bulan" placeholder="Bulan">
    </p>
    <p>
        <input class="inputan" type="text" name="tahun" placeholder="Tahun">
    </p>
    <p>
        <input class="inputan" type="text" name="jumlah" placeholder="Jumlah">
    </p>
    <p>
        <input class="inputan" type="text" name="warga_id" placeholder="ID Warga">
    </p>
    <p>
        <input type="submit" value="Tambah" class="btn" id="tombolTambah">
    </p>
</form>

<?= $this->include('template/footer'); ?>