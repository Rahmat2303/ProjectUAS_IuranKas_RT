<?= $this->include('template/admin_header'); ?>

<h2 style="text-align: center"><?= $title; ?></h2>
<form class="formTambah" action="" method="post">
<div class="form-group row my-1">
        <label for="inputKeterangan" class="col-sm-2 col-form-label">Keterangan</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="inputKeterangan" name="keterangan" value="<?= $data['keterangan']; ?>" autofocus>
        </div>
    </div>
    <div class="form-group row my-1">
        <label for="inputTanggal" class="col-sm-2 col-form-label">Tanggal</label>
        <div class="col-sm-9">
            <input type="date" class="form-control" id="inputTanggal" name="tanggal" value="<?= $data['tanggal']; ?>">
        </div>
    </div>
    <div class="form-group row my-1">
        <label for="inputBulan" class="col-sm-2 col-form-label">Bulan</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="inputBulan" name="bulan" value="<?= $data['bulan']; ?>">
        </div>
    </div>
    <div class="form-group row my-1">
        <label for="inputTahun" class="col-sm-2 col-form-label">Tahun</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="inputTahun" name="tahun" value="<?= $data['tahun']; ?>">
        </div>
    </div>
    <div class="form-group row my-1">
        <label for="inputJumlah" class="col-sm-2 col-form-label">Jumlah</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="inputJumlah" name="jumlah" value="<?= $data['jumlah']; ?>">
        </div>
    </div>
    <div class="form-group row my-1">
        <label for="inputwarga_id" class="col-sm-2 col-form-label">Warga ID</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="inputwarga_id" name="warga_id" value="<?= $data['warga_id']; ?>">
        </div>
    </div>

    <p>
        <input type="submit" value="Tambah" class="btn" id="tombolTambah">
    </p>

    
        
</form>

<?= $this->include('template/footer'); ?>