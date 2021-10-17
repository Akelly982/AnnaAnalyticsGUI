$(document).ready(function(){


    


    //on Load -------------------------------------------------------
    //---------------------------------------------------------------
    //alert("templatePage js loaded");




    //on clicks --------------------------------------------------------
    //------------------------------------------------------------------

    // Home button will essentially just reload the home page
    $("#NavHomeBtn").click(function(e){
        e.preventDefault();
        //alert("Home btn clicked");

        //standard change location request
        window.location = "index.php";

    })

    $("#NavTemplatePgBtn").click(function(e){
        e.preventDefault();
        //alert("Testing page btn clicked");

        //standard change location request
        window.location = "templatePage.php";
    })
    



})