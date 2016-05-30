$(document).ready(function(){
    
    $(window).resize(function(){
        if($(document).width() > 870)
        {
            $("#widget").show();
        }
        else
        {
            $("#widget").hide();
        }
    });
    
    $("#profile").hide();
    //**Disable Right-Click Function
    $(this).on("contextmenu",function(e){
        return true;
    });
       
    $("#widget").click(function(){
        $("#profile").fadeIn(300);
        e.preventDefault();
    });
     
    $(".close").click(function(){
        $("#profile").fadeOut(300);
        e.preventDefault();
    });   
});
 