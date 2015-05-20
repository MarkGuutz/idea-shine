<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Appointment extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library("form_validation");
		$this->output->enable_profiler();
		
	}

	public function contact()
	{
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('phone_no', 'Phone Number', 'required|is_natural|exact_length[10]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view("appt_contact_info");
		}
		else
		{
			$data = $this->input->post();
			$this->session->set_userdata($data);
			redirect("/appointment/vehicle");
		}
	}

	public function vehicle()
	{
		$this->form_validation->set_rules('make', 'Make', 'required');
		$this->form_validation->set_rules('model', 'Model', 'required');
		$this->form_validation->set_rules('year', 'Year', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view("appt_vehicle_info");
		}
		else
		{
			redirect("/appointment/appt");
		}
	}

	public function appt()
	{
		$this->load->view("appt_appt_info");
	}
}