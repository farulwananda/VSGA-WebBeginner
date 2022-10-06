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
          $getSiswa = mysqli_query($conn, "SELECT * FROM siswa WHERE id = '$id'");
          $dataSiswa = mysqli_fetch_array($getSiswa);
          ?>
          <div class="form-group">
            <input type="text" name="id" class="form-control" value="<?= $id ?>" hidden />
          </div>
          <div class="form-group">
            <label for="formNama">Nama</label>
            <input type="text" name="nama" class="form-control" id="formNama" value="<?= $dataSiswa['nama'] ?>" required />
          </div>
          <div class="form-group">
            <label for="gender">Jenis Kelamin</label>
            <select name="gender" class="form-control" id="gender" required>
              <option value="Pria" <?php if ($dataSiswa['gender'] == 'Pria') {
                                      echo "selected";
                                    } ?>>Pria
              </option>
              <option value="Wanita" <?php if ($dataSiswa['gender'] == 'Wanita') {
                                        echo "selected";
                                      } ?>>Wanita</option>
            </select>
          </div>
          <div class="form-group">
            <label for="formUmur">Umur</label>
            <input type="text" name="umur" class="form-control" id="formUmur" value="<?= $dataSiswa['umur'] ?>" required />
          </div>
          <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <select name="jurusan" class="form-control" id="jurusan">
              <?php
              $getJurusan = mysqli_query($conn, "SELECT * FROM jurusan");
              while ($data = mysqli_fetch_array($getJurusan)) { ?>
                <option value="<?= $data['id'] ?>"><?= $data['jurusan'] ?></option>
              <?php
              }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="formAlamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" id="formAlamat" value="<?= $dataSiswa['alamat'] ?>" required />
          </div>
          <button name="update-siswa" class="btn btn-default text-light col-12">Update Siswa</button>
        </form>
      </div>
    </div>
  </div>
</main>

<?php include '../components/footer.php' ?>
<?php include '../components/bottomLink.php' ?>