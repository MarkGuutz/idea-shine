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
		$this->form_validation->set_rules('first_name', 'first name', 'required');
		$this->form_validation->set_rules('last_name', 'last name', 'required');
		$this->form_validation->set_rules('phone_no', 'phone number', 'required|is_natural|exact_length[10]');
		$this->form_validation->set_rules('email', 'email', 'required|valid_email');

		if ($this->form_validation->run() == FALSE)
		{
			$head_title = array("title" => "Schedule: Contact Info");
			$this->load->view("appt_contact_info", $head_title);
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
		$this->form_validation->set_rules('make', 'make', 'required');
		$this->form_validation->set_rules('model', 'model', 'required');
		$this->form_validation->set_rules('year', 'year', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$head_title = array("title" => "Schedule: Vehicle Info");
			$this->load->view("appt_vehicle_info", $head_title);
		}
		else
		{
			$data = $this->input->post();
			$this->session->set_userdata($data);
			redirect("/appointment/appt");
		}
	}

	public function appt()
	{
		$this->form_validation->set_rules('date', 'date', 'required');
		$this->form_validation->set_rules('time', 'time', 'required');
		$this->form_validation->set_rules('package', 'package', 'required');
		$this->form_validation->set_rules('street', 'street', 'required');
		$this->form_validation->set_rules('city', 'city', 'required');
		$this->form_validation->set_rules('zip', 'zip', 'required|exact_length[5]');
		if ($this->form_validation->run() == FALSE)
		{
			$head_title = array("title" => "Schedule: Appointment Info");
			$this->load->view("appt_appt_info", $head_title);
		}
		else
		{
			$data = $this->input->post();
			$this->session->set_userdata($data);
			redirect("/appointment/details");
		}
		
	}

	public function details()
	{
		$head_title = array("title" => "Appointment Summary");
		$this->load->view("appt_details", $head_title);
	}

	public function send_appt()
	{
	
    $config = Array(
		'protocol' => 'smtp',
		'smtp_host' => 'ssl://smtp.googlemail.com',
		'smtp_port' => 465,
		'smtp_user' => 'idealshinedetailing@gmail.com', 
		'smtp_pass' => 'danielsmells', 
		'mailtype' => 'html',
		'charset' => 'iso-8859-1',
		'wordwrap' => TRUE);

		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from('idealshinedetailing@gmail.com', 'Ideal Shine Detailing');
		$this->email->to($this->session->userdata('email')); 
		$msg = $this->load->view('appt_details', '', true);

		$this->email->subject('Appointment Request Received');
		$this->email->message($msg);	

		$this->email->send();

		echo $this->email->print_debugger();
	}
}