<?php 
include "../../MODEL/dbinsert.php";

$salary = $_GET['EMPLOYEE_SALARY'];
$ENAME = $_GET['ENAME'];

updateSAl($salary,$ENAME);


?>