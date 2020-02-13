 $(document).ready(function(){
      $("#submit").click(function(){
          var cholestrol = $("#sample").val();
         
          if(cholestrol==''){
              $("#display").html("Please Fill All The Required* Fields!");
          }
          
          else if(cholestrol<=200){
              function(result){
                   $("#display1").html("Result: High Cholestrol Level. ");
                    $('#display1').html('<a href="http://www.google.com">Google</a>');
                     
                      
                  }
             
          }
          return false;
      });
      });  
    