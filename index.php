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

        <div class="akBodySplitter">


            <div class="akSideNav">
                <!-- Constants items     -----  ------   -->
                <div class="akSiteLogo">
                    <h3> Anna analytics </h3>
                </div>

                <div class="akSpacer25"></div>

                <div class="akSideNavHomeItem ">
                    <button class="akSideNavHomeBtn" id="NavHomeBtn">
                        <p> Home </p>
                    </button>
                </div>

                <div class="akSpacer25"></div>



                <!-- Btns ---------------------------------------- -->
                <!-- --------------------------------------------- -->

                
                <div id="akSideNavDynamicBtns">  
                <!-- Dynamic content from the API Goes Here on js load-->

                </div>

                <div class="akSpacer75"></div>

            </div>


            <!-- Right Content View  -->
            <div class="akRightContainer">
                    <div class="akActivePageHeader">
                        <p> Home </p>
                    </div>
                    <div class="akRightContainerInner">
                        <div class="akSpacer100"></div>
                        <h1>Welcome</h1>
                    </div>
                
            </div>
        </div>

        


        <?php 
            include 'modularContent/endOfBodyScripts.php';
        ?>

    </body>

    <footer class="akFooter">
        <?php 
            include 'modularContent/footer.php';
        ?>
    </footer>

     <!-- Current page JS -->
    <script src="scripts/index.js"> </script>

</html>