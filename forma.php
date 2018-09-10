<?php include("db.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>GOLINPG</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <style>
body {
  font-family:mojFont
  padding: 0;
  background-color: #ffa916;
  height: 100vh;
}
#login .container #login-row #login-column #login-box{
  margin-top: 120px;
  margin-bottom: 120px;
  max-width: 600px;
  height: 340px;
  border: 1px solid #af7600;
border-radius: 10px;
  background-color: black;
 
}

#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;

}

#LogoPrijava{
margin-top: 20px;  
     }
    
#labela{
 color: white;
     }

</style>
</head>
<body>

<header>
<nav id="meni" class="navbar-fixed-top navbar">
 <div id="header" class="container-fluid">
     <div class="col-sm-5 col-md-offset-8 " >
         
         <div class="col-md-1"><img class="img-responsive "src="Ikonice-drustvene-mreze/fb.svg" style="height:15px" ></div>
          <div class="col-md-1"><img class="img-responsive" src="Ikonice-drustvene-mreze/instagram.svg" style="height:15px"  ></div>
         <div class="col-md-1"><img class="img-responsive" src="Ikonice-drustvene-mreze/linkedin.svg" style="height:15px"  ></div>
          <div class="col-md-1"><img class="img-responsive" src="Ikonice-drustvene-mreze/twiter.svg" style="height:15px" ></div>
   
     </div>
     
</div>
  <div class="container-fluid">
      <div class="col-md-1 col-md-offset-2">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
      <img src="Logo%20GolinPG.svg"></a>
    </div>
      </div>
      <div id="proba" class="col-md-7">
    <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">HOME</a></li>
        <li><a href="forma.php">ADMIN</a></li>
    </ul>
    </div>
  </div>
</nav>
</header>
<div id="login">
    <a><img id="LogoPrijava" src="Logo%20GolinPG.svg"></a>
        <div class="container center-block">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <a><img id="LogoPrijava" src="Logo%20GolinPG.svg"></a>
                        <form id="login-form" class="form" action="login.php" method="post">
                            <h3 id="labela" class="text-center text-info">Login</h3>
                            <div class="form-group" >
                                <label id="labela"  for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label id="labela" for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password"  id="password" class="form-control">
                                </div>
                        <button type="submit" name="login" class="btn btn-default center-block">Login</button>
          
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include("footer.php") ?>

