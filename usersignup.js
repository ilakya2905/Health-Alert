 $(document).ready(function(){
      $("#submit").click(function(){
          var username = $("#username").val();
          var email = $("#email").val();
          var address = $("#address").val();
          var mobile = $("#mobile").val();
          var age = $("#age").val();
          var password = $("#password").val();
          var cpassword = $("#cpassword").val();
          
          var datastring = 'username1='+ username + '&email1='+ email + '&address1='+ address + '&mobile1='+ mobile + '&age1='+ age + '&password1='+ password + '&cpassword1=' +  cpassword;
          
          if(username==''||email==''||mobile==''||password==''||cpassword==''){
              $("#display").html("Please Fill All The Required* Fields!");
          }
          else if(password!=cpassword){
              $("#display").html("Passwords doesnot match");
          
          }
          else{
              $.ajax({
                  type: "POST",
                  url: "user1.php",
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
    