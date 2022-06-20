<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class app extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function mail(){
		$email = $this->input->post('Email');
		
		$config = array(
			'useragent' => 'softubon.co.th',
			'protocol' => 'smtp',
			'smtp_host' => 'smtp.postmarkapp.com',
			'smtp_port' => 587,
			'smtp_user' => '63356043-c8ca-4e78-915b-ebef883d0f47',
			'smtp_pass' => '63356043-c8ca-4e78-915b-ebef883d0f47',
			'smtp_crypto' => 'TLS',
			'mailtype' => 'html',
			'charset' => 'utf-8',
		);
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from('info@softubon.co.th', "Confirm Payment");
		$this->email->to($email);
		$this->email->subject("ยืนยันการรับข้อมูลข่าวสาร");
		$this->email->message("หจก.ซอฟต์อุบลยืนยันการสมัครสมาชิกเพื่อรับข้อมูลเรียบร้อย อีเมล์ที่รับข้อมูลคือ ".$email);
		
		$this->email->send();
		
		redirect(base_url());		
	}

	public function confirmed()
	{
		$this->load->view('confirmed');
	}
}
