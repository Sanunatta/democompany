<?php
 $server="localhost";
 $usernane="root";
 $password="";
 $database="user";

 $conn=mysqli_connect($server,$usernane,$password,$database);
 if(!$conn){
    die("Database was not Connected".mysqli_connect_error());
 }
 $name=$_POST['name'];
 $email=$_POST['email'];
 $ph=$_POST['ph'];
 $other=$_POST['other'];
 $sql="INSERT INTO  'user' (`name`, `email`,`ph`, `other`,'date') VALUES ('$name','$email','$ph', '$other',current_timestamp())";
 $result=mysqli_query($conn,$sql);
 if($result){
    echo "Data Was Added";
 }
 else{
    echo "Conection Error";
 }
?>