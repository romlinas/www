<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	
	public $language = null;


	public function __construct()
		{
			parent::__construct();
			
			$this->load->library('session');

			//set language session if button has been pressed
			 
			 if (!empty($_GET['lang'])) ($_GET['lang'] == 'ru' ?  $this->session->set_userdata('lang','russian') :  $this->session->set_userdata('lang','romanian')); 


		

			//check if session has been set, and define the public language
                        $lang_var = $this->session->userdata('lang');
			$this->language = empty($lang_var) ? 'romanian' : $this->session->userdata('lang');

			//load lang files and shit
			$this->load->helper('language');
			$this->lang->load('text', $this->language);

			//not really necessary, but will be used more than not
			$this->load->helper('url');
			$this->load->helper('form');	
			$this->lang->load('form_validation', $this->language);
		}


	public function index(){

	$this->load->view('templates/header');
	$this->load->view('price');
	$this->load_form();
	$this->load->view('conditii_footer');
	$this->load->view('templates/footer');


	}

	public function contacte()
		{

			$this->load->view('templates/header');
			$this->load->view('price');
			$this->load->view('contacte');
			$this->load->view('templates/footer');
		}

	public function credit_mic()
		{

			$data['range'] = '1'; //out of 3 ranges, range 1 = 1000-1000
			$this->load->view('templates/header');
			$this->load->view('range', $data);
			$this->load_form();
			$this->load->view('conditii_footer');
			$this->load->view('templates/footer');
		}

	public function credit_mediu()
		{
			$data['range'] = '2'; //out of 3 ranges, range 2 = something
			$this->load->view('templates/header');
			$this->load->view('range', $data);
			$this->load_form_suma();
			$this->load->view('conditii_footer');
			$this->load->view('templates/footer');
		}	

	public function credit_mare()
		{
			$data['range'] = '3';
			$this->load->view('templates/header');
			$this->load->view('range', $data);
			$this->load_form_suma();
			$this->load->view('conditii_footer');
			$this->load->view('templates/footer');
		}	

	public function conditii()
		{
			$this->load->view('templates/header');
			$this->load->view('price');
			$this->load->view('conditions');
			$this->load->view('templates/footer');
		}


	public function credite()
		{
			$this->load->view('templates/header');
			$this->load->view('price');
		
			$data['apply'] = '1';
			
			$data['range'] = '1';
			$this->load->view('range',$data);

			$data['range'] = '2';
			$this->load->view('range',$data);

			$data['range'] = '3';
			$this->load->view('range',$data);

			$this->load->view('templates/footer');
	         
		}	



	private function load_form()
		{
			$this->load->helper(array('form', 'url'));

			$this->load->library('form_validation');

			$this->form_validation->set_rules('nume', lang('nume'), 'required|alpha');
			$this->form_validation->set_rules('prenume',  lang('prenume'), 'required|alpha');
			$this->form_validation->set_rules('cnp', lang('cnp'), 'required|numeric');
			$this->form_validation->set_rules('telefon', lang('telefon'), 'required|numeric');

			if ($this->form_validation->run() == FALSE)	$this->load->view('home');
			else 
			{
				$email_data = Array (
					'name' => $this->input->post('nume'),
					'surname' => $this->input->post('prenume'),
					'cnp' => $this->input->post('cnp'),
					'telefon' => $this->input->post('telefon'),
					'amount' => $this->input->post('amount'),
					'period' => $this->input->post('termen')
					);

				$this->sendMail($email_data);
				$this->load->view('formsuccess');
			}
			
		}


		private function load_form_suma()
		{

			// $this->load->view('price');
			$this->load->helper(array('form', 'url'));

			$this->load->library('form_validation');

			$this->form_validation->set_rules('nume', lang('nume'), 'required|alpha');
			$this->form_validation->set_rules('prenume',  lang('prenume'), 'required|alpha');
			$this->form_validation->set_rules('cnp', lang('cnp'), 'required|numeric');
			$this->form_validation->set_rules('telefon', lang('telefon'), 'required|numeric');
			$this->form_validation->set_rules('amount', lang('suma'), 'required|numeric');
			$this->form_validation->set_rules('termen', lang('termen'), 'required|numeric');
			$this->form_validation->set_rules('garant', lang('garant'), 'required|alpha_numeric');

			if ($this->form_validation->run() == FALSE)	$this->load->view('form-suma');
			else 
			{
				$email_data = Array (
					'name' => $this->input->post('nume'),
					'surname' => $this->input->post('prenume'),
					'cnp' => $this->input->post('cnp'),
					'telefon' => $this->input->post('telefon'),
					'amount' => $this->input->post('amount'),
					'period' => $this->input->post('termen'),
					'garant' => $this->input->post('garant')
					);

				$this->sendMail($email_data);
				$this->load->view('formsuccess');
			}


			
		}	

	private function sendMail($data)
		{

		        date_default_timezone_set('Europe/Bucharest');
			$this->load->library('email');
			
			$this->email->from('grafii.foto@gmail.com');
			$this->email->to('unitedcapital@mail.ru');
			$this->email->subject(lang('email_application'));

			$message  = '<br/><br/><strong>';
			$message .= lang('email_application').'<br/><br />';
			$message .= lang('email_from').': ';
			$message .= $data['name'].' '.$data['surname'];
			$message .= "<br /><br />";
			$message .= lang('cnp').': ';
			$message .= $data['cnp'];
			$message .= "<br /><br />";
			$message .= lang('email_telefon').': ';
			$message .= $data['telefon'];
			$message .= "<br /><br />";
			$message .= lang('email_suma').': ';
			$message .= $data['amount'].' lei';
			$message .= "<br /><br />";
			$message .= lang('termen').' ';
			$message .= $data['period'].' luni';
			$message .= "<br /><br />";
			$message .= lang('email_time').': ';
			$message .= date("H:i:s"); 
			$message .= "<br /><br />";
			$message .= (!empty($data['garant']) ? lang('garant').': '.$data['garant'] : '');
			$message .= '</strong>';

			$this->email->message($message);
			$this->email->set_newline("\r\n");
			$result = $this->email->send();
			
			//echo $this->email->print_debugger();
		}	



}