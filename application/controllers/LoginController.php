<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('LoginModel');
        $this->load->model('IndexModel');
		$this->data['category'] = $this->IndexModel->getCategoryHome();

    }
    public function index()
    {
        $this->load->view('components/header/headerLogin.php',$this->data);
        $this->load->view('login/login');
        $this->load->view('components/footer/footerLogin.php');
    }
    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required', ['required' => 'You must provide a %s.']);
        $this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'You must provide a %s.']);
        if ($this->form_validation->run()) {
            $email = $this->input->post('email');
            $password = md5($this->input->post('password'));
            $this->load->model('LoginModel');
            $result = $this->LoginModel->checkLogin($email, $password);
            if ($result) {
                $session_array = ['id' => $result[0]->id, 'username' => $result[0]->username, 'email' => $result[0]->email];
                $this->session->set_userdata('LoggedIn', $session_array);
                $this->session->set_flashdata('success','Login successfully!!!');
                redirect(base_url('/dashboard'));
            }
            else{
                $this->session->set_flashdata('error','Login Failed!!!');
                redirect(base_url('login'));

            }
        } else {
            $this->index();
        }
    }
    
}