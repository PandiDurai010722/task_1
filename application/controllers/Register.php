<?php 

class Register extends CI_Controller{


     public function index(){
        $this->load->view("login.php");
     }
    public function staff(){
        $mes["msg"]="Collage Staff Registration Form";
        $this->load->view("registration_form.php",$mes);
    }
    public function saveData(){
        
        extract($_POST);
        // $gender=null;

        // if(isset($Male)){
        //     $gender="male";

        // }else{
        //     $gender="female";
        // }
        $data=['staff_name'=>$name,
        'date_of_join'=>$doj,
         'address'=>$add,
         'department'=>$sel,
        'phone_number'=>$pn,
        'gender'=>$gender,
        'blood_group'=>$bg
    ];
    $this->load->model('RegModel');
    $result=$this->RegModel->insertData($data);
    if($result){
        // $this->load->view("registration_form.php");
        redirect(base_url("register/staff"));
    }else{
        echo 'Error wile inserting data';

    }

    }
    public function fetchdata(){

       $this->load->model('RegModel');
       $result['table']=$this->RegModel->getRecord();
       $this->load->view('staff_lists',$result);

    }

    public function edit($id){
        $this->load->model('RegModel');
       $result['data']=$this->RegModel->editData($id);
       $this->load->view('staff_lists',$result);
    }


    public function update(){
        extract($_POST);
        // $gender=null;

        // if(isset($Male)){
        //     $gender="male";

        // }else{
        //     $gender="female";
        // }

    $id=$nid;
    $editdata=[
        'staff_name'=>$name,
        'date_of_join'=>$doj,
         'address'=>$add,
         'department'=>$sel,
         'phone_number'=>$pn,
         'gender'=>$gender,
         'blood_group'=>$bg
    ];
    $this->load->model('RegModel');
    $result=$this->RegModel->updateData($id,$editdata);
    if($result){
        $this->fetchdata();
    }

    }

    public function delete(){
        $id=$this->uri->segment(3);
        $this->load->model("RegModel");
        $result=$this->RegModel->deleteData($id);
        if(isset($result)){
            $this->fetchdata();
                }

    }

}


?>