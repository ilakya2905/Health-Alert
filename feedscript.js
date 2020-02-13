 $(document).ready(function(){
      $("#submit").click(function(){
          var username = $("#username").val();
          var email = $("#email").val();
          var address = $("#address").val();
          
          
          var datastring = 'username1='+ username + '&email1='+ email + '&address1='+ address;
          
          if(username==''||email==''||address==''){
              $("#display").html("Please Fill All The Required* Fields!");
          }
          else{
              $.ajax({
                  type: "POST",
                  url: "feedphp.php",
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
    