<?php

class Courses extends CI_Controller {

	public function index()
	{
		$this->load->view('courses');
	}

	public function offline_courses()
	{
		$this->load->view('offline_courses');
	}

	public function online_courses()
	{
		$this->load->view('online_courses');
	}

	public function group_I()
	{
		$this->load->view('group_1');
	}

	public function group_II()
	{
		$this->load->view('group_2');
	}

	public function group_III()
	{
		$this->load->view('group_3');
	}

	public function group_IV()
	{
		$this->load->view('group_4');
	}

	public function si_pc()
	{
		$this->load->view('si_pc');
	}

	public function gurukul_dsc()
	{
		$this->load->view('gurukul_dsc');
	}

	public function tet()
	{
		$this->load->view('tet');
	}

	public function ctet()
	{
		$this->load->view('ctet');
	}

	public function pedagogy_social_studies()
	{
		$this->load->view('pedagogy_social_studies');
	}

	public function ethics_teaching_aptitude()
	{
		$this->load->view('ethics_teaching_aptitude');
	}

	public function group_I_prelims()
	{
		$this->load->view('group_I_prelims');
	}

	public function group_II_online()
	{
		$this->load->view('group_II_online');
	}

	public function group_IV_online()
	{
		$this->load->view('group_IV_online');
	}

	public function si_pc_online()
	{
		$this->load->view('si_pc_online');
	}

	public function gurukul()
	{
		$this->load->view('gurukul');
	}

}