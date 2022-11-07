<?php
include 'config.php';

$id = $_POST['id'];
$connect->query("DELETE FROM mahasiswa WHERE id='$id'");

header("location: ../index.php");
