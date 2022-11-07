<?php
include 'config.php';

$dataMhs = array();

if(isset($_POST['id'])){
    $id   = $_POST['id'];
    $queryResult = $connect->query("SELECT * FROM mahasiswa WHERE id='$id'");
}else{
    $queryResult = $connect->query("SELECT * FROM mahasiswa");
}

while ($fetchData = $queryResult->fetch_assoc()) {
    $dataMhs[] = $fetchData;
}

echo json_encode($dataMhs);
