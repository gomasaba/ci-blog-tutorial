<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		var_dump($this->taltal);
		$this->load->model('Post');
//		$data['query'] = $this->Post->get_last_ten_entries();

		$this->load->helper('form');


//		var_dump($this);
		$this->load->view('welcome_message');
//		$this->taltal->display('welcome_message.php');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */