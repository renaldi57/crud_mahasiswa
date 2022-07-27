<?php
include('koneksi.php');
 
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tgl_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['jurusan'];
 
$query = mysqli_query($connect, "INSERT INTO mahasiswa(nim, nama, jenis_kelamin, tanggal_lahir, alamat, jurusan) VALUES('$nim', '$nama', '$jenis_kelamin', '$tgl_lahir', '$alamat', '$jurusan')");
 
?>