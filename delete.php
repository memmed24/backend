<?php
    include "db.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM news WHERE id='$id'";
    $query = mysqli_query($db_con, $sql);

    if($query){
        header('Location: admin.php');
    }else{
        echo "cannot deleted";
    }