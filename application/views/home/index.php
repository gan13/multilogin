<?php $this->load->view('head')?>


<?php
    $is_login = $this->session->userdata('is_login');
    $username = $this->session->userdata('username');
?>
    
        
        <div class="content-wrapper">
            <div class="content">
                <?php $this->load->view('konten_team')?>
            </div>
        </div>
       
    
