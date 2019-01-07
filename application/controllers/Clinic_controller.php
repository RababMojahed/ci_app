<?php 
class Clinic_controller extends CI_Controller{
    public function _construct(){
        parent::_construct();
        $this->load->database();
    }//end _construct function
    
    public function index($page='index'){
        $data['title']=ucfirst($page);
        $this->load->view('templates/header',$data);
        $this->load->view('clinic/'.$page,$data);
        $this->load->view('templates/footer');
    }
    
      public function index_form($page='doctor_data'){
        $data['title']=ucfirst($page);
        $this->load->view('templates/header',$data);
        $this->load->view('control_panel/'.$page,$data);
        $this->load->view('templates/footer');
    }
    
     public function show_more($page='index'){
        $data['title']=ucfirst($page);
         $this->load->model('clinic_model');
         $query= $this->clinic_model->select_doctor();
         $data_query['records']=$query->result();
         
        $this->load->view('templates/header',$data);
        $this->load->view('clinic/'.$page,$data_query);
        
        $this->load->view('templates/footer');
         
    }
    
    public function show_clinic_page($page='index'){
        if(!file_exists(APPPATH.'views/clinic/'.$page.'.php')){
            show_404();
        }
        
        $data['title']=ucfirst($page);
        $this->load->model('clinic_model');
        $this->clinic_model->insert_into_doctor();
        
        $this->load->view('templates/header',$data);
        $this->load->view('clinic/'.$page,$data);
        $this->load->view('templates/footer');
        
    }
    public function save_doctor_data(){
        
        $data=array(
            'd_id'=>$this->input->post('id'),
            'd_name'=>$this->input->post('name'),
            'd_speciality'=>$this->input->post('speciality'),
            'd_nationality'=>$this->input->post('nationality')
        );
        $this->db->insert('doctor',$data);
        redirect('clinic_controller/show_more/index');
    }//end insert_doctor_form function
    
} //end Clinic_controller class
?>