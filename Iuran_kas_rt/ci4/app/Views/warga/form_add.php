<?= $this->include('template/admin_header'); ?>

<h2 style="text-align: center"><?= $title; ?></h2>
<form class="formTambah" action="" method="post">
    <div class="form-group row my-1">
        <label for="inputnik" class="col-sm-2 col-form-label">NIK</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="inputnik" name="nik" autofocus>
        </div>
    </div>
    <div class="form-group row my-1">
        <label for="inputnama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="inputnama" name="nama">
        </div>
    </div>
    <div class="form-group row my-1">
        <label for="inputjk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="inputjk" name="kelamin">
        </div>
    </div>
    <div class="form-group row my-1">
        <label for="inputalamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="inputalamat" name="alamat">
        </div>
    </div>
    <div class="form-group row my-1">
        <label for="inputno" class="col-sm-2 col-form-label">No Rumah</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="inputno" name="no_rumah">
        </div>
    </div>
    <div class="form-group row my-1">
        <label class="col-sm-2 col-form-label">Status</label>
        <div class="col-sm-9">
        <select name="status" id="">
            <option value="">--Pilih--</option>
            <option value="1">Lajang</option>
            <option value="2">Menikah</option>
            <option value="3">Duda</option>
            <option value="4">Janda</option>
        </select>
        </div>
    </div>
  
    <p>
        <input type="submit" value="Tambah" class="btn" id="tombolTambah">
    </p>
</form>


<?= $this->include('template/footer'); ?>