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

                <div class="akSideNavItem">
                    <p> Home </p>
                </div>
                <div class="akSideNavItem">
                    <div class="d-grid gap-2">
                        <button class="btn btn-secondary" type="button">Home</button>
                    </div>
                </div>

                <Button id="akTestButton"> Testing </Button>

                <!-- Functions    ----     -----     ----      -----    -->

                <div class="akSideNavItem">
                    <div>
                        <a id="" href="#">I am a nav parent </a>
                    </div>
                </div>
                
                <div class="akSideNavItem">
                    <div>
                        <a id="" href="#">I am a nav parent </a>
                    </div>
                    <div class="akNavItemChild">
                        <a class="akNavItemChildText" href="#">I am a nav child </a>
                    </div>
                    <div class="akNavItemChild">
                        <a href="#">I am a nav child </a>
                    </div>
                    <div class="akNavItemChild">
                        <a class="akNavItemChildText" href="#">I am a nav child </a>
                    </div>
                </div>

                <div class="akSideNavItemV2">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            CPA101
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>

                <div class="akSideNavItemV2">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Advanced Studio 2 ADVSTD102s
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
            
            </div>


            <div class="akRightContainer">
                
            </div>
        </div>


        <!-- Side Nav v2 --------------------------------------------- -->
        <!-- ---------------------------------------------------------- -->

        <div class=akSpacer75></div>

        <div class="akBodySplitter">

            <div class="akSideNav">


                <!-- Constants items     -----  ------   -->
                <div class="container">
                    <!-- Logo and Title -->
                    <div class="row justify-content-center">   
                        <div class="akSiteLogo">
                            <h3> Anna analytics </h3>
                        </div>
                    </div>
                    
                    <div class="akSpacer25"> </div>

                    <!-- Home btn -->
                    <div class="row justify-content-center">   
                        <div class="col-md-10 align-self-center">
                            <div class="d-grid">
                                <button class="btn btn-secondary" type="button">Home</button>
                            </div>
                        </div>
                    </div>

                    <div class="akSpacer75"> </div>
                </div>

                <!-- Dynamic content     -----  ------   -->
                <div class="container">

                    <!-- Home btn -->
                    <div class="row justify-content-center">   

                        <div class="col-md-10 align-self-center akBkg">   
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Advanced Studio 2 ADVSTD102s
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>

            
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
    <script src="scripts/index.js"> </script>

</html>