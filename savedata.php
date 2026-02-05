<?php

if(isset($_POST['submit'])){
        include "config.php";  
        echo $NAME = $_POST['name'];
        echo $EMAIL = $_POST['email'];
        echo $SUBJECT = $_POST['subject'];
        echo $MESSAGE = $_POST['description'];
        $query = "INSERT INTO contactform (name, email, subject, message) VALUES ('{$NAME}', '{$EMAIL}', '{$SUBJECT}', '{$MESSAGE}')" ;
        $result = mysqli_query($connection, $query) or ("Query failed");

        if($result){
            header("Location: {$HOST_NAME}/record.php");
        }
    }
?>