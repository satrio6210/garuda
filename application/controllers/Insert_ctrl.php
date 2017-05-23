<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


	class insert_ctrl extends CI_Controller {

		function __construct() {
			parent::__construct();
			$this->load->model('insert_model');
		}


			function index() {
			//Including validation library
			$this->load->library('form_validation');

			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

			//Validating Name Field
			$this->form_validation->set_rules('dusername', 'username', 'required|min_length[5]|max_length[15]');

			//Validating password Field
			$this->form_validation->set_rules('dpassword', 'password', 'required|min_length[5]|max_length[50]');
			
			//Validating pasword Confirmation
			$this->form_validation->set_rules('passconf','Password Confirmation','required|matches[dpassword]');

			//Validating email Field
			$this->form_validation->set_rules('demail', 'email', 'required|valid_email');
			
			//Validating affiliate radio button
			$this->form_validation->set_rules('affiliate', 'affiliate', 'required');
			
			//Validating Character code
			$this->form_validation->set_rules('charcode', 'charcode', 'required');

			

		if ($this->form_validation->run() == FALSE) {
		$this->load->view('register');
		} else {
			//Setting values for tabel columns
			//$randid = (rand(10,1000) + rand(10,1000));
			$imageserverlink = "https://imageserver.eveonline.com/Character/";
			$charcode = $this->input->post('charcode');
			$theendoffile = "_512.jpg";
			$profilepictlink = $imageserverlink . $charcode . $theendoffile;
			

			$data = array(
			//'id' => $randid,
			'username' => $this->input->post('dusername'),
			'password' => md5($this->input->post('dpassword')),
			'email' => $this->input->post('demail'),
			'affiliate' => $this->input->post('affiliate'),
			'profilepictlink' => $profilepictlink
		);
			//Transfering data to Model
			$this->insert_model->form_insert($data);
			$data['message'] = 'Register Success';
			//Loading View
			$this->load->view('register', $data);
		}
}

}

?>

