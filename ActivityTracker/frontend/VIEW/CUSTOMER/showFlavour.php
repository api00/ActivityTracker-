<?php
session_start();
?>
<?php
if((!$_SESSION["RULE"])=="CUSTOMER")
{
    header("Location: ../Login.php");
die();

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/user-action.js"></script>
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
.user-search{
    width: 80%;
    margin: 0 auto;
    text-transform: uppercase;
    font-family: 'Roboto', sans-serif;
    font-weight: 400;
}
fieldset{
    margin-top: 10px;
}
.Search{
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
require "../../CONTROLLER/Includes/header.php";
require "../../CONTROLLER/Includes/sidebar_links.php";

?>
<div class="user-search">
<form action="../../CONTROLLER/CustomerActions/showFlavour.php" method="GET" name="Sform" onsubmit="Result(this); return false;">
    <fieldset>
        <legend>View Flavours</legend>
    <select name="INGREDIENTS" id="cars">
    <option value="">INGREDIENTS</option>
    <option value="mango">mango</option>
    <option value="vanila">vanila</option>
    <option value="strawbery">strawbery</option>
    </select>
    <select name="PRICE" id="cars">
    <option value="">PRICE</option>
    <option value="200">200</option>
    <option value="300">300</option>
    <option value="400">400</option>
    </select>
        <br> <br>
        <input type="submit" class="Search" name="submit" value="Search">  <br> <br>
        <div id="result"><b>Item info will be listed here...</b></div>



</form>

</div>

</fieldset>


<script >
                  function Result(pform) {
    var xhttp = new XMLHttpRequest();
    xhttp.onload = function(){
      document.getElementById("result").innerHTML=this.responseText;
    }
    xhttp.open("GET",pform.action + "?INGREDIENTS=" +pform.INGREDIENTS.value+"&PRICE=" +pform.PRICE.value);

    
    // xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send();
       }
              </script>
<?php
include "../../CONTROLLER/AdminActions/user-action.php";
require "../../CONTROLLER/Includes/footer.php";

?>

</body>
</html>