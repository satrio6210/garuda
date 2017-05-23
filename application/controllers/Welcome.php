<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
   	
   		parent::__construct();
 	}
	
	public function index(){
		$this->load->view('welcome_message');
	}
	
	public function Slepier(){
	    $this->load->view('Slepier');
	}
	
	public function Garudarepublic(){
	    $this->load->view('Garudarepublic');
	}
	
	public function Thewing(){
	    $this->load->view('Thewing');
	}
	
	public function Wyzen(){
	    $this->load->view('Wyzen');
	}
    
    //go to public home page
	public function Home(){
	    
	    // if loged in go to private homepage
		if($this->session->userdata('logged_in')){
     
     		$session_data = $this->session->userdata('logged_in');
    		$data['username'] = $session_data['username'];
			$this->load->view('home_view');
	    }
   		else{
     		//If no session, redirect public home page
     		redirect('Welcome', 'refresh');
   	    }
	}
    
    //go to private homepage
	public function home_view(){

		if($this->session->userdata('logged_in')){
     
     		$session_data = $this->session->userdata('logged_in');
    		$data['username'] = $session_data['username'];
			$this->load->view('home_view');
	}
   		else{
     		//If no session, redirect to login page
     		redirect('login', 'refresh');
   	}
 	}

	//public function Discord(){

		//$this->load->view('Discord');
	//}

  function regist(){
      
    
        if($this->session->userdata('logged_in')){
     
     		$session_data = $this->session->userdata('logged_in');
    		$data['username'] = $session_data['username'];
			$this->load->view('register');
	    }
   		else{
     		//If no session, still got to register page
     		redirect('register', 'refresh');
   	    }
    }

	
 	
 	function Discord(){
   
   		if($this->session->userdata('logged_in')){
     
     		$session_data = $this->session->userdata('logged_in');
    		$data['username'] = $session_data['username'];
     		$this->load->view('Discord');
   	    }
   		else{
     		//If no session, redirect to login page
     		redirect('login', 'refresh');
   	    }
 	}
}
