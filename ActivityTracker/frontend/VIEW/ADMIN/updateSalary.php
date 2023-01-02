<?php
session_start();
?>
<?php

?>
<?php  

include "../../MODEL/dbconnect.php";
include "../../MODEL/dbread.php";
require "../../CONTROLLER/Includes/header.php";
require "../../CONTROLLER/Includes/admin_sidebar.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
#apartment-details {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#apartment-details td, #apartment-details th {
  border: 1px solid #ddd;
  padding: 8px;
}
#apartment-details tr{
	transition: all 0.6s;
}

#apartment-details tr:nth-child(even){background-color: #f2f2f2;}

#apartment-details tr:hover {background-color: #ddd;}

#apartment-details th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: brown;
  color: white;
}
	</style>
</head>
<body>
    
<?php 

?>

       


 
<table id="apartment-details">
<form action="./salaryUpdate.php" method="GET" name="Sform" onsubmit="Result(this); return false;">
    <fieldset>
        <legend>Update Salary</legend>
    <select name="ENAME" id="cars">
    <option value="">NAME</option>
    <option value="API">API</option>
    <option value="AMAN">AMAN</option>
    </select>
    <select name="EMPLOYEE_SALARY" id="cars">
    <option value="">EMPLOYEE SALARY</option>
    <option value="25000">25000</option>
    <option value="1000">1000</option>
    </select>
        <br> <br>
        <input type="submit" class="Search" name="submit" value="Submit">  <br> <br>
	

</table>

<?php require "../../CONTROLLER/Includes/footer.php";?>
</body>
</html>