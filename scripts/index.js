$(document).ready(function(){


    // inital DOM connections
    var SideNavBtnContainer = document.getElementById("akSideNavDynamicBtns");
    var DisplayContainer = document.getElementById('displayContainer');
    var ActivePageName = document.getElementById('activePageName');
    
    // This will hold our side navigation buttons and children array
    var sideNavDataArray = null;
    var sideNavActive = null;






    // ----- FUN..ctions ----------------------------------------
    // -----------------------------------------------------------



    function createSideNavChildElement(item,parentId){
        // what we are creating single child element
        //    <div class="akNavItemChild">
        //         <a href="#">I am a nav child </a>
        //     </div>

        let parentCont = document.createElement('div')
        let link = document.createElement('a')

        parentCont.setAttribute('class','akNavItemChild');
        
        link.setAttribute("href",'#');
        link.setAttribute('id', item.childId);
        link.innerHTML = item.childName;

        // Code from when I was changing page with data method POST
        // -----------------------------------------------
        // create hiddenform for child using function
        //let hiddenForm = createHiddenForm(item.childId,parentId) 
        //append hiddenForm to link
        //link.append(hiddenForm);

        //append all to parent
        parentCont.append(link)



        // ---------------------------------------------------------
        // ------------------------------------ PHASE 2 ------------
        // WHAT HAPPENS WHEN U CLICK ON AN CHILD ITEM IN THE NAV
        // ---------------------------------------------------------
        //----------------------------------------------------------

        link.addEventListener('click', (event) => {
            var childTitle = item.childName + " " + item.childId 

            $.ajax({
                url:"http://127.0.0.1:5000/itemInput",
                method:"POST",
                data : {parentId: parentId, childId: item.childId},  
                crossDomain: true,
                success : function(result){  //my result becomes my JSON // ARRAY
                    // console.log(result)
                    // console.log(childTitle)
                    // DisplayContainer.innerHTML = result;
                    // ActivePageName.innerHTML = childTitle
                    if(result.isSuccessfull){
                        DisplayContainer.innerHTML = result.htmlString

                        myScript = document.createElement('script');
                        myScript.innerHTML = result.jsScript;
                        DisplayContainer.append(myScript);

                    }else{
                        DisplayContainer.innerHTML = '<p> error isSuccessfull false </p>'
                    }
                    
                },    
                error: function (jqXhr, textStatus, errorMessage) {
                    alert("RESTful request error ")
                }    
            });


        })

        return parentCont;
    }


    function createSideNavParentElement(item){

        //what we are trying to create
        //Solo parent
        // <div class="akSideNavItemParent">
        //      <button id="parentId" href="#" class="akParentBtn">I am a nav parent </button>
        // </div>

        //Parent with cildren
        // <div class="akSideNavItemParent">
        //     <Button id="parentId" href="#" class="akParentBtn">I am a nav parent </Button>
        //     <div class="akNavItemChild">
        //         <a href="#">I am a nav child </a>
        //     </div>
        //     <div class="akNavItemChild">
        //         <a href="#">I am a nav child </a>
        //     </div>
        //     <div class="akNavItemChild">
        //         <a href="#">I am a nav child </a>
        //     </div>
        // </div>

        let parentCont = document.createElement('div');
        let parentButton = document.createElement('button');

        parentCont.setAttribute('class',"akSideNavItemParent");
        
        parentButton.setAttribute('id', item.parentId);
        parentButton.setAttribute('href', '#');
        parentButton.setAttribute('class',"akParentBtn");
        parentButton.innerHTML = item.parentName;

        //connect parent button (shows at top)
        parentCont.append(parentButton);

        //create and append child items
        item.childData.forEach(childDataItem => {
            let child = createSideNavChildElement(childDataItem,item.parentId);
            parentCont.append(child);
        });

        // once togeather add it to the Container within the page / DOM
        SideNavBtnContainer.append(parentCont);



        //setup its interactins while we have its data
        parentCont.addEventListener('click', (event) => {
            // alert("ParentId: " + item.parentId);    //for testing

            // log who is currently active
            sideNavActive = parent.id;

        })

    }




    //on Load -------------------------------------------------------
    //---------------------------------------------------------------
    //alert("sideNav js loaded");

    // inital load of the sideNav items
    $.ajax({
        url:"http://127.0.0.1:5000/navBtn",
        method:"POST",
        // dataType: "json",
        crossDomain: true,
        success : function(result){  //my result becomes my JSON // ARRAY
            if (result.isSuccessfull){
                sideNavDataArray = result.DataSet;

                // create parent items
                sideNavDataArray.forEach(item => {
                    createSideNavParentElement(item);
                });

            }else{
                alert("Side Nav Btn Error")
            }
            
        },    
        error: function (jqXhr, textStatus, errorMessage) {
            alert('Error' + errorMessage + " " + textStatus + " " + jqXhr);
        }    
    }); 




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