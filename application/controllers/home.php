<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
        $isi['content'] = 'tampilan_content';
        $isi['judul'] = 'Dashboard';
        $isi['subjudul'] = '';
		$this->load->view('tampilan_home',$isi);
	}
}