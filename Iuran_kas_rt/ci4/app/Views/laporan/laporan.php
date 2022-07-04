<?= $this->include('template/header'); ?>

<h2>Data Transaksi</h2><hr>
    <form method="get" action="">
        <div class="row">
      <div class="col-sm-3 col-md-2">
        <div class="form-group">
          <label>Filter Berdasarkan</label>
              <select name="filter" id="filter" class="form-control">
                  <option value="">Pilih</option>
                  <option value="1">Per Bulan</option>
                  <option value="2">Per Tahun</option>
              </select>
        </div>
      </div>
    </div>
    
    <div class="row">
      <div class="col-sm-3 col-md-2" id="form-bulan">
        <div class="form-group">
          <label>Bulan</label>
          <select name="bulan_input" class="form-control">
                    <option value="">Pilih</option>
                    <option value="1">Januari</option>
                    <option value="2">Februari</option>
                    <option value="3">Maret</option>
                    <option value="4">April</option>
                    <option value="5">Mei</option>
                    <option value="6">Juni</option>
                    <option value="7">Juli</option>
                    <option value="8">Agustus</option>
                    <option value="9">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                </select>
        </div>
      </div>
      <div class="col-sm-3 col-md-2" id="form-tahun">
        <div class="form-group">
          <label>Tahun</label>
          <select name="tahun_input" class="form-control">
                <option value="">Pilih</option>
                <?php for($i=date('Y'); $i>=date('Y')-32; $i-=1){ ?>
                    <option value="<?= $i ?>"><?= $i?></option>
                <?php } ?>
            </select>
        </div>
      </div>
    </div>
        <button type="submit" class="btn btn-primary">Tampilkan</button>
        <a href="index.php" class="btn btn-default">Reset Filter</a>
    </form>
    <hr />
    <b><?php echo $label; ?></b><br /><br />
    
    <div class="tabel">
    <table class="table table-bordered table-hover" border="2">
        <thead>
            <tr>
                <th>No</th>
                <th>keterangan</th>
                <th>Tanggal</th>
                <th>Bulan</th>
                <th>Tahun</th>
                <th>Warga ID</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
        <?= $no = 1; ?>
        <?php if($laporan): foreach($laporan as $row): ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['keterangan']; ?></td>
            <td><?= $row['tanggal']; ?></td>
            <td><?= $row['bulan']; ?></td>
            <td><?= $row['tahun']; ?></td>
            <td><?= $row['warga_id']; ?></td>
            <td><?= $row['jumlah']; ?></td>
        </tr>
        <?php endforeach; else: ?>
        <tr>
            <td colspan="8">Belum ada data.</td>
        </tr>
        <?php endif; ?>
        </tbody>
    </table>
</div>

<?= $this->include('template/footer'); ?>