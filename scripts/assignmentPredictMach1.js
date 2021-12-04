$(document).ready(function(){
    // debug if foud doc
    // alert('doc found');

    //set page as active page
    var activePageItem = document.getElementById('navUdon')
    activePageItem.setAttribute("class","dropBtn navActive");


    //find inputs 
    var num = document.getElementById("assignment1Score");
    //find input btn
    var inputBtn = document.getElementById("inputSubmit");
    // find output container
    var outputContainer = document.getElementById("outputContainer");


    $(inputBtn).click(function(e){
        e.preventDefault();
        //alert("inputSubmit btn hit");

        
        //data validation
        if(num.value.length == 0){
            alert('One or more fields was left empty');
            return
        }
        
        //send data to outputXX   assigmentPredictMach1
        $.ajax({
            url:"http://127.0.0.1:5000/assigmentPredictMach1",
            method:"POST",
            data : { x : num.value },  
            crossDomain: true,
            success : function(result){  //my result becomes my JSON // ARRAY
                if(result.isSuccessfull){
                    outputContainer.innerHTML = result.htmlString;
                }
                
            },    
            error: function (jqXhr, textStatus, errorMessage) {
                console.log("Error AssingmentPredictMach1 input");
            }    
        });  
    });

})