<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{
		$head_title["title"] = "Home";
		$this->load->view("home", $head_title);
	}

	public function prices_services()
	{
		$head_title["title"] = "Prices & Services";
		$this->load->view("prices_services", $head_title);
	}

	public function testimonials()
	{
		$head_title["title"] = "Testimonials";
		$this->load->view("testimonials", $head_title);
	}

	public function about_us()
	{
		$head_title["title"] = "About Us";
		$this->load->view("about_us", $head_title);
	}

	public function faqs()
	{
		$head_title["title"] = "FAQs";
		$this->load->view("faqs", $head_title);
	}

	public function contact_us()
	{	
		$this->load->library("form_validation");
		$this->form_validation->set_rules('first_name', 'first name', 'required');
		$this->form_validation->set_rules('last_name', 'last name', 'required');
		$this->form_validation->set_rules('phone_no', 'phone number', 'required|callback_phone_format');
		$this->form_validation->set_rules('email', 'email', 'required|valid_email');
		$this->form_validation->set_rules('message', 'message', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$head_title["title"] = "Contact Us";
			$this->load->view("contact_us", $head_title);
		}
		else
		{
			$phone_no = $this->format_phone($this->input->post("phone_no"));
			$data= array(
				"first_name" => ucwords($this->input->post("first_name")),
				"last_name" => ucwords($this->input->post("last_name")),
				"phone_no" => $phone_no,
				"alt_phone" => $this->input->post("alt_phone"),
				"email" => $this->input->post("email"),
				"message" => $this->input->post("message") 
				);
			$data1=array("info"=>$data);
			$this->session->set_userdata($data1);
			redirect("/main/send_message");
		}
	}

	public function send_message()
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
		$this->email->to($this->session->userdata('info')['email']); 
		$this->email->bcc('idealshinedetailing@gmail.com'); 
		$this->email->subject('Thank You for Contacting Us!');
		$msg = $this->load->view('/contact_us_message', '', true);
		$this->email->message($msg);
		//****************************************** Bot/Spam Test *******************************************
		if (!empty($this->session->userdata("info")["alt_phone"]))
		{
			$this->session->unset_userdata('info');
			redirect("/main/index");
		}
		else
		{	
			if ($this->email->send())
			{
	    		$this->session->unset_userdata('info');
	    		$this->session->set_flashdata('success', 'Your message was sent successfully. Thank You!');
				redirect("/main/contact_us");
			}
			else
			{
				$this->session->set_flashdata('error', 'There was an error sending the message. Please try again.');
				$this->session->unset_userdata('info');
				redirect("/main/contact_us");
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
}

//end of main controller