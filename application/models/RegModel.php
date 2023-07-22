<?php 
class RegModel extends CI_Model{

  
    public function insertData($data){
        $this->load->database();
       return $result=$this->db->insert('staffs',$data);
       
    }

    public function getRecord(){
    
        $this->load->database();
        return $reult=$this->db->get('staffs')->result();
        
        
    }
    public function editData($id){
        $this->load->database();
        $this->db->where("id",$id);
        return $this->db->get('staffs')->result();
    
        }


    public function updateData($id,$editdata){
         $this->load->database();
         $this->db->where("id",$id);
         return  $this->db->update('staffs',$editdata);
    }


    public function deleteData($id){
        $this->load->database();
        $this->db->where("id",$id);
        return $this->db->delete('staffs');
    }

}

