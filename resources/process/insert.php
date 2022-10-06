<?php
require '../../config/connect.php';

if (isset($_POST['tambah-menu'])) {
  $makanan = htmlspecialchars(trim($_POST['makanan']));
  $kategori = htmlspecialchars(trim($_POST['kategori']));
  $harga = htmlspecialchars(trim($_POST['harga']));

  if (empty($makanan) || empty($kategori) || empty($harga)) {
    echo "
        <script>
        alert('Silahkan isi data dengan lengkap');
        </script>
        ";
  } else {
    mysqli_query($conn, "INSERT INTO makanan (makanan, kategori, harga) VALUES ('$makanan', '$kategori', '$harga')");
    echo "
        <script>
        alert('Menu berhasil ditambah');
        window.location.href = 'dataMakanan.php';
        </script>
        ";
  }
}

if (isset($_POST['tambah-siswa'])) {
  $nama = htmlspecialchars(trim($_POST['nama']));
  $gender = htmlspecialchars(trim($_POST['gender']));
  $umur = htmlspecialchars(trim($_POST['umur']));
  $jurusan = htmlspecialchars(trim($_POST['jurusan']));
  $alamat = htmlspecialchars(trim($_POST['alamat']));

  if (empty($nama) || empty($gender) || empty($umur) || empty($jurusan) || empty($alamat)) {
    echo "
        <script>
        alert('Silahkan isi data dengan lengkap');
        </script>
        ";
  } else {
    mysqli_query($conn, "INSERT INTO siswa (nama, gender, umur, jurusan, alamat) VALUES ('$nama', '$gender', '$umur', '$jurusan', '$alamat')");
    echo "
        <script>
        alert('Siswa berhasil ditambah');
        window.location.href = 'dataSiswa.php';
        </script>
        ";
  }
}

if (isset($_POST['tambah-nilai'])) {
  $id_siswa = htmlspecialchars(trim($_POST['id']));
  $pelajaran = htmlspecialchars(trim($_POST['pelajaran']));
  $nilai = htmlspecialchars(trim($_POST['nilai']));
  $kategori = htmlspecialchars(trim($_POST['kategori']));

  if (empty($pelajaran) || empty($nilai) || empty($kategori)) {
    echo "
        <script>
        alert('Silahkan isi data dengan lengkap');
        </script>
        ";
  } else {
    mysqli_query($conn, "INSERT INTO nilai (id_siswa, pelajaran, nilai, kategori) VALUES ('$id_siswa', '$pelajaran', '$nilai', '$kategori')");
    echo "
        <script>
        alert('Nilai berhasil ditambah');
        window.location.href = 'dataNilai.php?id={$id_siswa}';
        </script>
        ";
  }
}

if (isset($_POST['tambah-barang'])) {
  $merk = htmlspecialchars(trim($_POST['merk']));
  $warna = htmlspecialchars(trim($_POST['warna']));
  $jumlah = htmlspecialchars(trim($_POST['jumlah']));

  if (empty($merk) || empty($warna) || empty($jumlah)) {
    echo "
        <script>
        alert('Silahkan isi data dengan lengkap');
        </script>
        ";
  } else {
    mysqli_query($conn, "INSERT INTO barang (nama_merk, warna, jumlah) VALUES ('$merk', '$warna', '$jumlah')");
    echo "
        <script>
        alert('Barang berhasil ditambah');
        window.location.href = 'dataBarang.php';
        </script>
        ";
  }
}

if (isset($_POST['tambah-jurusan'])) {
  $jurusan = htmlspecialchars(trim($_POST['jurusan']));

  if (empty($jurusan)) {
    echo "
        <script>
        alert('Silahkan isi data dengan lengkap');
        </script>
        ";
  } else {
    mysqli_query($conn, "INSERT INTO jurusan (jurusan) VALUES ('$jurusan')");
    echo "
        <script>
        alert('Jurusan berhasil ditambah');
        window.location.href = 'dataSiswa.php';
        </script>
        ";
  }
}
