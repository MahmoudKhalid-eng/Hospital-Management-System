<?php  
   
    $host = 'localhost';  
    $user = 'root';  
    $pass = '';
    $conn = mysqli_connect($host, $user, $pass,'Hospital System'); 
    if(! $conn )  
    {  
      die('Could not connect: ' . mysqli_error());  
    }  
    else{
        $q="select * from appointments";
        $result = $conn->query($q);
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "Name: " . $row["Doc_Name"]. " - Appointment: " . $row["Appointment"] ."<br>";
          }
        } else {
          echo "0 results";
        }
    }

?>