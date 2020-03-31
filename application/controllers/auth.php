<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

    public function __construct(){
        parent::__construct();

        $this->load->model('users');
    }
    
	public function login()
	{
		
		$this->load->view('template/header');
		$this->load->view('auth/login');
		$this->load->view('template/footer');
	}
    
    public function register()
	{
		
		$this->load->view('template/header');
		$this->load->view('auth/register');
		$this->load->view('template/footer');
	}
    
    public function store()
	{
        $this->users->store($this->input->post('username'));

		redirect('auth/login', 'refresh');
	}

	public function verif(){
		$data['user'] = $this->users->get_username($this->input->post('username'));

		if(md5($this->input->post('password')) == $data['user']['password']){
			
			$this->session->set_userdata('name',$data['user']['name']);
			
			redirect('home', 'refresh');
		}

	}
}
