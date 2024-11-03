<?php
   //code to connect mysql database through php
    $con = new mysqli('localhost','root','','crudoperation',3307);
    
    if(!$con){
        die(mysqli_error($con));
    }

?>