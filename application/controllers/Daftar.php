<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Daftar extends CI_Controller
	{

	  public function __construct()
		{
		  parent::__construct();
		  $this->load->model('M_peserta');
		}

		public function tambah()
		{
	    $nama = $this->form_validation->set_rules('nama', 'Nama', 'trim|required|max_length[50]',
	                        array('required' => '%s Tidak Boleh Kosong')
	                );
	    $email = $this->form_validation->set_rules('email', 'Email', 'trim|required|max_length[50]',
	                        array('required' => '%s Tidak Boleh Kosong')
	                );
	    $asal = $this->form_validation->set_rules('asal', 'Asal', 'trim|required|max_length[50]',
	                        array('required' => '%s Tidak Boleh Kosong')
	                );
	    $gender = $this->form_validation->set_rules('gender', 'Gender', 'required',
	                        array('required' => '%s Tidak Boleh Kosong')
	                );
	    $hape = $this->form_validation->set_rules('hape', 'Hape', 'required|max_length[20]',
	                        array('required' => '%s Tidak Boleh Kosong')
	                );

	    if ($this->form_validation->run() == false){
	      $this->load->view('home');
	    }else{
	    $this->M_peserta->tambah_peserta();
	    	$user = $this->M_peserta->kirim_email();
	    	$data = array(
					 'nama'		=> $user->nama_peserta,
					 'asal'		=> $user->asal_peserta,
					 'gender'	=> $user->gender,
					 'hape'		=> $user->hape
							 );
			$emailtemp=$this->load->view('temp_email.php',$data,TRUE);
			$this->load->library('email');
			$this->email->from('radsatu@gmail.com', 'DSC_2018');
			$this->email->to($user->email_peserta);

			$this->email->subject('Coba Pesan');

			$this->email->message($emailtemp);
			$this->email->set_mailtype('html');
			$this->email->send();
			$data['peserta'] = $this->M_peserta->ambil_peserta();
	      $this->load->view('home',$data);

	  }
		}

	}
 ?>
