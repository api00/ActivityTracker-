
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


if(isset($_GET['USERNAME'])){
	$allSearchedUsers = readUser($_GET['USERNAME']);
    echo "<table>
<tr>
<th>ID</th>
<th>User Name</th>
<th>Rule</th>
<th>Email</th>
</tr>";

    echo "<tr>";
    echo "<td>" . $allSearchedUsers['PERSONID']  . "</td>";
    echo "<td>" . $allSearchedUsers['USERNAME']  . "</td>";
    echo "<td>" . $allSearchedUsers['RULE'] . "</td>";
    echo "<td>" . $allSearchedUsers['EMAIL'] . "</td>";

  
 
  echo "</tr>";
    return;

}
else{
	
	
}
?>

</body>
</html>