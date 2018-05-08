<!DOCTYPE html>
<html lang="en">
        <div id="head-wrapper">
            <div id="head">
                <?php $this->load->view('head')?>
            </div>
        </div>>
        
        <div id="navbar-wrapper">
            <div id="navbar">
            <?php $this->load->view('navbar') ?>
            </div>
        </div>
    
        <div id="content-slider">
            <div id="content">
                <?php $this->load->view('home/index')?>
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