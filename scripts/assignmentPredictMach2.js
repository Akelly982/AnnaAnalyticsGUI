$(document).ready(function(){
    // debug if foud doc
    // alert('doc found');

    //set page as active page
    var activePageItem = document.getElementById('navUdon')
    activePageItem.setAttribute("class","dropBtn navActive");





    //find inputs 
    var isMale = document.getElementById("isMale");
    var rank_highest_education = document.getElementById("rank_highest_education");
    var scoreAss_25334 = document.getElementById("scoreAss_25334");
    var scoreAss_25335 = document.getElementById("scoreAss_25335");
    var scoreAss_25336 = document.getElementById("scoreAss_25336");
    var scoreAss_25337 = document.getElementById("scoreAss_25337");
    var scoreAss_25338 = document.getElementById("scoreAss_25338");
    var scoreAss_25339 = document.getElementById("scoreAss_25339");

    //find input btn
    var inputBtn = document.getElementById("inputSubmit");
    // find output container
    var outputContainer = document.getElementById("outputContainer");


    $(inputBtn).click(function(e){
        e.preventDefault();
        //alert("inputSubmit btn hit");

        
        //data validation

        //check field empty  
            // their should be no spaces in field due to being a number field
        if(isMale.value.length == 0 || 
            rank_highest_education.value.length == 0 ||
            scoreAss_25334.value.length == 0 ||
            scoreAss_25335.value.length == 0 ||
            scoreAss_25336.value.length == 0 ||
            scoreAss_25337.value.length == 0 ||
            scoreAss_25338.value.length == 0 ||
            scoreAss_25339.value.length == 0 ){
            alert('One or more fields was left empty');
            return
        }

        //chech is male valid
        let checkPassed = false
        if(isMale.value == 1 || isMale.value == 0){
            checkPassed = true
        }
        if(!checkPassed){
            alert("isMale value is not 0 or 1")
            return
        }

        //check rank highest education valid
            // between 1-5 
        if(rank_highest_education.value > 5){
            alert("rank highest education > 5. This value should be in range 1-5")
            return
        }
        if(rank_highest_education.value < 1){
            alert("rank highest education < 1. This value should be in range 1-5")
            return
        }

        //chech is score value > 100
        if(scoreAss_25334.value > 100 ||
            scoreAss_25335.value > 100  ||
            scoreAss_25336.value > 100  ||
            scoreAss_25337.value > 100  ||
            scoreAss_25338.value > 100  ||
            scoreAss_25339.value > 100 ){

            alert("A score value is > 100")
            return
        }

        //chech is score value < 0
        if(scoreAss_25334.value < 0 ||
            scoreAss_25335.value < 0 ||
            scoreAss_25336.value < 0 ||
            scoreAss_25337.value < 0 ||
            scoreAss_25338.value < 0 ||
            scoreAss_25339.value < 0){

            alert("A score value < 0")
            return
        }
        

        // Ref data to be sent
        //  def APM2_AssesmentModel(isMale, rank_highest_education, scoreAss_25334, 
        //                           scoreAss_25335, scoreAss_25336, scoreAss_25337, 
        //                           scoreAss_25338, scoreAss_25339):

        // Debug Log ---
        // console.log("isMale: " + isMale.value)
        // console.log("rank highest education: " + rank_highest_education.value)
        // console.log("score_25334: " + scoreAss_25334.value)
        // console.log("score_25335: " + scoreAss_25335.value)
        // console.log("score_25336: " + scoreAss_25336.value)
        // console.log("score_25337: " + scoreAss_25337.value)
        // console.log("score_25338: " + scoreAss_25338.value)
        // console.log("score_25339: " + scoreAss_25339.value)

        //send data to outputXX   assigmentPredictMach1
        $.ajax({
            url:"http://127.0.0.1:5000/assigmentPredictMach2",
            method:"POST",
            data : { 'isMale' : isMale.value,
                'rank_highest_education' : rank_highest_education.value,
                'scoreAss_25334' : scoreAss_25334.value,
                'scoreAss_25335' : scoreAss_25335.value,
                'scoreAss_25336' : scoreAss_25336.value,
                'scoreAss_25337' : scoreAss_25337.value,
                'scoreAss_25338' : scoreAss_25338.value,
                'scoreAss_25339' : scoreAss_25339.value,
            },  
            crossDomain: true,
            success : function(result){  //my result becomes my JSON // ARRAY
                if(result.isSuccessfull){
                    outputContainer.innerHTML = result.htmlString;
                }
                
            },    
            error: function (jqXhr, textStatus, errorMessage) {
                console.log("Error AssingmentPredictMach2 input");
            }    
        });  
    });

})