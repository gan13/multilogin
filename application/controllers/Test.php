<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Test extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->library('encrypt'); 
        $this->halaman = 'test';
    }
   
	public function index($page = null)
	{
        $halaman    = $this->halaman;
        $main_view  = 'test/index';
		$this->load->view('template', compact('halaman', 'main_view'));
	}
}
