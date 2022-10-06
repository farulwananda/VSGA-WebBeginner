<?php
require '../../config/connect.php';

if (isset($_POST['update-nilai'])) {
  $id = htmlspecialchars(trim($_POST['id']));
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
    mysqli_query($conn, "UPDATE nilai SET pelajaran = '$pelajaran', nilai = '$nilai', kategori = '$kategori' WHERE id = '$id'");
    echo "
        <script>
        alert('Nilai berhasil diupdate');
        window.location.href = 'dataSiswa.php';
        </script>
      ";
  }
}


if (isset($_POST['update-siswa'])) {
  $id = htmlspecialchars(trim($_POST['id']));
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
    mysqli_query($conn, "UPDATE siswa SET nama = '$nama', gender = '$gender', umur = '$umur', jurusan = '$jurusan', alamat = '$alamat' WHERE id = '$id'");
    echo "
        <script>
        alert('Siswa berhasil diupdate');
        window.location.href = 'dataSiswa.php';
        </script>
      ";
  }
}
