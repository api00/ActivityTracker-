<?php
session_start();
?>
<?php


?>
<?php  

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
	<thead>
		<tr style="padding:5px; background-color:yellow;">
			
			<th >  title</th>
			<th> type</th>
			<th>content</th>
			<th>description</th>
			<th>Image</th>
		
		
            

		</tr>
	</thead>
	<tbody>
    <?php 
    
  $data1 = file_get_contents("http://localhost:8080/project_war_exploded/admin/blogs");
  $data = json_decode($data1);
     for( $i=0; $i<count($data); $i++):
          ?>
			<tr>
     
            <td><?php echo $data[$i]->title;?></td>
            <td><?php echo $data[$i]->type; ?></td>
				
				<td><?php echo $data[$i]->content ?></td>
				<td><?php echo $data[$i]->description ?></td>
				<td><img src="../images/<?php echo $data[$i]->image ?>" height="100px" width="100px" alt="" srcset=""></td>

        


              
                
				<td><a href="../../CONTROLLER/AdminActions/deleteIceCream.php?b_id=<?php echo $data[$i]->b_id ?>" onclick="return confirm('Are you sure want to delete this ?')">delete</a></td> 
   

				
				
			</tr>
			
            <?php endfor ?>
		

	</tbody>
	

</table>

<?php require "../../CONTROLLER/Includes/footer.php";?>
</body>
</html>