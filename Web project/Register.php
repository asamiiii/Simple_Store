<?php
    $dbhost= "localhost";
    $dbuser="root";
    $dbpass="";
    $dp="regist";
    $conn=new mysqli($dbhost,$dbuser,$dbpass,$dp);
    //$conn=new mysqli("localhost","root","","users");
    if(isset($_POST['submit'])){  
    $username=$_POST['username'];
    $password=$_POST['password'];
	$phone=$_POST['phone'];
    $sql="insert into user (username,password,phone) VALUES ('$username', '$password', '$phone')";   
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Save";
    }else{
        echo "wrong";
    }
}
?>