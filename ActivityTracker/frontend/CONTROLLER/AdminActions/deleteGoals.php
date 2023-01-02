<?php 

$id = $_GET['id'];
$data1 = file_get_contents("http://localhost:8080/project_war_exploded/admin/goals/".$id);
if($data1 == true){
    header('Location: ../../VIEW/ADMIN/showEmployee.php');
}

?>