<?php

    require "config.php";

    $id = $_GET['id'];

    $del = mysqli_query($con, "DELETE FROM personal_ledger WHERE id = '$id' ");

    if($del){
        mysqli_close($con);
        header("location:view.php");
        exit;
    } else {
        echo "Error Deleting data";
    }
?>