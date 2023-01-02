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
			
			<th >  Name</th>
			<th> catagory</th>
			<th>title</th>
			<th>age</th>
            <th>From date</th>
			<th>To date</th>
		
		
            

		</tr>
	</thead>
	<tbody>
    <?php 
    
  $data1 = file_get_contents("http://localhost:8080/project_war_exploded/user/Goals");
  $data = json_decode($data1);
 
     for( $i=0; $i<count($data); $i++):
          ?>
			<tr>
            <td><?php echo $data[$i]->username ?></td>
            <td><?php echo $data[$i]->catagory; ?></td>

            <td><?php echo $data[$i]->title;?></td>
				
				<td><?php echo $data[$i]->age ?></td>
                <td><?php echo $data[$i]->from_date[0]."/" ?>
                <?php echo $data[$i]->from_date[1]. "/" ?>
                <?php echo $data[$i]->from_date[2] ?></td>
				<td><?php echo $data[$i]->to_date[0]."/" ?>
                <?php echo $data[$i]->to_date[1]. "/" ?>
                <?php echo $data[$i]->to_date[2] ?></td>
        


              
                
				<td><a href="../../CONTROLLER/AdminActions/deleteGoals.php?id=<?php echo $data[$i]->id ?>" onclick="return confirm('Are you sure want to delete this ?')">delete</a></td> 
   

				
				
			</tr>
			
            <?php endfor ?>
		

	</tbody>
	

</table>

<?php require "../../CONTROLLER/Includes/footer.php";?>
</body>
</html>