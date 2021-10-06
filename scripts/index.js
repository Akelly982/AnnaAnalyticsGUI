$(document).ready(function(){

    // inital DOM connections
    var SideNavBtnContainer = document.getElementById("akSideNavDynamicBtns")


    
    // This will hold our side navigation buttons and children array
    var sideNavDataArray = null;
    var sideNavActive = null;




    



    // ----- FUN..ctions ----------------------------------------
    // -----------------------------------------------------------



    function createSideNavChildElement(item){
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

        parentCont.append(link)

        //TODO Create interaction for each child element

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
        item.childData.forEach(item => {
            let child = createSideNavChildElement(item);
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

    // alert("index js loaded");

    // inital load of the nav items
    $.ajax({
        url:"http://127.0.0.1:5000/activeParentBtn",
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
    

    $("#akTestButton").click(function(event){
        event.preventDefault();   //prevents code from overlapping on run, if Jquery code already running skip
        alert("test function");
    }); 








    


    

})