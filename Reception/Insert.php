<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Hospital Management System</title>
        <style></style> 
        <link rel="stylesheet" href="../style.css"> 
    </head>
    
    <body>
        <a href="../Home.html"><h1 class="reg_head">Hospital Management System</h1></a>
        <center>
        <form class="reg" action="room.php" method="post">
            <input type="text" name="name" placeholder="Enter your name"><br>
            <input type="text" name="phone" placeholder="Enter your phone number"><br>
            <input type="text" name="age" placeholder="Enter your age"><br>
            <input type="text" name="id" placeholder="Enter your id"><br>
            
            <select name="room">
            <option>Room</option>
            <option value="1">1</option>
            <option value="2">2</option>    
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>    
            <option value="7">7</option>  
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            </select><br>
            <input type="submit" value="Book">
        </form>
        </center>    
    </body>
        
</html>