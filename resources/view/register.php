<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico" />
  <link rel="stylesheet" href="../../assets/css/bootstrap.css" />
  <link rel="stylesheet" href="../../assets/css/style.css" />
  <title>Laporin.id</title>
</head>

<body>
  <div class="card mb-3 mx-auto card-top" style="max-width: 640px">
    <div class="card-header text-light"></div>
    <div class="row no-gutters">
      <div class="col-md-5">
        <img src="../../assets/image/login.png" class="card-img img-style" />
      </div>
      <div class="col-md-7">
        <div class="card-body">
          <form>
            <div class="form-group">
              <label for="formNama">Nama</label>
              <input type="text" class="form-control" id="formNama" placeholder="Masukkan Nama" required />
            </div>
            <div class="form-group">
              <label for="formEmail">E-Mail</label>
              <input type="email" class="form-control" id="formEmail" placeholder="Masukkan E-Mail" required />
            </div>
            <div class="form-group">
              <label for="formPassword">Password</label>
              <input type="password" class="form-control" id="formPassword" placeholder="Masukkan Password" required />
            </div>
            <div class="form-group">
              <label for="formKonfirmasiPassword">Konfirmasi Password</label>
              <input type="password" class="form-control" id="formKonfirmasiPassword" placeholder="Masukkan Konfirmasi Password" required />
            </div>
            <button class="btn btn-default text-light col-12 mb-2">Daftar</button>
            <a href="index.php" class="btn btn-secondary text-light col-12">Kembali</a>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="../../assets/js/bootstrap.js"></script>
</body>

</html>