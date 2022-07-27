<?php
include('koneksi.php');

$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tgl_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['jurusan'];

$query = mysqli_query($connect, "UPDATE mahasiswa SET nim='$nim', nama='$nama', jenis_kelamin='$jenis_kelamin', tanggal_lahir='$tgl_lahir', alamat='$alamat', jurusan='$jurusan' WHERE id='$id'");

?>