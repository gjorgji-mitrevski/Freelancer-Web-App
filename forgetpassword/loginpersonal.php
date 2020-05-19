</html>

<!DOCTYPE html>

<html lang="en">
    
  <head>


    <?php 
  session_start();
  $servername = "localhost";
  $username = "root";
  $password = "usbw";
  $dbname = "baza";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }



  if($_SESSION["username"] == NULL){
      $user = $_POST["username"];
      $pw  = $_POST["password"];
      $sql = "SELECT * FROM personal WHERE username='$user' AND pin='$pw'";
      $result = $conn->query($sql);
                                      
      if ($result->num_rows == 1) {
                                          // output data of each row
          while($row = $result->fetch_assoc()) {
              $profile = $row["username"];                                              
              $_SESSION["username"]=$profile;
             }
          } else {
      header("Location: http://localhost:8080/work/loginerror/error1.php"); /* Redirect browser */
      exit();
    }

    
    }
    if($_SESSION["username"] != NULL){
      $user = $_SESSION["username"];
      $sql = "SELECT * FROM personal WHERE username='$user'";
      $result = $conn->query($sql);
                                      
      if ($result->num_rows == 1) {
                                          // output data of each row
          while($row = $result->fetch_assoc()) {
              $profile = $row["username"];                                              
              $firstname = $row["firstname"];
              $lastname = $row["lastname"];
              $university = $row["university"];
              $workat = $row["workat"];
              $position = $row["position"];
              $expe = $row["expe"];
              $contact_email = $row["contact email"];
              $des = $row["description"];
             }
          } 
    
    }
  ?>  
  

 
    <meta charset="utf-8">
      
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
      
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      
      <link rel="stylesheet" href="style.css">

      <title>Proekt</title>
      
  </head>
    
  <body data-spy="scroll" data-target="#navbar" data-offset="150">
      
        <nav class="navbar navbar-light bg-faded navbar-fixed-top" id="navbar">
          <a class="navbar-brand" href="#">HireMe</a>
          <ul class="nav navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="http://localhost:8080/work/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost:8080/work/worktab/worktab.php">Jobs</a>
            </li>  
            <li class="nav-item">
              <a class="nav-link" href="http://localhost:8080/work/helptab/helptab.php">Help</a>
            </li>          
            <li class="nav-item dropdown pull-xs-right">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  ProfileUsernam
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>        
          </ul> 
          
        </nav> 


          <br>
          <br>
          <br>
        
          <div class="">
            <div class="row">
                <div class="col-md-2 ">
                     <div class="list-group ">
                      <a href="http://localhost:8080/work/dashboard/personal.php" class="list-group-item list-group-item-action active ">Dashboard</a>
                      <a href="#" class="list-group-item list-group-item-action">Search Jobs</a>
                      <a href="http://localhost:8080/work/post/cv.php" class="list-group-item list-group-item-action">Post CV</a>
                      <a href="http://localhost:8080/work/editpublic/personal.php" class="list-group-item list-group-item-action ">Edit Public Informations</a>
                      <a href="http://localhost:8080/work/editprivate/personal.php" class="list-group-item list-group-item-action ">Edit Private Informations</a>
                      
                      
                      
                    </div> 
              </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Public Profile</h4>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                <p><h6>Username: <?php echo $_SESSION["username"] ?></p></h6>
                                <p><h6>First Name: <?php echo $firstname ?></p> </h6>
                               <h6> <p>Last Name: <?php echo $lastname?></p>
                                <p>University: <?php echo $university?></p>
                                <p>Work at: <?php echo $workat?></p>
                                <p>Position: <?php echo $position?></p>                 
                                <p>Experience: <?php echo $expe?></p>
                                <p>Contact Email: <?php echo $contact_email?></p>
                                <p>Short description:</p>
                                <?php echo $des?>  
                                </h6>
                  
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
          
      
      
      
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
      
  </body>

  
    
</html>