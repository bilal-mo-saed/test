<?php


$conn = new mysqli("lacalhost",'db','ps');
$query = "select * from dbl";
$res = $conn->query($query);
var_dump($conn);
die();