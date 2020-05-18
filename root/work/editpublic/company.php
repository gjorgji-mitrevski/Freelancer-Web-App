
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
        $oldinfo = "SELECT * FROM company WHERE username='$profil'";
        $result = $conn->query($oldinfo);  
      if ($result->num_rows == 1) {  // output data of each row
        while($row = $result->fetch_assoc()) {
              $name = $row["name"];
              $contact_email = $row["contact_email"];
              $city =$row["city"];
              $phone = $row["phone"];
              $since = $row["since"];
              $sector = $row["sector"];
              $no_employes = $row["no_employes"];
              $website = $row["website"];    
              $cio = $row["cio"]; 
              $publicinfo = $row["short_description"];         
             }
            if($_POST["name"]!=null){ $name = $_POST["name"]; }
            if($_POST["contact_email"]!=null){ $contact_email = $_POST["contact_email"]; }
            if($_POST["city"]!=null){$city =$_POST["city"];}
            if($_POST["phone"]!=null){$phone = $_POST["phone"];}
            if($_POST["since"]!=null){$since = $_POST["since"];}
            if($_POST["no_employes"]!=null){$no_employes = $_POST["no_employes"];}
            if($_POST["website"]!=null){$website = $_POST["website"];}
            if($_POST["cio"]!=null){$cio = $_POST["cio"];}
            if($_POST["sector"]!=null){$sector = $_POST["sector"];}
            if($_POST["publicinfo"]!=null){$publicinfo = $_POST["publicinfo"];
            }
        }
      




    
      //$update = "UPDATE `personal` SET `university` = '$university' WHERE `username` = '$profil'"; 
      $fullupdate = "UPDATE `company` 
      SET 
      `name` = '$name',
      `contact_email`= '$contact_email',
      `city` = '$city',
      `phone` = '$phone',
      `since` ='$since',
      `no_employes` = '$no_employes',
      `website` = '$website',
      `cio` = '$cio',
      `sector` = '$sector',
      `short_description` = '$publicinfo'
       WHERE `username` = '$profil'";
      $conn->query($fullupdate);
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

      $sql = "SELECT * FROM company WHERE username='$profil'";
      $result = $conn->query($sql);                                      
      if ($result->num_rows == 1) {  // output data of each row
          while($row = $result->fetch_assoc()) {
                $name = $row["name"];
                $contact_email = $row["contact_email"];
                $city =$row["city"];
                $since = $row["since"];
                $no_employes = $row["no_employes"];
                $website = $row["website"];
                $cio = $row["cio"];
                $sector = $row["sector"];  
                $phone = $row["phone"];
                $publicinfo = $row["short_description"];               
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
                <b>  <?php echo $profil ?> </b>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  
                  <a class="dropdown-item" href="http://localhost:8080/work">Log out</a>
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
                      <a href="http://localhost:8080/work/editpublic/company.php" class="list-group-item list-group-item-action active ">Edit Public Informations</a>
                      <a href="http://localhost:8080/work/editprivate/company.php" class="list-group-item list-group-item-action">Edit Private Informations</a>
                      
                      
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
                                    <form action="" method="post" > 
                                      <div class="form-group row">
                                      <b>  <label for="companyname" class="col-4 col-form-label">Company Name: </label> 
                                        <div class="col-8">
                                          <input id="name" name="name" placeholder="Company Name" class="form-control here"  type="text">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group row">
                                        <label for="city" class="col-4 col-form-label">City: </label> 
                                        <div class="col-8">
                                          <input id="city" name="city" placeholder="City" class="form-control here" type="text">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="sector" class="col-4 col-form-label">Sector: </label> 
                                        <div class="col-8">
                                          <input id="sector" name="sector" placeholder="Sector" class="form-control here" type="text">
                                        </div>
                                      </div>

                                      <div class="form-group row">
                                        <label for="since" class="col-4 col-form-label">Since: </label> 
                                        <div class="col-8">
                                          <input id="since" name="since" placeholder="Since" class="form-control here" type="text">
                                        </div>
                                      </div>


                                      <div class="form-group row">
                                        <label for="no_employes	" class="col-4 col-form-label">No.Employes: </label> 
                                        <div class="col-8">
                                          <input id="no_employes" name="no_employes" placeholder="No.Employes" class="form-control here"  type="text">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group row">
                                        <label for="website" class="col-4 col-form-label">Website: </label> 
                                        <div class="col-8">
                                          <input id="website" name="website" placeholder="Website" class="form-control here"  type="text">
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="phone" class="col-4 col-form-label">Contact Phone: </label> 
                                        <div class="col-8">
                                          <input id="phone" name="phone" placeholder="Contact Phone" class="form-control here" type="text">
                                        </div>
                                      </div>

                                      <div class="form-group row">
                                        <label for="contact_email" class="col-4 col-form-label">Contact Email: </label> 
                                        <div class="col-8">
                                          <input id="contact_email" name="contact_email" placeholder="Contact Email" class="form-control here" type="text">
                                        </div>
                                      </div>

                                      <div class="form-group row">
                                        <label for="cio" class="col-4 col-form-label">Cio: </label> 
                                        <div class="col-8">
                                          <input id="cio" name="cio" placeholder="Cio" class="form-control here" type="text">
                                        </div>
                                      </div>                                                                      


                                      <div class="form-group row">
                                        <label for="publicinfo" class="col-4 col-form-label">Short Description: </label> 
                                        <div class="col-8">
                                          <textarea id="publicinfo" name="publicinfo" cols="40" rows="4" class="form-control"></textarea>
                                        </div>
                                      </div>
                                      <b>
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
                   <p>Username: <?php echo $profil?></p>
                   <p>Company Name:<?php  echo $name?></p>
                   <p>City: <?php  echo $city?> </p>
                   <p>Sector: <?php  echo $sector?></p>
                   <p>Since: <?php  echo $since?></p>
                   <p>No.Employees <?php  echo $no_employes?> </p>
                   <p>Website: <?php  echo $website?> </p>
                   <p>Contact Email: <?php  echo $contact_email?></p>
                   <p>Contact Phone : <?php  echo $phone?></p>
                   <p>Cio <?php  echo $cio?></p>                   
                   <p>Short Description :<?php  echo $publicinfo?></p>                                
                 </div> 
            </div>
        </div>

        
          
      
      
      
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
      
  </body>

  
    
</html>