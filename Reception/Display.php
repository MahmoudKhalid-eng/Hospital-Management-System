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
        $q="select * from patient";
        $result = $conn->query($q);
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "Name: " . $row["Name"]. " - Phone: " . $row["Phone"]. " - Age: " . $row["Age"]." - ID: ".$row["ID"]." "."Room: " . $row["room"] ."<br>";
          }
        } else {
          echo "0 results";
        }
    }

?>