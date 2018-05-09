<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Profil extends MY_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->halaman = 'profil';
    }

	public function index($page = null)
	{
        $halaman    = $this->halaman;
        $main_view  = 'profi/index';
		$this->load->view('t_profil', compact('halaman', 'main_view'));
	}
}
