<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $title = $_POST["title"];
        $type = $_POST["type"];
        $content  = $_POST["content"];
         $description = $_POST['description'];


           
         move_uploaded_file($_FILES["image"]["tmp_name"], "../../VIEW/images/".$_REQUEST["type"].".jpg");
         $image= $_REQUEST["type"].".jpg";
         

         $postdata = 
            array(
                'title' => $title,
                'type' => $type,
                'content' => $content,
                'description' => $description,
                'image' => $image
                
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
        
        $result = file_get_contents('http://localhost:8080/project_war_exploded/admin/blog', false, $context);
        echo $result;

}




?>