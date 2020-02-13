<html>
<head>
<title>Add Doctor Details</title>    
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="doctorForm.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="doctorscript.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4"><img src="pictures/logo.jpg">BlueLine Health Alert</h1>
    <p class="lead">A community in which all people achieve their full potential for health and well-being across the lifespan.  We work to be trusted by patients, a valued partner in the community, and creators of positive change.</p>
  </div>
</div>   
<div class="summa">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="http://localhost/BlueLine%20Health%20Care/doctorForm.php">Update Doctor<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="http://localhost/blueLine%20Health%20Care/userdetails.php">User Details</a>
      <a class="nav-item nav-link active" href="http://localhost/blueLine%20Health%20Care/userfeedback.php">User Feedback<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="http://localhost/blueLine%20Health%20Care/doctortable.php">Doctor Details</a>
      <a class="nav-item nav-link" href="http://localhost/BlueLine%20Health%20Care/loginIndex.html">Logout</a>
      
    </div>
  </div>
    </nav></div>
     
    
<table class="content-table" >
    <thead>
    <tr>
        
        <th>User Name   </th>
        <th>email ID             </th>
        <th>Address              </th>
        <th>Mobile Number  </th>
        <th>Age  </th>
        
        
        </tr></thead>
    <tbody>
    <?php
        $conn = mysqli_connect("localhost","root","","doctormodule");
        if($conn-> connect_error){
            die("Connection Failed:".$conn-> connect_error);
        }
        $sql = "SELECT id, username, email, address, mobile, age from users1";
        $result = $conn-> query($sql);
        
        if ($result-> num_rows > 0){
            while ($row = $result-> fetch_assoc()) {
                echo "<tr><td>". $row["username"]."</td><td>". $row["email"]."</td><td>". $row["address"]."</td><td>". $row["mobile"]."</td><td>". $row["age"]."</td><td>"; 
            }
            echo "</table>";
        }
        else {
            echo " 0 result";
        }
        $conn-> close();
    ?></tbody></table>
    </body></html>