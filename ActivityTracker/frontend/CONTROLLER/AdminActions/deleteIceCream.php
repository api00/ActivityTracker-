<?php 

$id = $_GET['b_id'];
$data1 = file_get_contents("http://localhost:8080/project_war_exploded/admin/blogs/".$id);
if($data1 == true){
    header('Location: ../../VIEW/ADMIN/showFlavour.php');
}

?>