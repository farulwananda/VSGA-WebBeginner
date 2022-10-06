<?php include '../components/topLink.php' ?>
<?php include '../components/navbar.php' ?>

<main>
  <div class="container">

    <?php require '../process/update.php' ?>
    <div class="card">
      <div class="card-header"></div>
      <div class="card-body">
        <form method="POST">
          <?php
          require '../../config/connect.php';
          $id = $_GET['id'];
          $getNilai = mysqli_query($conn, "SELECT * FROM nilai WHERE id = '$id'");
          $dataNilai = mysqli_fetch_array($getNilai);
          ?>
          <div class="form-group">
            <input type="text" name="id" class="form-control" value="<?= $id ?>" hidden />
          </div>
          <div class="form-group">
            <label for="formPelajaran">Pelajaran</label>
            <input type="text" name="pelajaran" class="form-control" id="formPelajaran" value="<?= $dataNilai['pelajaran']; ?>" required />
          </div>
          <div class="form-group">
            <label for="formNilai">Nilai</label>
            <input type="text" name="nilai" class="form-control" id="formNilai" value="<?= $dataNilai['nilai'] ?>" required />
          </div>
          <div class="form-group">
            <label for="formKategori">Kategori</label>
            <input type="text" name="kategori" class="form-control" id="formKategori" value="<?= $dataNilai['kategori'] ?>" required />
          </div>
          <button name="update-nilai" class="btn btn-md btn-default float-end text-light p-10">Update Nilai</button>
        </form>
      </div>
    </div>
  </div>
</main>

<?php include '../components/footer.php' ?>
<?php include '../components/bottomLink.php' ?>