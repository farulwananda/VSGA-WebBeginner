<?php include '../components/topLink.php' ?>
<?php include '../components/navbar.php' ?>

<main>
  <div class="container">

    <?php require '../process/insert.php' ?>
    <div class="card">
      <div class="card-header"></div>
      <div class="card-body">
        <form method="POST">
          <?php
          $id = $_GET['id'];
          ?>
          <div class="form-group">
            <input type="text" name="id" class="form-control" value="<?= $id ?>" hidden />
          </div>
          <div class="form-group">
            <label for="formPelajaran">Pelajaran</label>
            <input type="text" name="pelajaran" class="form-control" id="formPelajaran" placeholder="Masukkan Mata Pelajaran" required />
          </div>
          <div class="form-group">
            <label for="formNilai">Nilai</label>
            <input type="text" name="nilai" class="form-control" id="formNilai" placeholder="Masukkan Nilai Pelajaran" required />
          </div>
          <div class="form-group">
            <label for="formKategori">Kategori</label>
            <input type="text" name="kategori" class="form-control" id="formKategori" placeholder="Masukkan Kategori" required />
          </div>
          <button name="tambah-nilai" class="btn btn-md btn-default float-end text-light p-10">Tambah Nilai</button>
        </form>
      </div>
    </div>
    <div class="card" style="margin-top: 10px;">
      <div class="card-header text-light text-center">
        Daftar Nilai
      </div>
      <div class="card-body">

        <table class="table table-bordered">
          <tr align="center">
            <td>Pelajaran</td>
            <td>Nilai</td>
            <td>Kategori</td>
            <td style="width: 20%;">Aksi</td>
          </tr>
          <tr>
            <?php include '../process/data.php';
            nilai(); ?>
          </tr>
        </table>
      </div>
    </div>
  </div>
</main>

<?php include '../components/footer.php' ?>
<?php include '../components/bottomLink.php' ?>