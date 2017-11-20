<?php
    //DB details
    $dbHost     = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName     = 'sample_db';
    
    //Create connection and select DB
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    
    //Check connection
    if($db->connect_error){
       die("Connection failed: " . $db->connect_error);
    }
    
    //Get image data from database
	$id = 1;
    $result = $db->query("SELECT image FROM images WHERE imageID = {$id}");
    
    if($result->num_rows > 0){
        $imgData = $result->fetch_assoc();
        //Render image
        header("Content-type: image/jpg");
		
        echo $imgData['image'];
		//echo '<img src="data:image;base64,'.$imageData['image'].'" alt="No Image.">';
    }else{
        echo 'Image not found...';
    }
?>