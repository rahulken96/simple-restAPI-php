<?php
include 'config.php';

$nama = $_POST['nama'];
$nim = $_POST['nim'];

$connect->query("INSERT INTO mahasiswa VALUES ('','$nama','$nim')");

header("location: ../index.php");
