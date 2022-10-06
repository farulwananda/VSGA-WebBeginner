<?php include '../components/topLink.php' ?>
<?php include '../components/navbar.php' ?>

<main>
  <div class="container">
    <div class="card mb-3 mx-auto ">
      <div class="card-header text-light"></div>
      <div class="no-gutters">
        <div class="card-body">
          <?php require '../process/insert.php' ?>
          <form method="POST">
            <div class="form-group">
              <label for="formNama">Nama</label>
              <input type="text" name="nama" class="form-control" id="formNama" placeholder="Masukkan Nama Siswa" required />
            </div>
            <div class="form-group">
              <label for="gender">Jenis Kelamin</label>
              <select name="gender" class="form-control" id="gender">
                <option value="">-------</option>
                <option value="Pria">Pria</option>
                <option value="Wanita">Wanita</option>
              </select>
            </div>
            <div class="form-group">
              <label for="formUmur">Umur</label>
              <input type="text" name="umur" class="form-control" id="formUmur" placeholder="Masukkan Umur" required />
            </div>
            <div class="form-group">
              <label for="jurusan">Jurusan</label>
              <select name="jurusan" class="form-control" id="jurusan">
                <option value="">-------</option>
                <?php include '../process/data.php';
                jurusan(); ?>
              </select>
            </div>
            <div class="form-group">
              <label for="formAlamat">Alamat</label>
              <textarea type="text" name="alamat" class="form-control" id="formAlamat" placeholder="Masukkan Alamat" required> </textarea>
            </div>
            <button type="submit" name="tambah-siswa" class="btn btn-default text-light float-end mb-3">Tambah</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>

<?php include '../components/footer.php' ?>
<?php include '../components/bottomLink.php' ?>