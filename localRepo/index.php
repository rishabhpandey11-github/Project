<?php
    $server="localhost";
    $username="root";
    $password="";

    $con = mysqli_connect($server , $username , $password);

    if(!$con){
        die("connetion to this database failed due to : " .mysqli_connect_error()) ;
    }

    $Name = $_POST['Name'];
    $Contact = $_POST['contact'];
    $Chanting = $_POST['chanting'];
    $sql= "INSERT INTO `my_web`.`folks` (`Name`, `Mobile`, `Chanting`, `Date`) VALUES ('$Name', '$Contact', '$Chanting', current_timestamp());";
    
    if($con ->query($sql)==true){
        echo "Successfully Inserted";
    }
    else{
        echo "Error : $sql <br> $con->error";
    }


    $con ->close();
?>