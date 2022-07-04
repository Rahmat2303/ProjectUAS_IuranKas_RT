<?= $this->include('template/admin_header'); ?>

<h2><?= $title; ?></h2>
<form class="formTambah" action="" method="post">
    <p>
        <input class="inputan" type="text" name="nik" value="<?= $data['nik']; ?>">
    </p>
    <p>
        <input class="inputan" type="text" name="nama" value="<?= $data['nama']; ?>">
    </p>
    <p>
        <input class="inputan" type="text" name="kelamin" value="<?= $data['kelamin']; ?>">
    </p>
    <p>
        <textarea class="inputan" name="alamat" cols="30" rows="5"><?= $data['alamat']; ?></textarea>
    </p>
    <p>
        <input class="inputan" type="text" name="no_rumah" value="<?= $data['no_rumah']; ?>">
    </p>
    <p>
        <input type="submit" value="Tambah" class="btn" id="tombolTambah">
    </p>
</form>

<?= $this->include('template/footer'); ?>