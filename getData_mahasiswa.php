<?php
include('koneksi.php');
 
$query = mysqli_query($connect, "SELECT * FROM mahasiswa");
$result = array();

while($data = mysqli_fetch_array($query)){
    $result[] = $data;
}

echo json_encode($result);

?>