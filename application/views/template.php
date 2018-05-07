<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--<meta http-equiv="x-ua-compatible" content="ie=edge">-->
        <title>Adventurer – One Page Creative HTML5 Page Template</title>
        <!-- Font Awesome -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800,600,300,300italic,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
        <!-- Material Design Bootstrap -->
        <link href="assets/css/materialize.css" rel="stylesheet">
        <!-- Magnific-popup css -->
        <link href="assets/css/magnific-popup.css" rel="stylesheet">
        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <!--<link href="css/progressbar.css" rel="stylesheet">-->
        <!-- Material Design Bootstrap -->
        <link href="assets/css/mdb.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/responsive.css" rel="stylesheet">
    </head>

    <body data-spy="scroll" data-target=".navbar-desktop" id="<?= $halaman ?>">
        <!-- Start your project here-->
        <!--Navbar-->
        <div id="header">
            <a href="<?= base_url() ?>" title="Home"><h1>Aplikasi Perpustakaan Pelita</h1></a>
        </div>
        <div class="navbar-desktop-wrapper">
            <div id="navbar">
                <?php $this->load->view('navbar') ?>
            </div>
            <!--<div id="content">
               
                   
                <?php $this->load->view($main_view) ?>
           </div>
            -->
         
           
        </div>
        
        
        <!--/.Navbar-->


        

      

        <section id="team" class="team">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="main_team_area m-y-3">
                            <div class="head_title center  wow fadeInUp">
                                <h2>Meet Our Team</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec odio ipsum. Suspendisse
                                    cursus malesuada facilisis.Lorem ipsum dolor sit amet, consectetur facilisis.</p>
                            </div>

                            <div class="main_team_content center">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="single_team white-text m-t-2 wow zoomIn">
                                            <img src="assets/img/team1.jpg" alt="team" />
                                            <div class="single_team_overlay">
                                                <h4>Mahabubul Islam</h4>
                                                <p>Html-Coder</p>
                                                <div class="team_socail">
                                                    <a href="#!"><i class="fa fa-facebook"></i></a>
                                                    <a href="#!"><i class="fa fa-twitter"></i></a>
                                                    <a href="#!"><i class="fa fa-pinterest-p"></i></a>
                                                    <a href="#!"><i class="fa fa-dribbble"></i></a>
                                                    <a href="#!"><i class="fa fa-behance"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="single_team white-text m-t-2 wow zoomIn">
                                            <img src="assets/img/team2.jpg" alt="team" />
                                            <div class="single_team_overlay">
                                                <h4>Mahabubul Islam</h4>
                                                <p>Html-Coder</p>
                                                <div class="team_socail">
                                                    <a href="#!"><i class="fa fa-facebook"></i></a>
                                                    <a href="#!"><i class="fa fa-twitter"></i></a>
                                                    <a href="#!"><i class="fa fa-pinterest-p"></i></a>
                                                    <a href="#!"><i class="fa fa-dribbble"></i></a>
                                                    <a href="#!"><i class="fa fa-behance"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="single_team white-text m-t-2 wow zoomIn">
                                            <img src="assets/img/team3.jpg" alt="team" />
                                            <div class="single_team_overlay">
                                                <h4>Mahabubul Islam</h4>
                                                <p>Html-Coder</p>
                                                <div class="team_socail">
                                                    <a href="#!"><i class="fa fa-facebook"></i></a>
                                                    <a href="#!"><i class="fa fa-twitter"></i></a>
                                                    <a href="#!"><i class="fa fa-pinterest-p"></i></a>
                                                    <a href="#!"><i class="fa fa-dribbble"></i></a>
                                                    <a href="#!"><i class="fa fa-behance"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="single_team white-text m-t-2 wow zoomIn">
                                            <img src="assets/img/team4.jpg" alt="team" />
                                            <div class="single_team_overlay">
                                                <h4>Mahabubul Islam</h4>
                                                <p>Html-Coder</p>
                                                <div class="team_socail">
                                                    <a href="#!"><i class="fa fa-facebook"></i></a>
                                                    <a href="#!"><i class="fa fa-twitter"></i></a>
                                                    <a href="#!"><i class="fa fa-pinterest-p"></i></a>
                                                    <a href="#!"><i class="fa fa-dribbble"></i></a>
                                                    <a href="#!"><i class="fa fa-behance"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End of col-sm-3 -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
        </section><!-- End of Team section -->

<!--Footer-->
        <div id="footer-wrapper">
            <div id="footer">
            <?php $this->load->view('footer') ?>
            </div>
        </div>
<!--end of footer-->

        <!-- SCRIPTS -->

        <!-- JQuery -->
        <script type="text/javascript" src="assets/js/jquery-2.2.3.min.js"></script>

        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="assets/js/tether.min.js"></script>


        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="assets/js/mdb.min.js"></script>

        <!-- Wow js -->
        <script type="text/javascript" src="assets/js/wow.min.js"></script>

        <!-- Mixitup js -->
        <script type="text/javascript" src="assets/js/jquery.mixitup.min.js"></script>

        <!-- Magnific-popup js -->
        <script type="text/javascript" src="assets/js/jquery.magnific-popup.js"></script>

        <!-- accordion js -->
        <script type="text/javascript" src="assets/js/accordion.js"></script>

        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="assets/js/materialize.js"></script>

        <script>
            $(".button-collapse").sideNav();
        </script>

        <!-- wow js active -->
        <script type="text/javascript">
            new WOW().init();
        </script>

        <script type="text/javascript" src="assets/js/plugins.js"></script>
        <script type="text/javascript" src="assets/js/main.js"></script>


    </body>

</html>