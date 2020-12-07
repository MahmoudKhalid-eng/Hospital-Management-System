<?php 

$host = 'localhost';  
$user = 'root';  
$pass = '';
$conn = mysqli_connect($host, $user, $pass,'Hospital System'); 

$id=$_POST['id'];
$password=$_POST['password'];
$SQL="SELECT * FROM client where ID='$id' and Password='$password'";
$result=mysqli_query($conn,$SQL);
$row=mysqli_fetch_assoc($result);
if(mysqli_num_rows($result) > 0){
    header("Location:Client_Booking.html"); 
}else{
    echo 'invalid id or password';
}
?>