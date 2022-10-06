<?php include '../components/topLink.php' ?>
<?php include '../components/navbar.php' ?>


<main>
  <div class="card mb-3 mx-auto card-top col-md-4">
    <div class="card-header text-light"></div>
    <div class="no-gutters">
      <div class="card-body">
        <?php require '../process/insert.php' ?>
        <form method="POST">
          <div class="form-group">
            <label for="formMakanan">Makanan</label>
            <input type="text" name="makanan" class="form-control" id="formMakanan" placeholder="Masukkan Nama Makanan" required />
          </div>
          <div class="form-group">
            <label for="formKategori">Kategori</label>
            <input type="text" name="kategori" class="form-control" id="formKategori" placeholder="Masukkan Kategori" required />
          </div>
          <div class="form-group">
            <label for="formHarga">Harga</label>
            <input type="text" name="harga" class="form-control" id="formHarga" placeholder="Masukkan Harga" required />
          </div>
          <button type="submit" name="tambah-menu" class="btn btn-default text-light col-12">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</main>

<?php include '../components/footer.php' ?>
<?php include '../components/bottomLink.php' ?>