<?php  
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $age=$_POST['age'];
    $id=$_POST['id'];
    $passs=$_POST['password'];

    $host = 'localhost';  
    $user = 'root';  
    $pass = '';
    $conn = mysqli_connect($host, $user, $pass,'Hospital System'); 
    if(! $conn )  
    {  
      die('Could not connect: ' . mysqli_error());  
    }  
    else{
        $q="INSERT INTO client VALUES ('$name','$phone','$age','$id','$passs')";
        $res=mysqli_query($conn,$q);
        if($res){  
            header("Location:Client_Booking.html");   
        }
        else{
            echo 'failed';
        }
    }

?>