<?php include '../components/topLink.php' ?>
<?php include '../components/navbar.php' ?>

<main>
  <div class="card mb-3 mx-auto col-md-10 pb-3">
    <div class="card-header text-light"></div>
    <div class="no-gutters">
      <div class="card-body">
        <?php require '../process/insert.php' ?>
        <form method="POST">
          <div class="form-group">
            <label for="formMerk">Merk</label>
            <input type="text" name="merk" class="form-control" id="formMerk" placeholder="Masukkan Nama Merk" required />
          </div>
          <div class="form-group">
            <label for="formWarna">Warna</label>
            <input type="text" name="warna" class="form-control" id="formWarna" placeholder="Masukkan Warna" required />
          </div>
          <div class="form-group">
            <label for="formJumlah">Jumlah</label>
            <input type="number" name="jumlah" class="form-control" id="formJumlah" placeholder="Masukkan Jumlah" required />
          </div>
          <button type="submit" name="tambah-barang" class="btn btn-default text-light float-end">Tambah Barang</button>
          <input type="reset" class="btn btn-warning text-light float-end mx-2 px-3" value="Reset">
          <a href="dataBarang.php" class="btn btn-secondary text-light float-end px-3">Kembali</a>
        </form>
      </div>
    </div>
  </div>
</main>

<?php include '../components/footer.php' ?>
<?php include '../components/bottomLink.php' ?>