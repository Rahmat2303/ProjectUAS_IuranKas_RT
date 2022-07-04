<?= $this->include('template/admin_header'); ?>

<h2><?= $title; ?></h2>
<form class="formTambah" action="" method="post">
    <p>
        <input class="inputan" type="text" name="nik" placeholder="NIK">
    </p>
    <p>
        <input class="inputan" type="text" name="nama" placeholder="Nama">
    </p>
    <p>
        <input class="inputan" type="text" name="kelamin" placeholder="Jenis Kelamin">
    </p>
    <p>
        <textarea class="inputan" name="alamat" cols="30" rows="5" placeholder="Alamat"></textarea>
    </p>
    <p>
        <input class="inputan" type="text" name="no_rumah" placeholder="No Rumah">
    </p>
    <p>
        <input type="submit" value="Tambah" class="btn" id="tombolTambah">
    </p>
</form>


<?= $this->include('template/footer'); ?>