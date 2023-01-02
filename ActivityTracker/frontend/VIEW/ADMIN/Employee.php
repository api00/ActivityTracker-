<?php
session_start();
?>
<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/apartment-action.js"></script>
    <title>Document</title>
    <style>
        input[type=text], select {
  width: 30%;
  margin: 0 auto;
  padding: 12px 20px;
  margin: 8px 0;
 
}
        input[type=number] {
  width: 30%;
  margin: 0 auto;
  padding: 12px 20px;
  margin: 8px 0;
 
}
.apartment-container{
    width: 50%;
    margin: 0 auto;
    text-transform: uppercase;
    font-family: 'Roboto', sans-serif;
    font-weight: 400;
}
fieldset{
    margin-top: 10px;
}
.add{
    font-size: 18px;
    color: whitesmoke;
    border: 1px solid black;
    margin-top: 10px;
    display: inline-block;
    margin: 10px;
    padding: 10px;
    text-transform: uppercase;
    font-family: 'Roboto', sans-serif;
    font-weight: 900;
    cursor:pointer;
    background-color: brown;
    
}
    </style>
</head>
<body style="background-color:antiquewhite ">
<?php
include "../../CONTROLLER/Includes/header.php";

require "../../CONTROLLER/Includes/admin_sidebar.php";

require "../../CONTROLLER/AdminActions/employeeAction.php";
?>

<div class="apartment-container">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" enctype="multipart/form-data">
<h2 style="text-align: center; color:aquamarine; background-color:blueviolet">Add new Goal</h2>
    <fieldset>
       
        <legend>Goal set</legend>
        <table>
            
        <tr>
                <td> <label for="Aphone">username</label></td>
                <td><input type="text" name="username" required></td>
            </tr>
            
            <tr>
                <td> <label for="Aphone">Age</label></td>
                <td><input type="text" name="age" required></td>
            </tr>
        <tr>
                <td><label for="Aid">Title</label> </td>
                <td>        <input type="text" name="title" required>   <br></td>
                
            </tr>
            <tr>
                <td><label for="Aid">Catagory</label> </td>
                <td>        <input type="text" name="catagory" required>   <br></td>
                
            </tr>
            <tr>
            <td>  <label for="Aname">From Date</label></td>
                <td>        <input type="date" name="from_date" required>  <br>
</td>
            </tr>

            <tr>
            <td>  <label for="Aname">To date</label></td>
                <td>        <input type="date" name="to_date" required>  <br>
</td>
            </tr>
            <tr>
                <td><label for="Aid">Description</label> </td>
                <td>        <input type="text" name="description" required>   <br></td>
                
            </tr>
           
          
        </table>
        
      
        
       
        
    </fieldset>

    <input type="submit" class="add" name="submit" value="Add"> <br> <br>
    <a href="../../VIEW/ADMIN/showEmployee.php"> Tasks</a> 

  

</form>
</div>
<?php include "../../CONTROLLER/Includes/footer.php";?>
</body>
</html>