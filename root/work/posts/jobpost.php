
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
        die("Connection failed: " . mysqli_connect_error()); }        
        
          
            
      
      

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
              <a class="nav-link" href="http://localhost:8080/work/dashboard/personal.php">Home <span class="sr-only">(current)</span></a>
            </li>
      
            <li class="nav-item dropdown pull-xs-right">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php echo $profil?>
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
                      <a href="http://localhost:8080/work/dashboard/personal.php" class="list-group-item list-group-item-action">Dashboard</a>
                      <a href="#" class="list-group-item list-group-item-action active">Search Jobs</a>
                      <a href="http://localhost:8080/work/post/cv.php" class="list-group-item list-group-item-action ">Post CV</a>
                      <a href="http://localhost:8080/work/editpublic/personal.php" class="list-group-item list-group-item-action ">Edit Public Informations</a>
                      <a href="http://localhost:8080/work/editprivate/personal.php" class="list-group-item list-group-item-action ">Edit Private Informations</a>

                      
                      
                      
                    </div> 
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Jobs</h4>
                                    <hr>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">

          <?php
          
          $select = "SELECT * FROM job";
          $result = $conn->query($select);  
          if ($result->num_rows > 0) {  // output data of each row
          while($row = $result->fetch_assoc()) { 
              $id = $row["id"];             
              $tittle= $row["title"];
              $description  = $row["description"];
              ?>

              <div class="form-group row">                                        
                                  <div class="col-md-12">
                                  <a href="http://localhost:8080/work/read/job.php?id=<?php echo $id?>"><h2><?php echo $tittle ?></h2 ></a>
                                  
                                  <p><?php echo substr($description , 0, 400);echo '';?></p>
                                  <div>
                                    <hr><hr>
                                </div>
                                
                                <br>
                                <br>
                                <?php
                    }
                  }
              ?>

          

                                







                                
                                </div>
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