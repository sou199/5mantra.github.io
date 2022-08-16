<?php

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}

	public function about_us()
	{
		$this->load->view('about');
	}

	public function gallery()
	{
		$this->load->view('gallery');
	}

	public function team()
	{
		$this->load->view('team');
	}

	public function blog()
	{
		$this->load->view('blog');
	}

	public function contact_us()
	{
		$this->load->view('contact_us');
	}
}
