<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Portfolio extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->output->enable_profiler();
	}

	public function index()
	{
		$this->load->view('main');
	}

	public function about()
	{
		$this->load->view('about');
	}

	public function contact()
	{
		$this->load->view('contact');
	}

	public function send()
	{
		$this->load->library('email'); // Note: no $config param needed
		$this->email->from('yubryant27@gmail.com', 'yubryant@gmail.com');
		$this->email->to('bryant@bryant.com');
		$this->email->subject('Test email from CI and Gmail');
		$this->email->message('This is a test.');
		$this->email->send();
    redirect('/portfolio/contact');
}



}

//end of main controller