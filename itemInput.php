<?php
    $parentId = $_POST["parentId"];
    $childId = $_POST["childId"];
?>

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

                        <!-- Testing data transfer -->
                        <!-- <p> <?php echo $parentId ?> </p> -->

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
    <script src="scripts/sideNav.js"> </script>

</html>