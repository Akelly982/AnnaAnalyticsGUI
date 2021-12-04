<?php
    $pageName = "Assignemnt Predict mach-1"
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

                    <!-- Info board -->
                    <div class="akBackBoard">
                        <h2 class="akTextLeft akTextGreen">Info</h2>
                        <p class="akTextCenter  akTextMarginTopMin5"> Code Module is the Identification code of the module, to which the assessment belongs. </p>
                        <p class="akTextCenter  akTextMarginTopMin5" style="padding-left: 50px; padding-right: 50px;">Code Presentation identification code of the presentation, to which the assessment belongs.It consists of the year and a letter. “B” is for the presentation starting in February and “J” for the presentation starting in October. </p>
                        <div class="rowSpaceEvenly">
                            <div>
                                <h3 class="akTextCenter akTextGreen">Code Module :</h3>
                                <p class="akTextCenter  akTextMarginTopMin5"> DDD </p>
                            </div>
                            <div>
                            <h3 class="akTextCenter akTextGreen">Code Presentation :</h3>
                            <p class="akTextCenter  akTextMarginTopMin5"> 2013B </p>
                            </div>
                        </div>

                    </div>
                    <!-- info board 2 -->
                    <div class="akBackBoard">
                        <div class="rowSpaceEvenlyAlignTop">
                            <div class="akMaxWidth200">
                                <h3 class="akTextCenter akTextGreen">Is male:</h3>
                                <p class="akTextCenter  akTextMarginTopMin5"> 0 for True</p>
                                <p class="akTextCenter  akTextMarginTopMin5"> 1 for False</p>
                            </div>

                            <div class="akMaxWidth200">
                                <h3 class="akTextCenter akTextGreen">Rank highest education:</h3>
                                <p class="akTextCenter  akTextMarginTopMin5"> No Formal quals : 1 </p>
                                <p class="akTextCenter  akTextMarginTopMin5"> Lower Than A Level : 2</p>
                                <p class="akTextCenter  akTextMarginTopMin5"> A Level or Equivalent : 3</p> 
                                <p class="akTextCenter  akTextMarginTopMin5"> HE Qualification : 4</p> 
                                <p class="akTextCenter  akTextMarginTopMin5"> Post Graduate Qualification : 5</p>
                            </div>

                            <div class="akMaxWidth200">
                                <h3 class="akTextCenter akTextGreen">Score assesment xxx:</h3>
                                <p class="akTextCenter  akTextMarginTopMin5  akMaxWidth200"> These are assesment id's leading up to an Exam for a given Code Module and Code Presentation</p>
                            </div>
                        </div>
                        <div class="akSpacer25"></div>
                    </div>

                    <div class="akSpacerOutput">
                        <hr style="width:50%;"/>
                    </div>

                     <!-- Input Form -->
                     <!-- 
                        // Ref data to be sent
                        //  def APM2_AssesmentModel(isMale, rank_highest_education, scoreAss_25334, 
                        //                           scoreAss_25335, scoreAss_25336, scoreAss_25337, 
                        //                           scoreAss_25338, scoreAss_25339):  
                    -->
                    <div class="akBackBoard">
                        <h2 class="akTextLeft akTextGreen">Input</h2>

                        <div class="inputItem">
                            <label for="m"> Is male: </label>
                            <input type="number" id="isMale" name="m" placeholder="0/1" required>
                        </div>
                        
                        <div class="inputItem">
                            <label for="rhe"> rank highest education: </label>
                            <input type="number" id="rank_highest_education" name="rhe" placeholder="1-5" required>
                        </div>

                        <div class="inputItem">
                            <label for="25334"> score assesment 25334: </label>
                            <input type="number" id="scoreAss_25334" name="25334" placeholder="0-100" required>
                        </div>
                        <div class="inputItem">
                            <label for="25335"> score assesment 25335: </label>
                            <input type="number" id="scoreAss_25335" name="25335" placeholder="0-100" required>
                        </div>
                        <div class="inputItem">
                            <label for="25336"> score assesment 25336: </label>
                            <input type="number" id="scoreAss_25336" name="25336" placeholder="0-100" required>
                        </div>
                        <div class="inputItem">
                            <label for="25337"> score assesment 25337: </label>
                            <input type="number" id="scoreAss_25337" name="25337" placeholder="0-100" required>
                        </div>
                        <div class="inputItem">
                            <label for="25338"> score assesment 25338: </label>
                            <input type="number" id="scoreAss_25338" name="25338" placeholder="0-100" required>
                        </div>
                        <div class="inputItem">
                            <label for="25339"> score assesment 25339: </label>
                            <input type="number" id="scoreAss_25339" name="25339" placeholder="0-100" required>
                        </div>
                        <button id="inputSubmit" class="inputItemSubmit"> Submit </button>
                    </div>


                    <!-- Output -->
                    <div class="akSpacerOutput">
                        <hr style="width:50%;"/>
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
    <script src="scripts/assignmentPredictMach2.js"></script>
    

</html>