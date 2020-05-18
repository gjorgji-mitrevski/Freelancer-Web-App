
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
              $firstname = $row["firstname"];
              $lastname = $row["lastname"];
              $university =$row["university"];
              $workat = $row["workat"];
              $position = $row["position"];
              $expe = $row["expe"];
              $contact_email = $row["contact_email"];
              $des = $row["description"];              
             }
            if($_POST["name"]!=null){ $firstname = $_POST["name"]; }
            if($_POST["lastname"]!=null){ $lastname = $_POST["lastname"]; }
            if($_POST["university"]!=null){$university =$_POST["university"];}
            if($_POST["work"]!=null){$workat = $_POST["work"];}
            if($_POST["experience"]!=null){$expe = $_POST["experience"];}
            if($_POST["email"]!=null){$contact_email = $_POST["email"];}
            if($_POST["publicinfo"]!=null){$des = $_POST["publicinfo"];}
            if($_POST["position"]!=null){$position = $_POST["position"];}
        }
      




    
      //$update = "UPDATE `personal` SET `university` = '$university' WHERE `username` = '$profil'"; 
      $fullupdate = "UPDATE `personal` 
      SET 
      `firstname` = '$firstname',
      `lastname`=  '$lastname',
      `university` = '$university',
      `workat` = '$workat',
      `position` ='$position',
      `expe` = '$expe',
      `contact_email` = '$contact_email',
      `description` = '$des'
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
              <a class="nav-link" href="http://localhost:8080/work/dashboard/personal.php">Home <span class="sr-only">(current)</span></a>
            </li>
        
            <li class="nav-item dropdown pull-xs-right">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <b>  <?php echo $profil ?> </b>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  
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
                      <a href="http://localhost:8080/work/dashboard/personal.php" class="list-group-item list-group-item-action">Dashboard</a>
                      <a href="http://localhost:8080/work/posts/jobpost.php" class="list-group-item list-group-item-action">Search Jobs</a>
                      <a href="http://localhost:8080/work/post/cv.php" class="list-group-item list-group-item-action">Post CV</a>
                      <a href="http://localhost:8080/work/editpublic/personal.php" class="list-group-item list-group-item-action active">Edit Public Informations</a>
                      <a href="http://localhost:8080/work/editprivate/personal.php" class="list-group-item list-group-item-action">Edit Private Informations</a>

                      
                      
                      
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
                                    <form method="post" action = "">
                                  <b>
                                      <div class="form-group row">
                                        <label for="name" class="col-4 col-form-label">First Name </label> 
                                        <div class="col-8">
                                          <input id="name" name="name" placeholder="First Name" class="form-control here" type="text">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group row">
                                        <label for="lastname" class="col-4 col-form-label">Last Name</label> 
                                        <div class="col-8">
                                          <input id="lastname" name="lastname" placeholder="Last Name" class="form-control here" type="text">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group row">
                                        <label for="university" class="col-4 col-form-label">University</label> 
                                        <div class="col-8">
                                          <input id="university" name="university" placeholder="University" class="form-control here" type="text">
                                        </div>
                                      </div>


                                      <div class="form-group row">
                                        <label for="work" class="col-4 col-form-label"> Work at</label> 
                                        <div class="col-8">
                                          <input id="work" name="work" placeholder="Work at" class="form-control here" type="text">
                                        </div>
                                      </div>

                                      <div class="form-group row">
                                        <label for="position" class="col-4 col-form-label">Position</label> 
                                        <div class="col-8">
                                          <input id="position" name="position" placeholder="Position" class="form-control here" type="text">
                                        </div>
                                      </div>  
                                      
                                      <div class="form-group row">
                                        <label for="experience" class="col-4 col-form-label">Experience</label> 
                                        <div class="col-8">
                                          <input id="experience" name="experience" placeholder="Experience" class="form-control here" type="text">
                                        </div>
                                      </div>    

                                      
                                      <div class="form-group row">
                                        <label for="email" class="col-4 col-form-label">Contact Email</label> 
                                        <div class="col-8">
                                          <input id="email" name="email" placeholder="Email" class="form-control here"  type="text">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group row">
                                        <label for="publicinfo" class="col-4 col-form-label">Short description</label> 
                                        <div class="col-8">
                                          <textarea id="publicinfo" name="publicinfo" cols="40" rows="4" class="form-control"></textarea>
                                        </div>
                                      </div>
    </b>
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
              <div class="col-md-3 ">
                  <div class="list-group ">
                                             
                 </div> 
             </div>
            </div>
        </div>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>    
</html>