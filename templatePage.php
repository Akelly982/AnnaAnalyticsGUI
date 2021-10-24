<!doctype html>
<html lang="en">

    <head>
        <title>Home</title>
        <meta name="author" content="Aidan Kelly">
        <?php 
            include 'modularContent/head.php';
        ?>
    </head>

    <!-- This normally loads in last on the actural page but here i load it first due to dynamic content -->
    <!-- Their are inline scripts on the test page which need Jquery to work otherwise i would have to write them in base JS -->
    <?php 
        include 'modularContent/endOfBodyScripts.php';
    ?>
     

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
                        

                        <!-- ITEM INPUT 1A ----------------------- -->
                        <!-- ------------------------------------- -->

                        <p class="akTextLeft"> 
                            ----- input1A  ( simple maths addition) ------ <br>
                            send: num1 + num2 to output1A
                        </p>

                        <!-- 1A notes end ------------------------ -->
                        
                        <div class="inputItem">
                            <label for="num1"> Number 1 </label>
                            <input type="number" id="num1" name="num1" placeholder="value 1" required>
                        </div>

                        <div class="inputItem">
                            <label for="num2"> Number 2 </label>
                            <input type="number" id="num2" name="num2" placeholder="value 2" required>
                        </div>
                        
                        <button id="inputSubmit" class="inputItemSubmit"> Submit </button>

                        <!-- output for template page only (proper page empty and fill display container) -->
                        
                        <div class="akSpacerInputOutput">
                            <p class="akTextCenter"> -------------------------------------  </p>
                        </div>
                        
                        <div id="outputContainer" class=outputCont>
                            <!-- fill with returned data  -->
                            <p class="akTextCenter"> On input data sent results will be displayed here </p>
                        </div>


                        <!-- Button comes with inline js -->
                        <script>

                            $("#inputSubmit").click(function(e){
                                e.preventDefault();
                                //alert("inputSubmit btn hit");
                                
                                // find output container
                                var outputContainer = document.getElementById("outputContainer");
                                
                                //find inputs 
                                var num1 = document.getElementById("num1")
                                var num2 = document.getElementById("num2")
                                
                                //data validation
                                if(num1.value.length == 0 || num2.value.length == 0){
                                    alert('One or more fields was left empty');
                                    return
                                }

                                // let childId = document.getElementById("activeChildId").value;
                                // console.log("found child id: " + childId.toString())

                                //send data to outputXX
                                $.ajax({
                                    url:"http://127.0.0.1:5000/itemOutput1A",
                                    method:"POST",
                                    data : { childId : '1A' , x : num1.value , y : num2.value},  
                                    crossDomain: true,
                                    success : function(result){  //my result becomes my JSON // ARRAY
                                        console.log('Success 1A Input');
                                        outputContainer.innerHTML = " temp data ";
                                        
                                    },    
                                    error: function (jqXhr, textStatus, errorMessage) {
                                        console.log("Error 1A input");
                                    }    
                                });  
                            });

                        </script>

                        <!-- template display of output result for 1A -->
                        <div class="outputCont">
                            <div class="outputRow">
                                <p> Result: </p>
                                <p class="akTextCenter"> 99 </p>
                            </div>
                        </div>

                        <!-- ITEM INPUT 1A ----------------------- -->
                        <!-- ------------------------------------- -->

                        


                    
                    </div>
                    <!-- end display container -->
                
            </div>
        </div>
        <!-- End of Body Splitter------- -->
        <!-- --------------------------- -->
        

        <div class="akSpacer25"></div>



        <div class="akFooter">
            <p> <--- Back to top ---> </p>
        </div>


        

    </body>


    <!-- js scripts -->
    <script src="scripts/templatePage.js"></script>


</html>


