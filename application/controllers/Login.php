<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->halaman = 'login';
    }
	public function index($page = null)
	{
		$halaman    = $this->halaman;
        $main_view  = 'login/index';
		$this->load->view($main_view);
	}
}
