<?php
    include "config.php";
    $DATA_ID = $_GET['id'];
    $query = "DELETE FROM contactform WHERE id = {$DATA_ID}";
    $result = mysqli_query($connection, $query);
    if($result){
        header("Location: {$HOST_NAME}/record.php");
    }

?>