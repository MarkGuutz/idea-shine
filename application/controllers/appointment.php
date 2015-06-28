<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Appointment extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library("form_validation");
		// $this->output->enable_profiler();
	}
//******************* Loads contact page for appointment requests and runs validations for inputs  ******************
	public function contact()
	{
		$this->form_validation->set_rules('first_name', 'first name', 'required');
		$this->form_validation->set_rules('last_name', 'last name', 'required');
		$this->form_validation->set_rules('phone_no', 'phone number', 'required|callback_phone_format');
		$this->form_validation->set_rules('email', 'email', 'required|valid_email');

		if ($this->form_validation->run() == FALSE)
		{
			$head_title["title"] = "Schedule: Contact";
			$this->load->view("schedule_appt/appt_contact_info", $head_title);
		}
		else
		{
			$phone_no = $this->format_phone($this->input->post("phone_no"));
			$data = array(
				"first_name" => ucwords($this->input->post("first_name")),
				"last_name" => ucwords($this->input->post("last_name")),
				"phone_no" => $phone_no,
				"email" => $this->input->post("email"),
				"contact_info" => "complete"
				);
			$this->session->set_userdata($data);
			redirect("/appointment/vehicle");
		}
	}
//******************* Loads vehicle page for appointment requests and runs validations for inputs  ******************
	public function vehicle()
	{
		if($this->session->userdata("contact_info") !== "complete")
		{
			redirect("/appointment/contact");
		}
		else{
			$this->form_validation->set_rules('make', 'make', 'required');
			$this->form_validation->set_rules('model', 'model', 'required');
			$this->form_validation->set_rules('year', 'year', 'required');
			$this->form_validation->set_rules('package', 'package', 'required');
			if ($this->form_validation->run() == FALSE)
			{
				$head_title = array("title" => "Schedule: Vehicle/Package");
				$this->load->view("schedule_appt/appt_vehicle_info", $head_title);
			}
			else
			{
				$data = array(
					"make" => $this->input->post("make"),
					"model" => $this->input->post("model"),
					"year" => $this->input->post("year"),
					"vehicle_additional" => $this->input->post("vehicle_additional"),
					"package" => $this->input->post("package"),
					"vehicle_info" => "complete"
					);
				$this->session->set_userdata($data);
				redirect("/appointment/appt");
			}
		}
	}
//********** Loads appointment location/date page for appointment requests and runs validations for inputs  ************
	public function appt()
	{
		if($this->session->userdata("vehicle_info") !== "complete")
		{
			redirect("/appointment/vehicle");
		}
		else
		{
			$this->form_validation->set_rules('date', 'date', 'required');
			$this->form_validation->set_rules('time', 'time', 'required');
			$this->form_validation->set_rules('street', 'street', 'required');
			$this->form_validation->set_rules('city', 'city', 'required');
			$this->form_validation->set_rules('zip', 'zip', 'required|callback_zip_format');
			if ($this->form_validation->run() == FALSE)
			{
				$head_title = array("title" => "Schedule: Time/Location");
				$this->load->view("schedule_appt/appt_appt_info", $head_title);
			}
			else
			{
				$zip = $this->format_zip($this->input->post("zip"));
				$data = array(
					"date" => $this->input->post("date"),
					"time" => $this->input->post("time"),
					"street" => ucwords($this->input->post("street")),
					"city" => ucwords($this->input->post("city")),
					"zip" => $zip,
					"appt_additional" => $this->input->post("appt_additional"),
					"appt_info" => "complete"
					);
				$this->session->set_userdata($data);
				redirect("/appointment/details");
			}
		}
	}
//**************** Loads appt. summary page for appointment requests and runs validations for inputs  ***************
	public function details()
	{
		if($this->session->userdata("appt_info") !== "complete")
		{
			redirect("/appointment/appt");
		}
		else
		{
			$this->form_validation->set_rules('first_name', 'first name', 'required');
			$this->form_validation->set_rules('last_name', 'last name', 'required');
			$this->form_validation->set_rules('phone_no', 'phone number', 'required|callback_phone_format');
			$this->form_validation->set_rules('email', 'email', 'required|valid_email');
			$this->form_validation->set_rules('make', 'make', 'required');
			$this->form_validation->set_rules('model', 'model', 'required');
			$this->form_validation->set_rules('year', 'year', 'required');
			$this->form_validation->set_rules('date', 'date', 'required');
			$this->form_validation->set_rules('time', 'time', 'required');
			$this->form_validation->set_rules('package', 'package', 'required');
			$this->form_validation->set_rules('street', 'street', 'required');
			$this->form_validation->set_rules('city', 'city', 'required');
			$this->form_validation->set_rules('zip', 'zip', 'required|callback_zip_format');
			if ($this->form_validation->run() == FALSE){
				$head_title = array("title" => "Schedule: Summary");
				$this->load->view("schedule_appt/appt_details", $head_title);
			}
			else
			{
				$phone_no = $this->format_phone($this->input->post("phone_no"));
				$zip = $this->format_zip($this->input->post("zip"));
				$data = array(
					"first_name" => ucwords($this->input->post("first_name")),
					"last_name" => ucwords($this->input->post("last_name")),
					"phone_no" => $phone_no,
					"alt_phone" => $this->input->post("alt_phone"),
					"email" => $this->input->post("email"),
					"make" => $this->input->post("make"),
					"model" => $this->input->post("model"),
					"year" => $this->input->post("year"),
					"date" => $this->input->post("date"),
					"time" => $this->input->post("time"),
					"package" => $this->input->post("package"),
					"street" => ucwords($this->input->post("street")),
					"city" => ucwords($this->input->post("city")),
					"zip" => $this->input->post("zip")
					);
				$this->session->set_userdata($data);
				redirect("/appointment/send_appt");
				// $this->load->view("schedule_appt/emailed_appt_info");
			}
		}
	}
//************************************************ Email appt. request  ******************************************
	public function send_appt()
	{
	    $config = array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'idealshinedetailing@gmail.com', 
			'smtp_pass' => 'danielsmells', 
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'validate' => TRUE,
			'wordwrap' => TRUE);

		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from('idealshinedetailing@gmail.com', 'Ideal Shine Detailing');
		$this->email->to($this->session->userdata('email')); 
		$this->email->bcc('idealshinedetailing@gmail.com'); 
		$this->email->subject('Appointment Request Received');
		$msg = $this->load->view('schedule_appt/emailed_appt_info', '', true);
		$this->email->message($msg);
		//****************************************** Bot/Spam Test *******************************************
		if (!empty($this->session->userdata("alt_phone")))
		{
			redirect("/main/index");
		}
		else
		{	
			if ($this->email->send())
			{
	    		
				$this->session->sess_destroy();
	    		redirect("/main/index");
			}
			else
			{
				$this->session->set_flashdata('email_error', 'There was an error sending the appointment request. Please try again.');
				redirect("/appointment/details");
			}
		}	
	}
//************************************************ Phone format validation  ******************************************
	public function phone_format($phone)
	{
		$phone_no = preg_replace("/\D/", "",$phone);
		if (preg_match("/[a-zA-Z]/", $phone)){
			$this->form_validation->set_message("phone_format", "The %s cannot have letters.");
			return FALSE;
		}
		else if (strlen($phone_no) < 10){
			$this->form_validation->set_message("phone_format", "There are not enough digits in the phone number.");
			return FALSE;
		}
		else if (strlen($phone_no) > 11){
			$this->form_validation->set_message("phone_format", "There are too many digits in the phone number.");
			return FALSE;
		}
		else if($phone_no[0] !== "1" && strlen($phone_no) == 11){
			$this->form_validation->set_message("phone_format", "Please enter a valid number.");
			return FALSE;
		}
		else{
			return TRUE;
		}
	}
//******************************************** Format phone number based on length *************************************
	public function format_phone($phone_no)
	{
		$phone_no = preg_replace("/\D/", "",$phone_no);	
		if (strlen($phone_no) == 10){
			$phone_no = preg_replace("/^(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $phone_no);
			return $phone_no; 
		}
		else{
			$phone_no = preg_replace("/^(\d{1})(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3-$4", $phone_no);
			return $phone_no;
		}
	}
//************************************************ zip format validation  ******************************************
	public function zip_format($zip)
	{
		$zip_code = preg_replace("/\D/", "",$zip);
		if (preg_match("/[a-zA-Z]/", $zip)){
			$this->form_validation->set_message("zip_format", "The %s cannot have letters.");
			return FALSE;
		}
		else if (strlen($zip_code) < 5 || strlen($zip_code) > 9 || strlen($zip_code) == 6 || strlen($zip_code) == 7 || strlen($zip_code) == 8){
			$this->form_validation->set_message("zip_format", "Please enter a valid zip code.");
			return FALSE;
		}
		else if($zip_code[0] !== "9"){
			$this->form_validation->set_message("zip_format", "Please enter a valid California zip code.");
			return FALSE;
		}
		else{
			return TRUE;
		}
	}
//******************************************** Format zip based on length *************************************
	public function format_zip($zip)
	{
		$zip_code = preg_replace("/\D/", "",$zip);	
		if (strlen($zip_code) == 9){
			$zip_code = preg_replace("/^(\d{5})(\d{4})$/", "$1-$2", $zip_code);
			return $zip_code; 
		}
		else{
			return $zip_code;
		}
	}
}