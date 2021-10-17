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

            <div class="akSideNav">
                <?php 
                    include "modularContent/sideNav.php"
                ?>
            </div>


            <!-- Right Display Content View  -->
            <div class="akDisplayContainerOuter">
                    <div class="akDisplayContainer" id="displayContainer">

                        <div class="akSpacer100"></div>


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

                    </div>
                
            </div>
        </div>
        <!-- End of Body Splitter -->
        

        <div class="akSpacer25"></div>



        <div class="akFooter">
            <p> <--- Back to top ---> </p>
        </div>

           
        
        <?php 
                include 'modularContent/endOfBodyScripts.php';
        ?>

    </body>

    
    <!-- js scripts -->
    <script src="scripts/index.js"></script>
    

</html>