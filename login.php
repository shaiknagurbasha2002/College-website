<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
           
<style>
    .dropdown:hover>.dropdown-menu {
  display: block;
}
.dropdown-item:hover>.dropdown-menu {
  display: block;
}
ul li{
list-style-type:none;
display: inline;
}

.navbar-nav .nav-link{display:inline-block;}
   
.ml-auto {display:inline-block!important;}

.dropdown>.dropdown-toggle:active {
  pointer-events: none;
}
</style>    
    </head>
    <body>
<div class="container-fluid">
    <header>
        <div class="row " style="background-color:#002E5D">
            <div class="col-sm-3 ">
                <img src="logo.png" width="240px" height="90px"/>
            </div>
            <div class="col-sm-8">
                <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #002E5D">
                   
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              About
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </li>
                         
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Admissions
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </li>
                          <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Academics
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Student Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="create.html">create account</a>
                          <a class="dropdown-item" href="login.html">login account</a>
                          
                        </div>
                      </li>
                        
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Library</a>
                          </li>
                          
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">Contact</a>
                          </li>
                      </ul>
                     
                    </div>
                  </nav>
            </div>
        </div>
    </header>
    <div class="row">
        <div class="col-sm-12" style="height:300px">
    
<?php
$em=$_POST['EMAIL'];
$pwd=$_POST['PASSWORD'];

$con=mysqli_connect("localhost","root","","test");
if(!$con)
{die("connection not established"+mysqli_connect_error());}
else{

$qr="select * from students where email='".$em."' and password ='".$pwd."'";
$row=mysqli_query($con,$qr);
?>
<table border="2px"  class="table">
<thead style="background-color:gray;"><th>sno</th><th>user</th><th>email</th></thead>
<tbody>
<?php
while($data=mysqli_fetch_assoc($row)){
    echo "<a href='logout.html'>Logout</a>";
    echo "<script>d=new Date();d.setMonth(d.getMonth()+1);document.cookie='user=".$data['user'].";expires='+d.toUTCString();</script>";
echo "<tr><td>".$data['sno']."</td><td>".$data['user']."</td><td>".$data['email']."</td></tr>"; 
}
}
?>
</tbody>
</table>
        
    
    </div>
    </div>

    <footer style="background-color:#002E5D;margin-top:15px;">
        <div class="container-sm">
        <div class="row ">
            <div class="col-3 ">
                <img src="logo.png" width="100px" height="100px"/>
            </div>
            
            <div class="col-3 text-light">
                <h4>Admissions
                </h4> 

    <h4>Academic Calendar</h4>                
                <h4>Graduate Program</h4>
                <h4>Tuition & Fees</h4>
                <h4>Admissions Packet</h4>
                <h4>Academic Catalog    </h4>
            </div>
            
            <div class="col-3 text-light">
                <h4>Admissions
                </h4> 

    <h4>Academic Calendar</h4>                
                <h4>Graduate Program</h4>
                <h4>Tuition & Fees</h4>
                <h4>Admissions Packet</h4>
                <h4>Academic Catalog    </h4>            </div>
            
            <div class="col-3 text-light"><h4>Admissions
            </h4> 

<h4>Academic Calendar</h4>                
            <h4>Graduate Program</h4>
            <h4>Tuition & Fees</h4>
            <h4>Admissions Packet</h4>
            <h4>Academic Catalog    </h4>
            </div>
        </div>
        </div>
    </footer>
    </div>