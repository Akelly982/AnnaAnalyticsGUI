<?php
    $pageName = "Default Page"
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
                    <!-- ======================= -->

                     <!-- Input Form -->


                     <!-- Output Form -->
                    

                    <!-- ===================== -->
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
    <!-- <script src="scripts/myJSxxxx.js"></script> -->

</html>