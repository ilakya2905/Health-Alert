<html>
<head>
<title>User Login</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="adminLogin.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
</head>
<body>
    
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4"><img src="pictures/logo.jpg">BlueLine Health Alert</h1>
    <p class="lead">A community in which all people achieve their full potential for health and well-being across the lifespan.  We work to be trusted by patients, a valued partner in the community, and creators of positive change.</p>
  </div>
</div>
<form action="user2.php" method="POST">
<div class="wrap">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">User Mail</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="mail" name="mail" placeholder="Mail ID">
      </div></div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
    </div>
  </div>
    <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" >Sign in</button>
    </div>
  </div>
    <div class="additional">
    <p>Dont have an Account? <a href="http://localhost/BlueLine%20Health%20Care/userSignup.php">Sign In</a></p>
    </div>
</div>
  
</form>

    

</body>


</html>