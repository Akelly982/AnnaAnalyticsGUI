
<?php
    $showTemplatePage = false;
    $showDynamicLinks = false;
?>


<!doctype html>
<html lang='en'>


    <!-- Constants items     -----  ------   -->

    <div class="akSpacer25"></div>

    <div class="akSideNavConstItem ">
        
        <div class="dropdown">
            <button class="dropBtn" id="navHomeBtn"> Home </button>
        </div>
        
        <!-- TODO -- Hard Coded function set to false when not testing with site or better remove -->
        <?php 
            if($showTemplatePage){
                echo "<button class='akSideNavTemplateBtn' id='NavTemplatePgBtn'>
                        <p> AkTemplate</p>
                    </button> ";
            }
        ?>

        <div class="akSpacer25"></div>
        <hr style="width:80%">
        <div class="akSpacer25"></div>

        <div class="dropdown">
            <button class="dropBtn" id="navSimpleMath"> Simple math </button>
            <div class="dropdown-content">
                <!-- <a href="./pages/simpleMath/addition.php">addition</a> -->
                <a href="simpleMath_Addition.php">Addition</a>
                <a href="simpleMath_Subtraction.php">Subtraction</a>
                <a href="simpleMath_Multiplication.php">Multiply</a>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropBtn" id="navUdon"> APM assignment prediction model </button>
            <div class="dropdown-content">
                <a href="APM_Mach1.php" >APM Mach_1 Ak_DataSet</a>
                <a href="APM_Mach2.php" >APM Mach_2 AIT_DataSet</a>
                
            </div>
        </div>

    </div>



    <?php 
        if($showDynamicLinks){
            echo '<div class="akSpacer25"></div>
            <hr style="width:80%">
            <div class="akSpacer25"></div>   
        
            <!-- Dynamic Btns ---------------------------------------- -->
            <!------- filled using js in connection to RESTFul api---- -->
        
            <div id="akSideNavDynamicBtns">  
                <!-- Dynamic content from the API Goes Here on js load-->
            </div>

            <div class="akSpacer75"></div>';
        }else{
            echo '<div class="akSpacer75"></div>'; 
        }
    ?>


</html>