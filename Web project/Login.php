<?php
    $dbhost= "localhost";
    $dbuser="root";
    $dbpass="";
    $dp="regist";
    $conn=new mysqli($dbhost,$dbuser,$dbpass,$dp);
    if($conn->connect_error){
        echo "error 404";
    }else{
        echo "";
    }

    if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
   
    $sql="SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    $row =mysqli_fetch_array($result);
    if($username=="" && $password==""){
        header('location:loginpage.html');
    }
    if($row['username']==$username && $row['password']==$password){
		echo "<body style='background-color:#343a40 '>";
        echo " <h1><center>welcome $username</center></h1> ";
		echo '<h1><a href="http://localhost/Web%20project/Cart.php"><center>Click here to Browse</center></a></h1>';
    }else{
		echo "<body style='background-color:#343a40 '>";
        echo " <h1><center>[wrong ] </center></h1>";
		
    }
}
?>