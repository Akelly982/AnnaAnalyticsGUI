
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
            <button class="dropBtn" id="navSimpleMath"> simple math </button>
            <div class="dropdown-content">
                <!-- <a href="./pages/simpleMath/addition.php">addition</a> -->
                <a href="simpleMath_Addition.php">addition</a>
                <a href="simpleMath_Subtraction.php">subtraction</a>
                <a href="simpleMath_Multiplication.php">multiply</a>
            </div>
        </div>

        <div class="dropdown">
            <button class="dropBtn" id="navUdon"> 饂飩 Udon noodles</button>
            <div class="dropdown-content">
                <a href="assignmentPredictMach1.php" >Persistent AI student Result</a>
                
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