<?php


session_start();
$_SESSION["username"] = "";



?>

<!DOCTYPE html>

<html lang="en">
    
  <head>
      
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
        <a class="navbar-brand" href="#">  <img src="upwork.png" height="40px" width="100px"> </a>
          <ul class="nav navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#jumbotron">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost:8080/work/worktab/worktab.php">Jobs</a>
            </li>  
            <li class="nav-item">
              <a class="nav-link" href="http://localhost:8080/work/helptab/helptab.php">Help</a>
            </li>
                     
          </ul>
          
        </nav>

        <div class="jumbotron" id="jumbotron">
          <h1 class="display-4">Find out why are we the best!</h1>
          <p class="text-center"><a href="http://localhost:8080/work/registration/singup.php" class="alert-link">Sign up!</a></p>
          <hr class="m-y-2">
         <h4> <p>Username or password is incorrect, try again!</p></h4>
        
          
          
          
          <a href="http://localhost:8080/work/login/personal.php" class="btn btn-info" role="link">Personal</a>
          <a href="http://localhost:8080/work/login/company.php" class="btn btn-info" role="link">Company</a>

       
        <div id="forgetpw">
            <a href="http://localhost:8080/work/forgetpassword/forget.php">Forget Password</a>
        </div>
        
        </div>
      
      <div class="container">
      
        <div class="row" id="appSummary">
          
            <h1>ALL IN ONE PLACE</h1>
            <p class="lead"> Hire expert for any job.</p>
            
          
          </div>
          
      </div>
      
      <div class="container" id="about">
      <div class="card-deck-wrapper">
  <div class="card-deck">
    <div class="card">
      <img class="card-img-top" src="slika.jpg" alt="image">
      <div class="card-block">
        <h4 class="card-title"><i class="work"></i> Hire expert for any job</h4>
        <p class="card-text">Тhe fastest way to find a professional for any job.</p>
        <button>Click</button>
        
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="images/slika.jpg" alt="image">
      <div class="card-block">
        <h4 class="card-title"><i class="job"></i>Be hired for any job</h4>
        <p class="card-text">The fastest way to find a job.</p>
        <button>Click</button>
        
      </div>
    </div>
    
  </div>
</div>
          </div>
      
      <div id="footer">
      
        <div class="row"  >
          
                <h2>Contact as for info</h2>        
            
            
            <p>info@hireme.com</p>
            
            
          
          </div>
      
      </div>
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
      
  </body>

  
    
</html>