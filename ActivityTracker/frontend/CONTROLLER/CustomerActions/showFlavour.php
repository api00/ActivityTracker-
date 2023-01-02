
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
<body>
    


<?php 


include "../../MODEL/dbread.php";


if(isset($_GET['INGREDIENTS'],$_GET['PRICE'])){
	$allSearchedUsers = readFlavour($_GET['INGREDIENTS'],$_GET['PRICE']);
    echo "<table>
<tr>
<th>SERIAL_NUMBER</th>
<th>PORTION</th>
<th>INGREDIENTS</th>
<th>PRICE</th>


</tr>";

    echo "<tr>";
    echo "<td>" . $allSearchedUsers['SERIAL_NUMBER']  . "</td>";
    echo "<td>" . $allSearchedUsers['PORTION']  . "</td>";
    echo "<td>" . $allSearchedUsers['INGREDIENTS'] . "</td>";
    echo "<td>" . $allSearchedUsers['PRICE'] . "</td>";

  
 
  echo "</tr>";
    return;

}
else{
	
	
}
?>

</body>
</html>