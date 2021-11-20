<?php
    $pageName = "Simple Math Subtraction"
?>

<!doctype html>
<html lang="en">

    <head>
        <title>Simple</title>
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

            <!-- navigation elements -->
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
                    <div class="akBackBoard">
                        <h2 class="akTextLeft akTextGreen">Input</h2>
                        <div class="inputItem">
                            <label for="num1"> Number 1 </label>
                            <input type="number" id="num1" name="num1" placeholder="27" required>
                        </div>
                        <div class="inputItem">
                            <label for="num2"> Number 2 </label>
                            <input type="number" id="num2" name="num2" placeholder="10" required>
                        </div>
                        <button id="inputSubmit" class="inputItemSubmit"> Submit </button>
                    </div>
                    
                    <!-- Output -->
                    <div class="akSpacerOutput">
                        <hr style="width:50%; margin-bottom: 20px;"/>
                    </div>
                    <div id="outputContainer" class="outputCont">
                        <!-- fill with returned data  -->
                        <div class="akBackBoard">
                            <h2 class="akTextLeft akTextRed">Output</h2>
                            <p class="akTextCenter"> On input submit output data will be displayed here </p>
                        </div>
                    </div>

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
    <script src="scripts/simpleMathSubtraction.js"></script>
    

</html>