
<!DOCTYPE html>

<html lang="en">
    
  <head>

  <?php 
    
      session_start();
      $servername = "localhost";
      $username = "root";
      $password = "usbw";
      $dbname = "baza";
      $profil = $_SESSION["username"];
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
      if(isset($_POST['submit1'])){


        $newpassword = md5($_POST["password"]);
                        $confirmnewpassword = md5($_POST['password1']);
                        if($newpassword==$confirmnewpassword){
                            $sql = "UPDATE company SET password='$newpassword' WHERE username='$profil'";
                            if (mysqli_query($conn, $sql))
                      {
                             echo "Congratulations You have successfully changed your password";
                      }
                              else
                      {
                            echo "The new password and confirm new password fields must be the same";
                           }
        
      }
    }


      if(isset($_POST['submit'])){


        $oldinfo = "SELECT * FROM company WHERE username='$profil'";
        $result = $conn->query($oldinfo);  

      if ($result->num_rows == 1) {  // output data of each row
        while($row = $result->fetch_assoc()) {
              $email = $row["email"];
              $pin = $row["pin"];
              $addres = $row["addres"];
              $phone = $row["phone"];              
             }
            if($_POST["email"]!=null){ $email = $_POST["email"]; }
            if($_POST["pin"]!=null){$pin = $_POST["pin"];}
            if($_POST["addres"]!=null){$addres = $_POST["addres"];}
            if($_POST["phone"]!=null){$phone = $_POST["phone"];} 
        }

        $fullupdate = "UPDATE `company` 
        SET 
        `email` = '$email',
        `pin`=  '$pin',
        `phone` = '$phone',
        `addres` = '$addres'      
         WHERE `username` = '$profil'";
        $conn->query($fullupdate);
        }

      $sql = "SELECT * FROM company WHERE username='$profil'";
      $result = $conn->query($sql);                                      
      if ($result->num_rows == 1) { 
          while($row = $result->fetch_assoc()) {
                $email = $row["email"];
                $addres = $row["addres"];
                $pin = $row["pin"];
                $phone = $row["phone"];
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
        <a class="navbar-brand" href="#jumbotron">  <img src="upwork.png" height="40px" width="100px"> </a>
          <ul class="nav navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="http://localhost:8080/work/dashboard/company.php">Home <span class="sr-only">(current)</span></a>
            </li>
        
            <li class="nav-item dropdown pull-xs-right">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <b>  <?php echo $_SESSION["username"]?> </b>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  
                  <a class="dropdown-item" href="http://localhost:8080/work/index.php">Log out</a>
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
                      <a href="http://localhost:8080/work/dashboard/company.php" class="list-group-item list-group-item-action ">Dashboard</a>
                      <a href="http://localhost:8080/work/posts/cvpost.php" class="list-group-item list-group-item-action">Search CVs</a>
                      <a href="http://localhost:8080/work/post/hire.php" class="list-group-item list-group-item-action">Hire</a>
                      <a href="http://localhost:8080/work/editpublic/company.php" class="list-group-item list-group-item-action  ">Edit Public Informations</a>
                      <a href="http://localhost:8080/work/editprivate/company.php" class="list-group-item list-group-item-action active">Edit Private Informations</a>
                      
                      
                    </div> 
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Private Informations</h4>                                  
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="post" action="">
                                   <b>   <div class="form-group row">
                                        <label for="email" class="col-4 col-form-label">Email</label> 
                                        <div class="col-8">
                                          <input id="email" name="email" placeholder="Email" class="form-control here" type="text">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="phone" class="col-4 col-form-label">Phone</label> 
                                        <div class="col-8">
                                          <input id="phone" name="phone" placeholder="Phone" class="form-control here" type="text">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="addres" class="col-4 col-form-label">Addres</label> 
                                        <div class="col-8">
                                        <input id="addres" name="addres" placeholder="Addres" class="form-control here" type="text">                                        </div>
                                      </div> 
                                      <div class="form-group row">
                                        <label for="pin" class="col-4 col-form-label">Pin</label> 
                                        <div class="col-8">
                                        <input id="pin" name="pin" placeholder="Pin" class="form-control here" type="text">                                        </div>
                                      </div>                                      
                                      <div class="form-group row">
                                        <div class="offset-4 col-8">
    </b>                                  <button name="submit" type="submit" class="btn btn-primary">Update My Profile</button>
                                        </div>
                                      </div>
                                    </form>
                                </div>                                
                            </div>                                            
                        </div>
                    </div>
                </div>
                <div class="col-md-2 ">
                  <div class="list-group "><b>
                   <p>Username: <?php  echo $_SESSION["username"];?></p>
                   <p>Email: <?php  echo $email?></p>
                   <p>Phone: <?php  echo $phone?></p>
                   <p>Addres: <?php  echo $addres?></p>
                   <p>Pin: <?php  echo $pin?></p>
    </b> 
                 </div> 

                 <p>_______________________________________________________________ </p>

                 <form action="#" method="Post">

                  <h4>Change Password</h4>
                  <br>
                    <input id="password" name="password" placeholder="New Password" class="form-control here" type="text">
                    <br>
                    <input id="password1" name="password1" placeholder="Confirm Password" class="form-control here" type="text">
   
                    <br>
                    <button name="submit1" type="submit" class="btn btn-primary">Change Password</button>
                 </form>

            </div>
        </div>

        
          
      
      
      
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
      
  </body>

  
    
</html>