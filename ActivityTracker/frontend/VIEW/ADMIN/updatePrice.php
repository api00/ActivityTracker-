<?php 
include "../../MODEL/dbinsert.php";

$flavour = $_GET['INGREDIENTS'];
$price = $_GET['PRICE'];

updateFlavour($flavour,$price);


?>