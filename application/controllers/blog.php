<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class blog extends CI_Controller {

	public function index()
	{   
        $this->load->helper('url');
        $this->load->view('header');
		$this->load->view('blog');
		$this->load->view('footer');
	}
}
