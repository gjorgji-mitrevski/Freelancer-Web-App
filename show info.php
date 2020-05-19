<?php 
    if(isset($_POST['submit'])){
      session_start();
      $servername = "localhost";
      $username = "root";
      $password = "usbw";
      $dbname = "baza";
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
      
      $sql = "SELECT * FROM personal WHERE username='$_SESSION["username"]'";
      $result = $conn->query($sql);
                                      
      if ($result->num_rows == 1) {  // output data of each row
          while($row = $result->fetch_assoc()) {
                $firstname = $row["firstname"];
                $lastname = $row["lastname"];
                $university = $row["university"];
                $workat = $row["workat"];
               }
          } else {
      //header("Location: http://www.yourwebsite.com/user.php"); /* Redirect browser */
      exit();


         //code to be executed
    }else{
         //code to be executed  
    }
    ?>


$sql = "INSERT INTO `personal` ( `firstname`, `lastname`, `university`, `workat`, `position`, `expe`, `contact_email`,`description`) 
      VALUES ('$_POST["name"]','$_POST["lastname"]','$_POST["university"]','$_POST["workat"]','$_POST["position"]','$_POST["expe"]','$_POST["contact_email"]','$_POST["description"]') 
      WHERE username='$_SESSION["username"]'";

      $result = $conn->query($sql);  