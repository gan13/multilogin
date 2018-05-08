<?php $this->load->view('head')?>
<div class="row">
    <div class="col-5">
        <h2>Home</h2>
    </div>
</div>

<?php
    $is_login = $this->session->userdata('is_login');
    $username = $this->session->userdata('username');
?>
    <div class="content">
        <div class="col-16">
            <p>Selamat datang di Sosial Media Fastikom</p>
            <p>Untuk melihat katalog buku, gunakan menu <strong>"Buku"</strong>.</p>
        </div>
        <br>
        </br>
       
    </div>
