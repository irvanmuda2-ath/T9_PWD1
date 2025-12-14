<?php
require_once "Hewan.php";
$hewan = new Hewan();

$id = $_GET['id'];
$hewan->delete($id);

header("Location: index.php");
