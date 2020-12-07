<?php  
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $age=$_POST['age'];
    $id=$_POST['id'];
    $room=$_POST['room'];

    $host = 'localhost';  
    $user = 'root';  
    $pass = '';
    $conn = mysqli_connect($host, $user, $pass,'Hospital System'); 
    if(! $conn )  
    {  
      die('Could not connect: ' . mysqli_error());  
    }  
    else{
        $q="INSERT INTO patient VALUES ('$name','$phone','$age','$id','$room')";
        $res=mysqli_query($conn,$q);
        if($res){  
            echo "insert done ";    
        }
        else{
            echo 'failed';
        }
    }

?>