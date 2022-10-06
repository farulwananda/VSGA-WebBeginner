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
            <label for="jurusan">Jurusan</label>
            <input type="text" name="jurusan" class="form-control" id="jurusan" placeholder="Masukkan Jurusan" required />
          </div>
          <button type="submit" name="tambah-jurusan" class="btn btn-default text-light float-end">Tambah Jurusan</button>
          <a href="dataSiswa.php" class="btn btn-secondary text-light float-end px-3 mx-3">Kembali</a>
        </form>
      </div>
    </div>
  </div>
</main>

<?php include '../components/footer.php' ?>
<?php include '../components/bottomLink.php' ?>