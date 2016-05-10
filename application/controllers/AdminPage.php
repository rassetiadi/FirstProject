<?php
class AdminPage extends CI_Controller {
	public function index()
	{
    $this->load->helper('url');

    $this->load->view('top');
		$this->load->view('login');
		$this->load->view('bottom');
	}
}
