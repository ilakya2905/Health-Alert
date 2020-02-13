<html>
<head>
<title>Feedback</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="usersignup.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="feedscript.js" ></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        $("#reset").click(function(){
            $("#form1")[0].reset();
        });
    });
    
    
    
    
    
</script>
    
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
      <a class="nav-item nav-link active" href="http://localhost/blueLine%20Health%20Care/cholestrol.php">Cholestrol<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="http://localhost/blueLine%20Health%20Care/sugar.php">Sugar</a>
      <a class="nav-item nav-link active" href="#">Blood Pressure<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="http://localhost/blueLine%20Health%20Care/doctortable.php">Doctor Details</a>
      <a class="nav-item nav-link" href="http://localhost/blueLine%20Health%20Care/feedback.php">Feedback</a>  
      <a class="nav-item nav-link" href="http://localhost/BlueLine%20Health%20Care/loginIndex.html">Logout</a>
      
    </div>
  </div>
</nav>
    
<div class="wrap">
<form id = "form1">
    
 
 <div class="form-group">
    <label for="formGroupExampleInput">User Name*</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="Name">
  </div>
  <div class="form-group">
      <label for="inputEmail4">Email*</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
    </div>
    
  <div class="form-group">
    <label for="inputAddress">Feedback</label>
      <textarea rows="5" cols="50" class="form-control" id="address" name="address" placeholder="Your FeedBack"></textarea>
  </div>
  
    
 
    <div class="form-row">  
   <button type="submit" class="btn btn-primary col-md-6" id = "submit"    name="submit">Submit</button>
        <button  class="btn btn-primary col-md-6" id = "reset">Clear</button>  </div>
    
    <div id="display"><p></p>
    
    </div> 
    
</form>  
 </div>


    
    
    </body>
</html>