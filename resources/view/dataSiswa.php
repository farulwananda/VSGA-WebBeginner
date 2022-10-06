<?php include '../components/topLink.php' ?>
<?php include '../components/navbar.php' ?>

<main>
  <div class="container">
    <a href="addSiswa.php" class="btn btn-md btn-default text-light p-10">Tambah Siswa</a>
    <a href="addJurusan.php" class="btn btn-md btn-default text-light p-10">Tambah Jurusan</a>
    <div class="card" style="margin-top: 10px;">
      <div class="card-header text-light text-center">
        Daftar Siswa
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr align="center">
                <td>Nama</td>
                <td>Jenis Kelamin</td>
                <td>Umur</td>
                <td>Jurusan</td>
                <td>Alamat</td>
                <td style="width: 20%;">Aksi</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php include '../process/data.php';
                siswa(); ?>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</main>


<?php include '../components/footer.php' ?>
<?php include '../components/bottomLink.php' ?>