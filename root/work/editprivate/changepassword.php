
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

      

      if(isset($_POST['submit'])){


        $oldinfo = "SELECT * FROM personal WHERE username='$profil'";
        $result = $conn->query($oldinfo);  

      if ($result->num_rows == 1) {  // output data of each row
        while($row = $result->fetch_assoc()) {
              $email = $row["email"];
              $country =$row["country"];
              $city = $row["city"];
              $pin = $row["pin"];
              $addres = $row["addres"];
              $phone = $row["phone"];              
             }
            if($_POST["email"]!=null){ $email = $_POST["email"]; }
            if($_POST["country"]!=null){ $country = $_POST["country"]; }
            if($_POST["city"]!=null){$city =$_POST["city"];}
            if($_POST["pin"]!=null){$pin = $_POST["pin"];}
            if($_POST["addres"]!=null){$addres = $_POST["addres"];}
            if($_POST["phone"]!=null){$phone = $_POST["phone"];}            
        }
      
      $private = "UPDATE `personal` 
      SET 
      `email` = '$email',
      `country`=  '$country',
      `city` = '$city',
      `pin` = '$pin',
      `addres` ='$addres',
      `phone` = '$phone'     
       WHERE `username` = '$profil'";
      $conn->query($private);
     
      }

       /* if(isset($_POST['submit']))
        {
          $sql = "SELECT * FROM personal WHERE username='$profil'";
          $result = $conn->query($sql);  

        if ($result->num_rows == 1) {  // output data of each row
          while($row = $result->fetch_assoc()) {
                $firstname = $row["firstname"];
                $lastname = $row["lastname"];
                $university =$row["university"];
                $workat = $row["workat"];
                $position = $row["position"];
                $expe = $row["expe"];
                $contact_email = $row["contact_email"];
                $des = $row["description"];

                
               }
          }

          if($_POST["name"]!=null){ $firstname = $_POST["name"]; }
          if($_POST["lastname"]!=null){ $lastname = $_POST["lastname"]; }
          if($_POST["university"]!=null){$university =$_POST["university"];}
          if($_POST["work"]!=null){$workat = $_POST["work"];}
          if($_POST["experience"]!=null){$expe = $_POST["experience"];}
          if($_POST["email"]!=null){$contact_email = $_POST["email"];}
          if($_POST["publicinfo"]!=null){$des = $_POST["publicinfo"];}

          //$sql = "INSERT INTO  personal WHERE username='$profil'";
          //$sql1 = "INSERT INTO `personal`(`firstname`, `lastname`, `university`, `workat`, `position`, `expe`, `contact_email`, `description`) VALUES ('$firstname','$lastname',
          //'$university','$workat','$position','$expe','$contact_email','$des') WHERE username='$profil'";
          $expe = $_POST["experience"];
          $sql1 = "UPDATE `personal` SET 
          firstname = '$firstname',
          `lastname`='$lastname',
          `university`='$university',        
          `workat`='$workat',
          `position`='$position',
          `expe`= ['$expe'],
          `contact_email`= '$contact_email',        
          `description`='$des' 
          WHERE `username` = '$profil'";
          $conn->query($sql1);          
        }
        
*/

        

      $sql = "SELECT * FROM personal WHERE username='$profil'";
      $result = $conn->query($sql);                                      
      if ($result->num_rows == 1) { 
          while($row = $result->fetch_assoc()) {
                $email = $row["email"];
                $country = $row["country"];
                $city =$row["city"];
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

      <title>Private</title>
      
  </head>
    
  <body data-spy="scroll" data-target="#navbar" data-offset="150">
      
        <nav class="navbar navbar-light bg-faded navbar-fixed-top" id="navbar">
        <a class="navbar-brand" href="#jumbotron">  <img src="upwork.png" height="40px" width="100px"> </a>
          <ul class="nav navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#jumbotron">Home <span class="sr-only">(current)</span></a>
            </li>
      
            <li class="nav-item dropdown pull-xs-right">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $_SESSION["username"]?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <div class="dropdown-divider"></div>
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
                      <a href="http://localhost:8080/work/dashboard/personal.php" class="list-group-item list-group-item-action">Dashboard</a>
                      <a href="http://localhost:8080/work/posts/jobpost.php" class="list-group-item list-group-item-action">Search Jobs</a>
                      <a href="http://localhost:8080/work/post/cv.php" class="list-group-item list-group-item-action">Post CV</a>
                      <a href="http://localhost:8080/work/editpublic/personal.php" class="list-group-item list-group-item-action ">Edit Public Informations</a>
                      <a href="http://localhost:8080/work/editprivate/personal.php" class="list-group-item list-group-item-action active">Edit Private Informations</a>

                      
                      
                      
                    </div> 
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Private Profile Informations</h4>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="post" action = "">                                  
                                      <div class="form-group row">
                                        <label for="email" class="col-4 col-form-label">Email</label> 
                                        <div class="col-8">
                                          <input id="email" name="email" placeholder="Email" class="form-control here" type="text">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="country" class="col-4 col-form-label">Country</label> 
                                        <div class="col-8">
                                          <input id="country" name="country" placeholder="Country" class="form-control here" type="text">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group row">
                                        <label for="city" class="col-4 col-form-label">City</label> 
                                        <div class="col-8">
                                          <input id="city" name="city" placeholder="City" class="form-control here" type="text">
                                        </div>
                                      </div>


                                      <div class="form-group row">
                                        <label for="addres" class="col-4 col-form-label">Addres</label> 
                                        <div class="col-8">
                                          <input id="addres" name="addres" placeholder="Addres" class="form-control here" type="text">
                                        </div>
                                      </div>

                                      <div class="form-group row">
                                        <label for="pin" class="col-4 col-form-label">Pin</label> 
                                        <div class="col-8">
                                          <input id="pin" name="pin" placeholder="Pin" class="form-control here" type="text">
                                        </div>
                                      </div>  
                                      
                                      <div class="form-group row">
                                        <label for="phone" class="col-4 col-form-label">Phone</label> 
                                        <div class="col-8">
                                          <input id="phone" name="phone" placeholder="Phone" class="form-control here" type="text">
                                        </div>
                                      </div>    

                                      
                                      
                                      <div class="form-group row">
                                        <div class="offset-4 col-8">
                                          <button name="submit" type="submit" class="btn btn-primary">Update My Profile</button>
                                        </div>
                                      </div>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-2 ">
                  <div class="list-group ">
                  <p>User: <?php echo $_SESSION["username"]?></p>
                   <p>Email: <?php echo $email ?></p>
                   <p>Country: <?php echo $country ?></p>
                   <p>City: <?php echo $city ?></p>
                   <p>Addres: <?php echo $addres ?></p>
                   <p>Pin: <?php echo $pin ?></p>
                   <p>Phone: <?php echo $phone ?></p>            
                                                   
               

                 <p>_______________________________________________________________ </p>
                 

                 <form action="" method="post">

                  <h4>Change Password</h4>
                  <br>
                    <input id="password" name="newpassword" placeholder="New Password" class="form-control here" type="text">
                    <br>
                    <input id="password1" name="newpassword1" placeholder="Confirm Password" class="form-control here" type="text">
                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "usbw";
                    $dbname = "baza";
                    $conn = mysqli_connect($servername, $username, $password, $dbname);
                    if (!$conn) {
                      die("Connection failed: " . mysqli_connect_error());
                    }
                    
                     
                    
                      if($_SESSION["username"] != NULL){
                        $newpassword = md5($_POST["newpassword"]);
                        $confirmnewpassword = md5($_POST['newpassword1']);
                        if($newpassword==$confirmnewpassword){
                            $sql = "UPDATE personal SET password='$newpassword' WHERE username='$profil'";
                            if (mysqli_query($conn, $sql))
                      {
                             echo "Congratulations You have successfully changed your password";
                      }
                              else
                      {
                            echo "The new password and confirm new password fields must be the same";
                           }
                      }
                    }else
                    {
                        echo "no";
                    }
                

                   

                    
                     ?>
                    <br>
                    <button name="submit1" type="submit" class="btn btn-primary">Change Password</button>
                 </form>

             </div>
            </div>
        </div>       
          
      
      
      
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
      
  </body>

  
    
</html>