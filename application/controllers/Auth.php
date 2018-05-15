<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Auth extends MY_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->halaman = 'auth';
    }

	public function index($page = null)
	{
        $halaman    = $this->halaman;
        $main_view  = 'register';
		$this->load->view('register','main_view');
	}
}
