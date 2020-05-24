<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cars
 *
 * @author Mate
 */
class Cars extends CI_Controller{

    public function __construct() {
        parent::__construct();
        $languages = array("EN","HU");
        if(in_array($this->uri->segment(1), $languages)){
            $this->load->languages($this->uri->segment(1), $this->uri->segment(1));
        }
        $this->load->model('cars_model');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->lang->load('cars');
        

    }
public function admin(){
    
    if($this->session->userdata('level')==='2' OR $this->session->userdata('level')=== '3' ){
        $items = $this->cars_model->get_CarList();
        $data['title'] = 'Autók listája';
       $data['items'] = $items;
      $this->load->view('user/admin_index_cars', $data);
    }else{
        echo lang('accessdenied');
    }
  }
  public function sadmin(){
   
    if($this->session->userdata('level')==='3'){
      $this->load->view('user/sadmin');
    }else{
        echo lang('accessdenied');
    }
  }
    public function index() {
      
        $items = $this->cars_model->get_CarList();
        $data['title'] = 'Autók listája';
       $data['items'] = $items;
        $this->load->view('cars/index_cars', $data);
        }
    
    
    public function show($slug = null) {
        if($slug == null){
            show_404();
        }
        $item = $this->cars_model->get_CarRecord($slug);
        if(empty($item)){
            show_404();
        }
        else{
            $data['title'] = $item['title'];
            $data['item'] = $item;
            
            $this->load->view('cars/show', $data);
        }
    }
    public function add() {
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('title','Cím','required');
        $this->form_validation->set_rules('text','Leírás','required');
               $name= $this->input->post('title');
  
            $upload_config['allowed_types'] = 'jpg|gif|png';
            $upload_config['max_size'] = 10240; 
            $upload_config['max_width']            = 1920;
            $upload_config['max_height']           = 1080;


            $upload_config['file_name'] = $name;

            $upload_config['upload_path'] = './assets/image/';

            $upload_config['file_ext_tolower'] = TRUE;

            $upload_config['overwrite'] = TRUE;

            $this->load->library('upload'); 
            $this->upload->initialize($upload_config);

        if($this->form_validation->run() == false){

            $data['title'] = "Hírdetés feladása";
            $this->load->view('cars/add',$data);
         
        }
        else{
            if($this->cars_model->add() == TRUE){
                $this->upload->do_upload('file');
                redirect('Cars/');
            }
        }
    }
    public function delete($slug = null){
        if($slug == null){
            show_404();
        }
        $record = $this->cars_model->get_CarRecord($slug);
        
        if(empty($record)){
            show_404();
        }
        
        $this->cars_model->delete($record['id']);
        redirect('Cars/admin');
    }
Public function list_users() {
    
       $users = $this->cars_model->get_list(); 
      $data['users']= $users;
      
      
      
       $this->load->view('user/list_user', $users);
    }
      public function user_show($user = null) {
        if($user == null){
            show_404();
        }
        $user = $this->cars_model->get_userRecord($user);
        if(empty($user)){
            show_404();
        }
        else{
          
            $data['user'] = $user;
            
          
        }
    }

 
 
 
}
 

 

 



