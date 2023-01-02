<?php
    include "../MODEL/dbinsert.php";
$full_name = $User_Name = $User_Rule = $User_Password = "";
$full_nameEr = $User_NameEr = $User_RuleEr = $User_PasswordEr = '';

$successMesg = $errorMesg = "";







    if($_SERVER["REQUEST_METHOD"]=="POST"){

 
  

 

        $username = $_POST["USERNAME"];
        $password  = $_POST["PASSWORD"];
        $email  = $_POST["EMAIL"];
        $cpassword = $_POST['cpassword'];
        if($password == $cpassword){
          
            $result = Register($username, $password, $email);
           
            
            if($result){
             echo "Sucessfully Register";
            }
           
        }
        }
        else{

           }
       
    
    
  
      
    




?>