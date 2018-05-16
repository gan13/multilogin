<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Welcome extends MY_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->halaman = 'Welcome';
    }

	public function index($page = null)
	{
        $halaman    = $this->halaman;
        $main_view  = 'home/index';
		$this->load->view('template', compact('halaman', 'main_view'));
	}
}
