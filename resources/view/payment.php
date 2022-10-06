<?php include '../components/topLink.php' ?>
<?php include '../components/navbar.php' ?>

<main>
  <div class="col-md-4 mx-auto card-top">
    <div class="card">
      <div class="card-header text-light text-center">Status Pembayaran</div>
      <div class="card-body">
        <?php
        include '../../config/connect.php';
        $id = $_GET['id'];
        $getMakanan = mysqli_query($conn, "SELECT * FROM makanan WHERE id = '$id'");
        $dataMakanan = mysqli_fetch_array($getMakanan);
        ?>

        <table class="table table-bordered">
          <tr>
            <td>Makanan</td>
            <td><?php echo $dataMakanan['makanan']; ?></td>
          </tr>
          <tr>
            <td>Kategori</td>
            <td><?php echo $dataMakanan['kategori']; ?></td>
          </tr>
          <tr>
            <td>Harga</td>
            <td><?php echo $dataMakanan['harga']; ?></td>
          </tr>
        </table>
        <a href="" class="btn btn-sm btn-success float-end">Bayar</a>
        <a href="dataBarang.php" class="btn btn-sm btn-secondary float-end" style="margin-right: 4px;">Kembali</a>
      </div>
    </div>
  </div>
</main>

<?php include '../components/footer.php' ?>
<?php include '../components/bottomLink.php' ?>