$(document).ready(function(){

    //set page as active page
    var activePageItem = document.getElementById('navSimpleMath')
    activePageItem.setAttribute("class","dropBtn navActive");

    //find inputs 
    var num1 = document.getElementById("num1")
    var num2 = document.getElementById("num2")
    //find input btn
    var inputBtn = document.getElementById("inputSubmit")
    // find output container
    var outputContainer = document.getElementById("outputContainer");


    $(inputBtn).click(function(e){
        e.preventDefault();
        //alert("inputSubmit btn hit");

        
        //data validation
        if(num1.value.length == 0 || num2.value.length == 0){
            alert('One or more fields was left empty');
            return
        }
        
        //send data to outputXX
        $.ajax({
            url:"http://127.0.0.1:5000/itemOutput1C",
            method:"POST",
            data : { x : num1.value , y : num2.value},  
            crossDomain: true,
            success : function(result){  //my result becomes my JSON // ARRAY
                if(result.isSuccessfull){
                    outputContainer.innerHTML = result.htmlString;
                }
                
            },    
            error: function (jqXhr, textStatus, errorMessage) {
                console.log("Error 1C input");
            }    
        });  
    });

})