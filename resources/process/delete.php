<?php
require '../../config/connect.php';

if ($idSiswa = $_GET['id']) {
  mysqli_query($conn, "DELETE FROM siswa WHERE id = '$idSiswa'");
  echo "
    <script>
      alert('Siswa berhasil dihapus');
      window.location.href = '../view/dataSiswa.php';
    </script>
  ";
}

if ($idNilai = $_GET['id']) {
  mysqli_query($conn, "DELETE FROM nilai WHERE id = '$idNilai'");
  echo "
    <script>
      alert('Nilai berhasil dihapus');
      window.location.href = '../view/dataSiswa.php';
    </script>
  ";
}
