<?php include '../components/topLink.php' ?>
<?php include '../components/navbar.php' ?>

<main>
  <div class="container">
    <a href="addMenu.php" class="btn btn-md btn-default text-light p-10">Tambah Makanan</a>
    <div class="card" style="margin-top: 10px;">
      <div class="card-header text-light text-center">
        Daftar Makanan
      </div>
      <div class="card-body">
        <table class="table table-bordered">
          <tr align="center">
            <td>Makanan</td>
            <td>Kategori</td>
            <td>Harga</td>
            <td>Kontrol</td>
          </tr>
          <tr>
            <?php include '../process/data.php';
            makanan(); ?>
          </tr>
        </table>
      </div>
    </div>
  </div>
</main>

<?php include '../components/footer.php' ?>
<?php include '../components/bottomLink.php' ?>