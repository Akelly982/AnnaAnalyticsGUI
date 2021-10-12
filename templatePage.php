<!doctype html>
<html lang="en">

    <head>
        <title>Home</title>
        <meta name="author" content="Aidan Kelly">
        <?php 
            include 'modularContent/head.php';
        ?>
    </head>

    
     

    <body class="akBody">


        <div class="akHeader">   
            <div class="akSiteLogo">
                <h3> Anna analytics </h3>
            </div>
            <div class="akHeaderPageName">
                <p id="activePageName"> Home </p>
            </div>
        </div>

        <div class="akSpacer25"></div>



        <!-- Start for Data Body Splitter -->
        <div class="akBodySplitter">


            <!-- Side Navigation ----------------------- -->
            <!-- --------------------------------------- -->
            <div class="akSideNav">
                <!-- Constants items     -----  ------   -->
                <div class="akSpacer25"></div>
                <div class="akSideNavHomeItem ">
                    <button class="akSideNavHomeBtn" id="NavHomeBtn">
                        <p> Home </p>
                    </button>
                    
                    <!-- It okay to leave the template button here because people should not be here -->
                    <button class='akSideNavHomeBtn' id='NavTemplatePgBtn'>
                            <p> AkTemplate</p>
                    </button>

                </div>

                <div class="akSpacer25"></div>

                <!-- Dynamic Btns ---------------------------------------- -->
                <!------- filled using js in connection to RESTFul api---- -->

                <div id="akSideNavDynamicBtns">  
                    <!-- Dynamic content from the API Goes Here on js load-->
                    <div class="akSideNavItemParent">
                        <Button id="parentId" href="#" class="akParentBtn">I am a nav parent </Button>
                    </div>
                    
                    <div class="akSideNavItemParent">
                        <Button id="parentId" href="#" class="akParentBtn">I am a nav parent </Button>
                        <div class="akNavItemChild">
                            <a href="#">I am a nav child </a>
                        </div>
                        <div class="akNavItemChild">
                            <a href="#">I am a nav child </a>
                        </div>
                        <div class="akNavItemChild">
                            <a href="#">I am a nav child </a>
                        </div>
                    </div>

                </div>
                <div class="akSpacer75"></div>
            </div>




            <!-- Right Display Content View  -->
            <!-- -------------- All items will fall within the akDisplayContainer --------- -->
            <div class="akDisplayContainerOuter">
                    <div class="akDisplayContainer">

                        <div class="akSpacer100">
                            <p class="akCommentSpacer"> ------------------ HOME ----------------</p>
                        </div>


                        <div class="akHomeWelcome">
                            <p> Welcome </p>
                        </div>
                        

                        <h3 class="akTextLeft"> The Moto </h3>
                        <p class="akTextCenter akTextMarginTopMin5"> 
                            "Using Historical data to predict make predictions about future outcomes.."
                        </p>


                        <div class="akSpacer25"></div>


                        <h3 class="akTextCenter"> Brief </h3>
                        <p class="akTextCenter  akTextMarginTopMin5"> Here I have created a graphical user interface(GUI) to be emebeded in the clients learning managment system (LMS). It will use external AI in connection to data sourced from the LMS to predict future probabilities and other analytics. This AI based data will be accessed through an RESTFul api.
                        </p>


                        <h3 class="akTextRight"> Project Origin </h3>
                        <p class="akTextCenter akTextMarginTopMin5"> 
                            This project was put forth by AIT as a final year student project to be run within the Advance studio classes. 
                            
                            <br> This overall is two symesters covering a total of 6 months. The first symester focuses on documention, planning, and presenting the concept. After this the second symester begins which is full a full software development lifecycle (SDLC) which ever you may choose. 
                        </p>
                    


                        <h3 class="akTextLeft"> Our Goal </h3>
                        <p class="akTextLeft akTextMarginTopMin5"> 
                            1) Take something that is seemingly confusing and make it readable. <br><br>
                        
                            2) Create a Functional Good looking GUI for AIT our client. <br><br>

                            3) Lower the barrier to entry for the end user, we are not all programmers or mathematicians. <br><br>

                            4) It must display the resulting analytical informationeffectively and efficiently for the end user to analyse. <br><br>
                        </p>



                        <div class="akSpacer100"></div>


                        <!-- ITEM INPUTS ----------------------- -->
                        <!-- ----------------------------------- -->
                        <div class="akSpacer100">
                            <p class="akCommentSpacer"> ------------------ Input Item's ----------------</p>
                        </div>

                        <p class="akTextLeft"> 
                            ----- Number input field ------ <br>
                            inputItemId: 1 <br>
                            inputDataFields: [ inputId, inputName, inputHint, labelName] <br>
                        </p>
                        
                        <div class="inputItem1And2">
                            <label for="inputId"> labelName </label>
                            <input type="number" id="inputId" name="inputName" placeholder="inputHint" required>
                        </div>


                        <p class="akTextLeft"> 
                            ----- Text input field ------ <br>
                            inputItemId: 2 <br>
                            inputDataFields: [ inputId, inputName, inputHint, labelName] <br>
                        </p>

                        <div class="inputItem1And2">
                            <label for="inputId"> labelName </label>
                            <input type="text" id="inputId" name="inputName" placeholder="inputHint" required>
                        </div>


                        <!-- ITEM INPUTS Submit Button --------- -->
                        <!-- ----------------------------------- -->
                        <div class="akSpacer75"></div>
                        <div class="akSpacer25">
                            <p class="akCommentSpacer"> ------------------ Input Item's Submit button ----------------</p>
                        </div>
                        <p class="akTextLeft"> 
                            Input submit button will have to come with a inline script and acknowledge the ID of each above input within the DOM. <br><br>
                            Foreach Id getElementById <br>
                            AJAX then needs destination URL <>
                        </p>

                        <div class="inputItem1And2">
                            <label for="inputId"> labelName </label>
                            <input type="text" id="inputId" name="inputName" placeholder="inputHint" required>
                        </div>
                        
                        <button id="someId" class="inputItemSubmit">
                            <p>Submit<p>
                        </button>

                        <!-- Button comes with inline js -->
                        <!-- <script>
                            // if button sumeId is pressed 
                            foreach item
                                // let 0 = document.getElementById("inputId");   
                                
                            $.ajax({
                                url:"http://127.0.0.1:5000/itemInput",
                                method:"POST",
                                data : {parentId: parentId, childId: item.childId},  
                                crossDomain: true,
                                success : function(result){  //my result becomes my JSON // ARRAY
                                    if (result.isSuccessfull){
                                        alert(result.whoAmI)
                                        //print to user the inputForm within the displayContainer
                                    }else{
                                        alert(result.errorMsg)
                                        
                                    }
                                },    
                                error: function (jqXhr, textStatus, errorMessage) {
                                    alert('Error' + errorMessage + " " + textStatus + " " + jqXhr);
                                }    
                            });   
                        </script> -->

                    </div>
                
            </div>
        </div>
        <!-- End of Body Splitter------- -->
        <!-- --------------------------- -->
        

        <div class="akSpacer25"></div>



        <div class="akFooter">
            <p> <--- Back to top ---> </p>
        </div>


        <?php 
            include 'modularContent/endOfBodyScripts.php';
        ?>

    </body>

    
    <!-- js scripts -->
    <script src="scripts/templatePage.js"> </scrip>

</html>