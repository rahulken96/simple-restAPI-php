<?php
include 'config.php';

$id   = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];

$connect->query("UPDATE mahasiswa SET id='$id', nama='$nama', nim='$nim' WHERE id='$id'");

header("location: ../index.php");
