<html>
<head>
<title>User SignUp</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="usersignup.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="usersignup.js" ></script>

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
    <h1 class="display-4"><img src="pictures/logo.jpg">BlueLine Health Care</h1>
    <p class="lead">A community in which all people achieve their full potential for health and well-being across the lifespan.  We work to be trusted by patients, a valued partner in the community, and creators of positive change.</p>
  </div>
</div>
    
<div class="wrap">
<form id = "form1">
    
    <div class="form-row"> 
 <div class="form-group col-md-6">
    <label for="formGroupExampleInput">User Name*</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="Name">
  </div>
  <div class="form-group col-md-6">
      <label for="inputEmail4">Email*</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
    </div>
    </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="Address">
  </div>
  
    
 <fieldset class="form-group ">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gen1" id="gen1" value="option1" checked>
          <label class="form-check-label" for="gridRadios1">
            Male
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gen1" id="gen2" value="option2">
          <label class="form-check-label" for="gridRadios2">
            Female
          </label>
        </div>
        
      </div>
    </div>
  </fieldset>
 <div class="form-row">
    <div class="form-group col-md-6">
    <label for="inputAddress2">Mobile Number*</label>
    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="(+91) 78XXXXXXX09">
  </div>
  
    
<div class="form-group col-md-6">
    <label for="inputAddress">Age</label>
    <input type="text" class="form-control" id="age" name="age" placeholder="Age">
  </div>
  </div>
     <div class="form-row">  
<div class="form-group col-md-6">
      <label for="inputPassword4">Password*</label>
      <input type="password" class="form-control" id="password" placeholder="Password">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Confirm Password*</label>
      <input type="password" class="form-control" id="cpassword" placeholder="Password">
         </div></div>
    <div class="form-row">  
   <button type="submit" class="btn btn-primary col-md-6" id = "submit"    name="submit">Submit</button>
        <button  class="btn btn-primary col-md-6" id = "reset">Clear</button>  </div>
    <div class="additional">
    <p>Already have an Account? <a href="userlogin.php">Login IN</a></p>
    </div>
    <div id="display"><p></p>
    
    </div> 
    
</form>  
 </div>


    
    
    </body>
</html>