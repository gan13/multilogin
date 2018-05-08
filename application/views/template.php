<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--<meta http-equiv="x-ua-compatible" content="ie=edge">-->
        <title>SOSMED FASTIKOM</title>
        <!-- Font Awesome -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800,600,300,300italic,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
        <!-- Material Design Bootstrap -->
        <link href="<?= base_url('assets/css/materialize.css'); ?>" rel="stylesheet">
        <!-- Magnific-popup css -->
        <link href="<?= base_url('assets/css/magnific-popup.css'); ?>" rel="stylesheet">
        <!-- Bootstrap core CSS -->
        <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <!--<link href="css/progressbar.css" rel="stylesheet">-->
        <!-- Material Design Bootstrap -->
        <link href="<?= base_url('assets/css/mdb.min.css'); ?>" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">
        <link href="<?= base_url('assets/css/responsive.css'); ?>" rel="stylesheet">
    </head>

    <body data-spy="scroll" data-target=".navbar-desktop" id="<?= $halaman ?>">
        <!-- Start your project here-->
        <!--Navbar-->
        
        <div class="navbar-desktop-wrapper">
            <div id="navbar">
                <?php $this->load->view('navbar') ?>
            </div>
           <div id="content">
                <?php $this->load->view($main_view) ?>
           </div>
          
         
           
        </div>
        
       
<!--Footer-->
        <div id="footer-wrapper">
            <div id="footer">
            <?php $this->load->view('footer') ?>
            </div>
        </div>
<!--end of footer-->

        <!-- SCRIPTS -->

        <!-- JQuery -->
        <script type="text/javascript" src="<?= base_url('assets/js/jquery-2.2.3.min.js'); ?>"></script>

        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="<?= base_url('assets/js/tether.min.js'); ?>"></script>


        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>

        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="<?= base_url('assets/js/mdb.min.js'); ?>"></script>

        <!-- Wow js -->
        <script type="text/javascript" src="<?= base_url('assets/js/wow.min.js'); ?>"></script>

        <!-- Mixitup js -->
        <script type="text/javascript" src="<?= base_url('assets/js/jquery.mixitup.min.js'); ?>"></script>

        <!-- Magnific-popup js -->
        <script type="text/javascript" src="<?= base_url('assets/js/jquery.magnific-popup.js'); ?>"></script>

        <!-- accordion js -->
        <script type="text/javascript" src="<?= base_url('assets/js/accordion.js'); ?>"></script>

        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="<?= base_url('assets/js/materialize.js'); ?>"></script>

        <script>
            $(".button-collapse").sideNav();
        </script>

        <!-- wow js active -->
        <script type="text/javascript">
            new WOW().init();
        </script>

        <script type="text/javascript" src="<?= base_url('assets/js/plugins.js'); ?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/js/main.js'); ?>"></script>


    </body>

</html>