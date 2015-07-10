<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{
		$head_title["title"] = "Ideal Shine | Home";
		$this->load->view("home", $head_title);
	}

	public function prices_services()
	{
		if($this->input->post("package") !== FALSE || $this->input->post("deep_clean") !== FALSE || $this->input->post("headlight_restoration") || 
			$this->input->post("pet_hair_removal") !== FALSE || $this->input->post("exterior_trim") !== FALSE)
		{
			if($this->input->post("package") !== FALSE)
			{
				$package["package"] = $this->input->post("package");
				$this->session->set_userdata($package);
			}

			if($this->input->post("package") == "Additional Service(s) Only" && $this->input->post("deep_clean") == FALSE && $this->input->post("headlight_restoration") == FALSE
				&& $this->input->post("pet_hair_removal") == FALSE && $this->input->post("exterior_trim") == FALSE)
			{
				redirect("/prices-services");
			}
			
			$data = array(
						"deep_clean" => $this->input->post("deep_clean"),
						"headlight_restoration" => $this->input->post("headlight_restoration"),
						"pet_hair_removal" => $this->input->post("pet_hair_removal"),
						"exterior_trim" => $this->input->post("exterior_trim")
						);
			$this->session->set_userdata($data);
			redirect("/request-mobile-detailing-appointment-contact");
		}
		else
		{
			$head_title["title"] = "Ideal Shine | Prices & Services";
			$this->load->view("prices_services", $head_title);
		}
	}

	public function testimonials()
	{
		$head_title["title"] = "Ideal Shine | Customer's Cars";
		$this->load->view("testimonials", $head_title);
	}

	public function about_us()
	{
		$head_title["title"] = "Ideal Shine | About Us";
		$this->load->view("about_us", $head_title);
	}

	public function faqs()
	{
		$head_title["title"] = "Ideal Shine | FAQs";
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
		$config['protocol'] = 'smtp'; 
		$config['smtp_host'] = 'smtp.office365.com'; 
		$config['smtp_user'] = 'idealshine@idealshinedetailing.com'; 
		$config['smtp_pass'] = 'D@nielsmells1'; 
		$config['smtp_port'] = 587; 
		$config['smtp_timeout'] = 60; 
		$config['charset'] = 'iso-8859-1'; 
		$config['smtp_crypto'] = 'tls'; 
		$config['newline'] = '\r\n'; 
		$config['mailtype'] = 'html';
		$config['wordwrap'] = TRUE; 

		$this->load->library('email', $config);
		$this->email->set_crlf("\r\n");
		$this->email->set_newline("\r\n");
		$this->email->from('idealshine@idealshinedetailing.com', 'Ideal Shine Detailing');
		$this->email->to($this->session->userdata('info')['email']); 
		$this->email->bcc('idealshine@idealshinedetailing.com'); 
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
	    		$this->session->set_flashdata('success', 'Your message was sent successfully. We will respond within 24 hours. Thank You!');
				redirect("/main/index");
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