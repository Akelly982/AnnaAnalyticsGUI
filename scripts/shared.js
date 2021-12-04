$(document).ready(function(){








    // ----- FUN..ctions ----------------------------------------
    // -----------------------------------------------------------





    //on Load -------------------------------------------------------
    //---------------------------------------------------------------
    //alert("sideNav js loaded");

    // inital load of the sideNav items
    $.ajax({
        url:"http://127.0.0.1:5000/isAlive",
        method:"POST",
        // dataType: "json",
        crossDomain: true,
        success : function(result){  //my result becomes my JSON // ARRAY
            if (result.isSuccessfull){
               console.log(result.data)
            } 
        }, 
        error: function (jqXhr, textStatus, errorMessage) {
            // alert('Error ' + errorMessage + " " + textStatus + " " + jqXhr);
            alert('Error Connection RESTful api');
        }    
    }); 


    

    //on clicks --------------------------------------------------------
    //------------------------------------------------------------------

    // Home button will essentially just reload the home page
    $("#navHomeBtn").click(function(e){
        e.preventDefault();
        //alert("Home btn clicked");

        //standard change location request
        window.location = "index.php";

    })

    $("#navTemplatePgBtn").click(function(e){
        e.preventDefault();
        //alert("Testing page btn clicked");

        //standard change location request
        window.location = "templatePage.php";
    })
    


    






    


    

})