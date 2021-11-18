
<?php
    $showTemplatePage = false;
?>


<!doctype html>
<html lang='en'>


    <!-- Constants items     -----  ------   -->

    <div class="akSpacer25"></div>

    <div class="akSideNavConstItem ">
        
        <button class="akSideNavHomeBtn" id="NavHomeBtn">
            <p> Home </p>
        </button>
        
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
            <button class="dropBtn" id="NavHomeBtn"> sample </button>
            <div class="dropdown-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </div>


        <div class="akSpacer25"></div>
        <hr style="width:80%">
        <div class="akSpacer25"></div>
    </div>

    <div class="akSpacer25"></div>     


    <!-- Dynamic Btns ---------------------------------------- -->
    <!------- filled using js in connection to RESTFul api---- -->

    <div id="akSideNavDynamicBtns">  
        <!-- Dynamic content from the API Goes Here on js load-->
    </div>

    <div class="akSpacer75"></div>



</html>