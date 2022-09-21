<?php
    
    //This is how to declare the server for xampp/wamp
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cms1";

    //Enabling connection creation
    $con= new mysqli($servername, $username, $password, $dbname);


    //To identify connection
    if($con->connect_error){
        die("Connection failed:" .$con->connec_error);

    }
    echo "@Succeed to connect@";



?>