<?php  
    $doc=$_POST['doc'];
    $app=$_POST['app'];

    $host = 'localhost';  
    $user = 'root';  
    $pass = '';
    $conn = mysqli_connect($host, $user, $pass,'Hospital System'); 
    if(! $conn )  
    {  
      die('Could not connect: ' . mysqli_error());  
    }  
    else{
        $q="INSERT INTO appointments VALUES ('$doc','$app')";
        $res=mysqli_query($conn,$q);
        if($res){  
            echo "insert done ";    
        }
        else{
            echo 'failed';
        }
    }

?>