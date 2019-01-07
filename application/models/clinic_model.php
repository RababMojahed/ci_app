<?php 
class clinic_model extends CI_Model{
    public function insert_into_doctor(){
        $data_doc=array('d_name'=>'Rabab','d_speciality'=>'Skin','d_nationality'=>'Yemeni');
        $this->db->insert('doctor',$data_doc);
        
    }//end insert_into_doctor function
     public function select_doctor(){
    $query = $this->db->get('doctor');
         return $query;
     }//end select_doctor function
}//end clinic_model class
?>