<?php

$servername = "localhost";
      $username = "root";
      $password = "usbw";
      $dbname = "test";
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      if(isset($_POST['submit']))
        {
             $ime = $_POST["name"];
            echo $_POST["l"];
             $sql2 = "UPDATE `proba` SET `name` = '$ime' WHERE `id` = '1'"; 
            $conn->query($sql2);  
    }

      $sql =  "SELECT * FROM proba";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {  // output data of each row
        while($row = $result->fetch_assoc()) {
              echo  $row["id"];
              echo  $row["name"]; 
              echo "<br>";        

              
             }
        } 





?>

<html>
<head></head>
<body>
    <form method="post" action="">
    <input id="name" name="name" placeholder="First Name" class="form-control here" type="text">
    <input id="l" name="l" placeholder="First Name" class="form-control here" type="text">

    <button name="submit" type="submit" class="btn btn-primary">Update My Profile</button>
    </form>


</body>

</html>