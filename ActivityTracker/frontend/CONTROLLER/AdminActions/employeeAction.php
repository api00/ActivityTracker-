<?php

    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $username = $_POST["username"];
        $age = $_POST["age"];
        $title  = $_POST["title"];
        $catagory  = $_POST["catagory"]; 
        $from_date = $_POST["from_date"];
        $to_date  = $_POST["to_date"];
        $description  = $_POST["description"];
        
        $postdata = 
        array(
            'age' => $age,
            'username' => $username,
            'title' => $title,
            'catagory' => $catagory,
            'from_date' => $from_date,
            'to_date' => $to_date,
            'description'=>$description

            
        );
      $data= json_encode($postdata);

    $opts = array('http' =>
        array(
            'method'  => 'POST',
            'header'  => "Content-Type: application/json\r\n",
            'content' => $data
        )
    );
    
    $context  = stream_context_create($opts);
    
    $result = file_get_contents('http://localhost:8080/project_war_exploded/user/goal', false, $context);
    echo $result;
}




?>