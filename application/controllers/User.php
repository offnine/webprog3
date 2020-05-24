<?php
class User extends CI_Controller {
 
public function __construct(){
 
        parent::__construct();
  	 		$this->load->model('User_model');
         $this->load->helper('form');
}
     function index(){
    $this->load->view('user/login.php');
  }
        
 
public function login_user(){ 
     $email    = $this->input->post('email',TRUE);
    $password = md5($this->input->post('password',TRUE));
    $validate = $this->User_model->validate($email,$password);
    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $name  = $data['user_name'];
        $email = $data['user_email'];
        $level = $data['admin'];
        $sesdata = array(
            'username'  => $name,
            'email'     => $email,
            'level'     => $level,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
      
        if($level === '1'){
            redirect('Cars/');
 
    
        }elseif($level === '2'){
            redirect('Cars/admin');
 
 
        }else{
            redirect('Cars/sadmin');
        }
    }else{
        echo $this->session->set_flashdata('msg','Username or Password is Wrong');
        redirect('Cars');
    }
  }
   function logout(){
      $this->session->sess_destroy();
      redirect('User');
  }
}
