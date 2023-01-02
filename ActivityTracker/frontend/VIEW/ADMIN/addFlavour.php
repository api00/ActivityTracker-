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

 require "../../CONTROLLER/AdminActions/addFlavourAction.php";
?>

<div class="apartment-container">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" enctype="multipart/form-data">
<h2 style="text-align: center; color:aquamarine; background-color:blueviolet">Add new Blog</h2>
    <fieldset>
       
        <legend> Blog</legend>
        <table>
        <tr>
                <td><label for="Aid">Title</label> </td>
                <td>        <input type="text" name="title" required>   <br></td>
                
            </tr>
            <tr>
                <td><label for="Aid">Type</label> </td>
                <td>        <input type="text" name="type" required>   <br></td>
                
            </tr>
            <tr>
            <td>  <label for="Aname">Content</label></td>
                <td>        <input type="text" name="content" required>  <br>
</td>
            </tr>
            <tr>
                <td><label for="Aemail">Description</label></td>
                <td>        <input type="text" name="description" required>  <br>
</td>
<tr>
                <td><label for="Aemail">IMAGE</label></td>
                <td>        <input type="file" name="image" required>  <br>
</td>
          
        </table>
        
      
        
       
        
    </fieldset>

    <input type="submit" class="add" name="submit" value="Add"> <br> <br>
     <a href="../../VIEW/ADMIN/showFlavour.php">Show All Blogs</a> 
    <!-- <a href="../../VIEW/ADMIN/MinsalEmployee.php">Update Flavour</a>   -->


  

</form>
</div>
<?php include "../../CONTROLLER/Includes/footer.php";?> 
</body>
</html>