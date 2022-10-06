<?php include '../components/topLink.php' ?>
<?php include '../components/navbar.php' ?>

<main>
  <div class="container">
    <a href="addBarang.php" class="btn btn-md btn-default text-light p-10">Tambah Barang</a>
    <div class="card" style="margin-top: 10px;">
      <div class="card-header text-light text-center">
        Daftar Barang
      </div>
      <div class="card-body">
        <table class="table table-bordered">
          <tr align="center">
            <td>No</td>
            <td>Nama Merk</td>
            <td>Warna</td>
            <td>Jumlah</td>
          </tr>
          <tr>
            <?php include '../process/data.php';
            barang(); ?>
          </tr>
        </table>
      </div>
    </div>
  </div>
</main>

<?php include '../components/footer.php' ?>
<?php include '../components/bottomLink.php' ?>