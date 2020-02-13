 $(document).ready(function(){
      $("#submit").click(function(){
          var username = $("#username").val();
          var email = $("#email").val();
          var address = $("#address").val();
          
          var mobile = $("#mobile").val();
          var age = $("#age").val();
          var spl = $("#spl").val();
          var datastring = 'username1='+ username + '&email1='+ email + '&address1='+ address + '&mobile1='+ mobile + '&age1='+ age + '&spl1='+ spl;
          if(username==''||email==''||mobile==''||spl==''){
              $("#display").html("Please Fill All The Required* Fields!");
          }
          else{
              $.ajax({
                  type: "POST",
                  url: "doctor.php",
                  data: datastring,
                  cache: false,
                  success: function(result){
                      $("#display").html(result);
                      
                  }
              });
          }
          return false;
      });
      });  
    