<?php 
  $servername = "localhost";
  $username = "root";
  $password = "usbw";
  $dbname = "baza";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }


  if($_SESSION["username"] === NULL){
      $user = $_POST["username"];
      $pw  = $_POST["password"];
      $sql = "SELECT username FROM personal WHERE username='$user' AND password='$pw'";
      $result = $conn->query($sql);
                                      
      if ($result->num_rows == 1) {
                                          // output data of each row
          while($row = $result->fetch_assoc()) {
              $profile = $row["username"];                                              
              $_SESSION["username"]=$profile; }
          } else {
      //header("Location: http://www.yourwebsite.com/user.php"); /* Redirect browser */
      exit();
 }
}
?>  