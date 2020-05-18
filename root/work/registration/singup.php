
<!DOCTYPE html>

<html lang="en">
    



<head>
      
    <meta charset="utf-8">
      
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
      
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      
      <link rel="stylesheet" href="style.css">

      <link rel="stylesheet" href="script.js" type="javascript">

      <title>Proekt</title>


      

       
      
      
      
  </head>
    
  <body data-spy="scroll" data-target="#navbar" data-offset="150" >
      
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
          </ul>       
        </nav>
        
        <br>
        <br>
        <br>
        <br>


        
        <div class="container" id="choice" >

          <div class="row">
            <div class="col-md-6 col-md-offset-3">

              <button class="btn btn-lg btn-primary btn-block signup-btn" id="personalA" >Personal</button>

            </div>
            <br>
            <br>
            <br>
            <div class="col-md-6 col-md-offset-3">

                <button class="btn btn-lg btn-primary btn-block signup-btn" id="companyA" >Company</button>
  
              </div>


          </div>



        </div>
        

        <div class="container" id="person">
            <div class="row">
              <div class="col-md-6 col-md-offset-3">
                  <form action="personal.php" method="post" accept-charset="utf-8" class="form" role="form">   <legend>Sign Up</legend>
                          <h4>It's free and always will be.</h4>
                          <div class="row">
                              <div class="col-xs-6 col-md-6">
                                  <input  type="text" name="firstname" value="" class="form-control input-lg" placeholder="First Name"  />                        
                                </div>
                                
                                  <div class="col-xs-6 col-md-6">
                                  <input type="text" name="lastname" value="" class="form-control input-lg" placeholder="Last Name"  />                       
                                 </div>
                          </div>
                          <br>
                          <input type="text" name="username" value="" class="form-control input-lg" placeholder="Username"  />
                          <br>  
                          <input type="text" name="email" value="" class="form-control input-lg" placeholder="Your Email"  />
                          <br>
                          <input type="password" name="password" value="" class="form-control input-lg" placeholder="Password"  />
                          <br>
                          <input type="password" name="confirm_password" value="" class="form-control input-lg" placeholder="Confirm Password"  />
                          <br>                          
                        
                          <input type="text" name="pin" value="" class="form-control input-lg" placeholder="Pin"  />                    
                          <br />
                    
                          <button class="btn btn-lg btn-primary btn-block signup-btn"  type="submit">
                              Create my account</button>
                  </form>          
                </div>
              </div>
            </div>
          
                

                 <div class="container" id="company"  >
                  <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <form action="company.php" method="post" accept-charset="utf-8" class="form" role="form">   <legend>Sign Up</legend>
                                <h4>It's free and always will be.</h4>
                               
                                
                                <input type="text" name="username" value="" class="form-control input-lg" placeholder="Username"  />
                                <br>
                                 <input  type="text" name="companyname" value="" class="form-control input-lg" placeholder="Company Name"  />                                                                                                                                                                 
                                <br>  
                                <input type="text" name="companyemail" value="" class="form-control input-lg" placeholder="Company Email"  />
                                <br>
                                <input type="password" name="password" value="" class="form-control input-lg" placeholder="Password"  />
                                <br>
                                <input type="password" name="confirm_password" value="" class="form-control input-lg" placeholder="Confirm Password"  />
                                <br>
                                <input type="text" name="pin" value="" class="form-control input-lg" placeholder="Pin"  />                    
                                <br />                                                 
                                <button class="btn btn-lg btn-primary btn-block signup-btn"  type="submit">
                                    Create my account</button>
                        </form>          
                  </div>
                </div>
              </div>
                
      

      <script>
      
        
        
          document.getElementById("company").style.display = "none"; 
          document.getElementById("person").style.display = "none";  
        
        

       

      document.getElementById("personalA").onclick = function(){         
          
        document.getElementById("person").style.display = "";
        document.getElementById("company").style.display = "none"; 
          
      } 

      document.getElementById("companyA").onclick = function(){
          
          document.getElementById("company").style.display = "";
          document.getElementById("person").style.display = "none";    
      }
      




      </script>
        


  
    
</html>