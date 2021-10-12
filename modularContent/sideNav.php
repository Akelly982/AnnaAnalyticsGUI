<!doctype html>
<html lang='en'>

    <!-- Constants items     -----  ------   -->
    <div class="akSpacer25"></div>
    <div class="akSideNavHomeItem ">
        <button class="akSideNavHomeBtn" id="NavHomeBtn">
            <p> Home </p>
        </button>
        
        <!-- TODO -- Hard Coded function set to false when not testing with site or better remove -->
        <?php 
            if(TRUE){
                echo "<button class='akSideNavHomeBtn' id='NavTemplatePgBtn'>
                        <p> AkTemplate</p>
                    </button> ";
            }
        ?>
    </div>



    <div class="akSpacer25"></div>



    
    <!-- Dynamic Btns ---------------------------------------- -->
    <!------- filled using js in connection to RESTFul api---- -->

    <div id="akSideNavDynamicBtns">  
        <!-- Dynamic content from the API Goes Here on js load-->
    </div>
    <div class="akSpacer75"></div>



</html>