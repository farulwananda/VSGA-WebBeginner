<?php
require '../../config/connect.php';

function makanan()
{
  global $conn;
  $getMakanan = mysqli_query($conn, "SELECT * FROM makanan");
  while ($data = mysqli_fetch_array($getMakanan)) { ?>
    <tr>
      <td><?= $data['makanan'] ?></td>
      <td><?= $data['kategori'] ?></td>
      <td>Rp.<?= $data['harga'] ?></td>
      <td>
        <form method="POST">
          <a href="payment.php?id=<?= $data['id'] ?>" class="btn btn-default text-light">
            Pembayaran
          </a>
        </form>
      </td>
    </tr>
  <?php
  }
}

function siswa()
{
  global $conn;
  $getSiswa = mysqli_query($conn, "SELECT siswa.*, jurusan.jurusan FROM siswa INNER JOIN jurusan ON siswa.jurusan = jurusan.id");
  while ($data = mysqli_fetch_array($getSiswa)) { ?>
    <tr>
      <td><?= $data['nama'] ?></td>
      <td><?= $data['gender'] ?></td>
      <td><?= $data['umur'] ?> Tahun</td>
      <td><?= $data['jurusan'] ?></td>
      <td><?= $data['alamat'] ?></td>

      <td width="20%">
        <form method="POST">
          <a href="dataNilai.php?id=<?= $data['id'] ?>" class="btn btn-sm btn-primary">
            Nilai
          </a>
          <a href="updateSiswa.php?id=<?= $data['id'] ?>" class="btn btn-sm btn-warning text-light">Edit</a>
          <a href="../process/delete.php?id=<?= $data['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus Siswa ?') ">Hapus</a>
        </form>
      </td>
    </tr>
  <?php
  }
}


function nilai()
{
  global $conn;
  $id = $_GET['id'];
  $getNilai = mysqli_query($conn, "SELECT * FROM nilai WHERE id_siswa = '$id'");
  while ($data = mysqli_fetch_array($getNilai)) { ?>
    <tr>
      <td><?= $data['pelajaran'] ?></td>
      <td><?= $data['nilai'] ?> </td>
      <td><?= $data['kategori'] ?></td>
      <td>
        <form method="POST">
          <a href="updateNilai.php?id=<?= $data['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
          <a href="../process/delete.php?id=<?= $data['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus nilai ?') ">Hapus</a>
        </form>
      </td>
    </tr>
    <script>

    </script>
  <?php
  }
}

function barang()
{
  global $conn;
  $getBarang = mysqli_query($conn, "SELECT * FROM barang");
  while ($data = mysqli_fetch_array($getBarang)) { ?>
    <tr>
      <td align="center" width="10%"><?= $data['id'] ?></td>
      <td><?= $data['nama_merk'] ?></td>
      <td><?= $data['warna'] ?> </td>
      <td><?= $data['jumlah'] ?></td>
    </tr>
    <script>

    </script>
<?php
  }
}


function jurusan()
{
  global $conn;
  $getJurusan = mysqli_query($conn, "SELECT * FROM jurusan");
  while ($data = mysqli_fetch_array($getJurusan)) {
    echo "
        <option value='$data[id]'>
        $data[jurusan]
        </option>
        ";
  }
}
