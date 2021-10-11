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
                <?php 
                    include "modularContent/sideNav.php"
                ?>
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

    <!-- js scripts -->
    <script src="scripts/sideNav.js"> </script>
    

</html>