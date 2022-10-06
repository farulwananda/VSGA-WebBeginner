<?php include '../components/topLink.php' ?>
<?php include '../components/navbar.php' ?>

<main>
  <div class="container">
    <div class="card mb-3">
      <div class="card-body">
        <form action="" method="POST">
          <div class="form-group">
            <label for="">Nama</label> <br>
            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
          </div>
          <div class="form-group">
            <label for="">Alamat</label> <br>
            <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat" required>
          </div>
          <div class="form-group">
            <label for="">Tempat</label> <br>
            <input type="text" name="tempat" class="form-control" placeholder="Masukkan Tempat" required>
          </div>
          <div class="form-group">
            <label for="">Jenis Kelamin</label> <br>
            <input type="text" name="jenis_kelamin" class="form-control" placeholder="Masukkan Jenis Kelamin" required>
          </div>
          <div class="form-group">
            <label for="">Usia</label> <br>
            <input type="text" name="usia" class="form-control" placeholder="Masukkan Usia" required>
          </div>
          <button class="btn btn-default text-light">Submit</button>
        </form>
      </div>
    </div>

    <div class="card mb-3">
      <div class="card-body">
        <table class="table table-bordered">
          <tr>
            <td>Nama</td>
            <td>Alamat</td>
            <td>Tempat</td>
            <td>Jenis Kelamin</td>
            <td>Usia</td>
          </tr>
          <tr>
            <td>
              <?php if (isset($_POST["nama"])) {
                echo "<p>" .  $_POST["nama"]  . "</p>";
              } ?>
            </td>
            <td>
              <?php if (isset($_POST["alamat"])) {
                echo "<p>" .  $_POST["alamat"]  . "</p>";
              } ?>
            </td>
            <td>
              <?php if (isset($_POST["tempat"])) {
                echo "<p>" .  $_POST["tempat"]  . "</p>";
              } ?>
            </td>
            <td>
              <?php if (isset($_POST["jenis_kelamin"])) {
                echo "<p>" .  $_POST["jenis_kelamin"]  . "</p>";
              } ?>
            </td>
            <td>
              <?php if (isset($_POST["usia"])) {
                echo "<p>" .  $_POST["usia"]  . "</p>";
              } ?>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</main>

<?php include '../components/footer.php' ?>
<?php include '../components/bottomLink.php' ?>