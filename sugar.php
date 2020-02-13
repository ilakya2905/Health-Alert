<html>
<head>
<title>Cholestrol Reading</title>
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
    
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="http://localhost/BlueLine%20Health%20Care/doctorForm.php">Cholestrol<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="#">Sugar</a>
      <a class="nav-item nav-link active" href="#">Blood Pressure<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="http://localhost/blueLine%20Health%20Care/doctortable.php">Doctor Details</a>
      <a class="nav-item nav-link" href="http://localhost/blueLine%20Health%20Care/feedback.php">Feedback</a>  
      <a class="nav-item nav-link" href="http://localhost/BlueLine%20Health%20Care/loginIndex.html">Logout</a>
      
    </div>
  </div>
</nav>
<form action="sugu.php" method="POST">
<div class="wrap">
  <div class="form-group">
    <label for="formGroupExampleInput">Sugar Level in mmol/mol :</label>
    <input type="text" class="form-control" id="sample" name="sample" placeholder="Example input">
  </div>
    <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" id="submit" name="submit" class="btn btn-primary" >Submit</button>
    </div>
  </div>
</div>
    <div id="display1"><p>hello</p></div> 
</form>

    

</body>


</html>