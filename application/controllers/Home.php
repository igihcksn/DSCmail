<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
        parent::__construct();

        $this->load->model('M_peserta');
    }

	public function index()
	{
		$user['peserta'] = $this->M_peserta->ambil_peserta();
		$this->load->view('home',$user);
		
	}

	
}