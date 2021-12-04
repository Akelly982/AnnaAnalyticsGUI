<?php
    $pageName = "Home"
?>


<!doctype html>
<html lang="en">

    <head>
        <title> <?php echo $pageName ?> </title>
        <meta name="author" content="Aidan Kelly">
        <!-- AK Styles  -->
        <link rel="styleSheet" href="akStyle.css">
        <?php 
            include 'modularContent/head.php';
        ?>
    </head>


    <body class="akBody">
        
        <div class="akTopBar">   
                <div class="akSiteLogo">
                    <h3> ANNA simply analytics  </h3>
                </div>
                <div class="akTopBarPageName">
                    <p id="activePageName"> <?php echo $pageName ?> </p>
                    <p class="akTopBarColonSplitter">:</p>
                    <p id="activeUser">Username</p>
                </div>
        </div>
        <div class="akTopBarOpacity"></div>

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
                    <!-- display container start -->
                    <div class="akBackBoard">
                        <h1 class="akTextCenter akHomeWelcome akTextGreen">Welcome</h1>
                        <h3 class="akTextCenter akTextMarginTopMin5"> 
                            "Using Historical data to make predictions about future outcomes.."
                        </h3>
                    </div>

                    <div class="akSpacer25"></div>
                    
                    <div class="akBackBoard">
                        <div class=akHomeHeroHalf>

                        </div>
                    </div>

                    <div class="akSpacer25"></div>

                    <div class="akBackBoard">
                        <h3 class="akTextLeft akTextGreen"> Brief </h3>
                        <p class="akTextCenter  akTextMarginTopMin5"> Here I have created a graphical user interface(GUI) to be emebeded in the clients learning managment system (LMS). It will use external AI in connection to data sourced from the LMS to predict future probabilities and other analytics. This AI based data will be accessed through an RESTFul api.
                        </p>
                    </div>

                    <div class="akBackBoard">
                        <h3 class="akTextRight akTextGreen"> Project Origin </h3>
                        <p class="akTextCenter akTextMarginTopMin5"> 
                            This project was put forth by AIT as a final year student project to be run within the Advance studio classes. 
                            
                            <br> This overall is two symesters covering a total of 6 months. The first symester focuses on documention, planning, and presenting the concept. After this the second symester begins which is full a full software development lifecycle (SDLC) which ever you may choose. 
                        </p>
                    </div>

                    <div class="akBackBoard">
                        <h3 class="akTextLeft akTextGreen"> Our Goal </h3>
                        <p class="akTextLeft akTextMarginTopMin5"> 
                            1) Take something that is seemingly confusing and make it readable. <br><br>
                        
                            2) Create a Functional Good looking GUI for AIT our client. <br><br>

                            3) Lower the barrier to entry for the end user, we are not all programmers or mathematicians. <br><br>

                            4) It must display the resulting analytical informationeffectively and efficiently for the end user to analyse. <br><br>
                        </p>
                    </div>

                    <div class="akSpacer100"></div>
                    <!-- display container end -->
                </div>
            </div>
        </div>
        <!-- End of Body Splitter -->
        

        <div class="akSpacer25"></div>

           
        
        <?php 
                include 'modularContent/endOfBodyScripts.php';
        ?>

    </body>
    
    <!-- js scripts -->
    <script src="scripts/home.js"></script>

</html>