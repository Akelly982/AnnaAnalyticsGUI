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
                <Button id="akTestButton"> Testing </Button>

                <div class="akSpacer75"></div>

                


                <!-- Btns    ----     -----     ----      -----    -->
                <!-- --------------------------------------------- -->
                <div id="akSideNavDynamicBtns">
                    <div class="akSideNavItemParent">
                        <Button id="parentId" href="#" class="akParentBtn">I am a nav parent </Button>
                    </div>
                    
                    <div class="akSideNavItemParent">
                        <Button id="parentId" href="#" class="akParentBtn">I am a nav parent </Button>
                        <div class="akNavItemChild">
                            <a href="#">I am a nav child </a>
                        </div>
                        <div class="akNavItemChild">
                            <a href="#">I am a nav child </a>
                        </div>
                        <div class="akNavItemChild">
                            <a href="#">I am a nav child </a>
                        </div>
                    </div>

                    <div class="akSideNavItemParent">
                        <div>
                            <a id="parentId" href="#">I am a nav parent </a>
                        </div>
                    </div>
                </div>
                

                <div class="akSpacer75"></div>

            </div>


            <div class="akRightContainer">
                
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
    <script src="scripts/testingPage.js"> </script>

</html>