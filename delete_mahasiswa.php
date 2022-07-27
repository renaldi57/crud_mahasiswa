<!--Untuk menghapus data mahasiswa yang ada pada tabel Mahasiswa -->
<?php
    include"koneksi.php";
    $hapus = mysqli_query($connect, "DELETE FROM mahasiswa WHERE nim='$_GET[nim]'");
?>