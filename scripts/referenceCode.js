//--------------  REF -----------------------------------------------------------------
// ---------------------------------------------------------------------

    // just some code from old projects to help me get back in to the swing of js


    var updateUserBtn = document.querySelector("#updateUserDataBtn");
    var firstNameField = document.getElementById("userFirstNameField");

    
    function fillUserDisplay(doc){
        //display image
        userDisplay1Img.setAttribute("style", "background-image: url(userImage/" + doc.data().iconImgPath  +  doc.data().iconImgExt  + ")");
        userDisplay2Img.setAttribute("style", "background-image: url(userImage/" + doc.data().iconImgPath  +  doc.data().iconImgExt  + ")");
    }

    //empty parent grid of current items
    galleryGridParent.innerHTML = "";



    

    function createRestrauntItemByInnerHtml(doc){
        // <!-- The item to be created in JS for every res returned -->
    
        //                                           //## parent is resCont
        // <div class="findResContentItem">          //##this is resContItem div                                             <!-- userImage/tempResImg.png -->
        //     <div class="frImage" style="background-image: url(userImage/tempResImg.png);">
        //     </div>
        //     <div class="frText">                  //##this is resContItemText
        //         <h2>my Restraunt name</h2>
        //         <h4>Cafe: location of my cafe </h4>
        //         <p class="frSummary">Summary of my cafe. lorum ipsum elipsum da ipsum ya lorum ipsum is a ispum of a lorum 
        //         ipsum elipsum da ipsum ya lorum ipsum is a ispum of a lorum
        //         </p>
        //         <button class="frBtn"> Enter </button>
        //     </div>
        // </div>
    
    
        //create item Divs
        let resContItem = document.createElement("div");
        let resContItemText = document.createElement("div");
    
        //setup elements
        resContItem.setAttribute("class","findResContentItem");
        resContItemText.setAttribute("class","frText");
    
        //setup btn
        let detailsPgBtn = document.createElement('button');
        detailsPgBtn.textContent = "Enter";
    
        //append to parent       //must already be connect to parent within the document to add innerHTML
        resCont.append(resContItem); 
        
        //set inner content for    <div class="findResContentItem"> 
        resContItem.innerHTML = '<div class="frImage" style="background-image: url(userImage/'+ doc.data().iconImgPath + doc.data().iconImgExt + ');">' +
                                '</div>';
    
        resContItem.append(resContItemText);
    
        // set inner content for    <div class="frText">  
        resContItemText.innerHTML = '<h2>' +  doc.data().resName + '</h2>' + 
                                        '<h4> Location: ' +  doc.data().street + " " + doc.data().city + " " + doc.data().state + '</h4>' + 
                                        '<p class="frSummary">' +  doc.data().summary +'</p>';
    
        // append btn
        // resContItemText.append(detailsPgBtn);
    
    
    
        //DETAIL PAGE btn----------------------
        //move to detail page
        //uses a sneaky PHP GET 
        // I did this so you can share your resDetail pg's with fellow fellas and shellas
        //----------------------------------------------------
        // detailsPgBtn.addEventListener('click', (event) => {
        //     window.location.href = 'restaurantDetail.php' + "?restaurantName=" + doc.data().resName +"&restaurantId=" + doc.id;
        // })
        //------------------------------------------------------
        // When click the content items go to the detail pages
        resContItem.addEventListener('click', (event) => {
            window.location.href = 'restaurantDetail.php' + "?restaurantName=" + doc.data().resName +"&restaurantId=" + doc.id;
        })
    
    
    }





    // https://api.jquery.com/jQuery.Ajax/

    // // Jquery Ajax HTTP call   
    $("#akButton").click(function(event){
        event.preventDefault();   //prevents code from overlapping on run, if Jquery code already running skip
        // alert("hello i work");

        $.ajax({
            url:"http://127.0.0.1:5000/get/getPage1",
            method:"GET",
            // dataType: "json",
            crossDomain: true,
            success : function(myResult){  //my result becomes my JSON // ARRAY
                //alert(myResult);
                for(var i = 0; i < 5; i++){
                    $("#akPContent").append("<p>"+ myResult.name +"</p>");
                };
                
            },    
            error: function (jqXhr, textStatus, errorMessage) {
                alert('Error' + errorMessage + " " + textStatus + " " + jqXhr);
            }    
        });  

    }); 