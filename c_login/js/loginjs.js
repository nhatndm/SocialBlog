$(document).ready(function(){
        
    /*****************Disable Right-Click*****************/  
    /*function disablercl(){
        $(this).on("contextmenu",function(e){
        return false;
        });
    }*/
    /*****************End Disable Right-Click*****************/ 
    /***************** DISABLE ENTER VALIDATION LOGIN *****************/
    /*function enterlog(){
        $(this).keypress(function(e){
            if(e.which == 13){
                var k=1;
                $("#login .form div input").each(function(){
                    if ($(this).val() ==""){
                        $(this).parent("div").addClass("has-error");
                        k=0;
                    }
                    else{
                        $(this).parent("div").removeClass("has-error");
                    }
                });
                if(k==0){
                    $("#error").show();
                }
                else{
                    $("#error").hide();
                }
                $("#login").submit(); 
            }
        });
    }*/
    /*****************DISABLE END ENTER VALIDATION LOGIN *****************/    
    /*****************VALIDATION LOGIN *****************/        
    function validation(){
        var k=1;
        $("#login #error").hide();
        $("#submit").click(function(event){
            $("#login .form div input").each(function(){
                if ($(this).val() ==""){
                    $(this).parent("div").addClass("has-error");
                    event.preventDefault();
                    k=0;
                }
                else{
                    $(this).parent("div").removeClass("has-error");
                }
            });
            if(k==0){
                $("#login #error").show();
            }
            else{
                $("#login #error").hide();
            }                         
        });            
    }       
    /*****************END VALIDATION LOGIN *****************/   
    /*****************VALIDATION REG *****************/    
    function validationreg(){
       var k=1;
       $("#reg #error").hide(); 
       $("#submitreg").click(function(){
           $("#reg .form div input").each(function(){
                if($(this).val() ==""){
                    $(this).parent("div").addClass("has-error");
                    event.preventDefault();
                    k=0;
                }
                else{
                    $(this).parent("div").removeClass("has-error");
                }
           });
           if(k==0){
                $("#reg #error").show();
            }
            else{
                $("#reg #error").hide();
            } 
       });      
    }      
    /*****************END VALIDATION REG *****************/
    /*****************EXECUTE FUNCTION*****************/
    /*enterlog();*/         //**Execute Enter Login
    /*disablercl();*/       //**Execute Right-Click
    validation();       //**Execute Validation Login
    validationreg();    //**Execute Validation Register
    /*****************END EXECUTE FUNCTION*****************/ 
});

