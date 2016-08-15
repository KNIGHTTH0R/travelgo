<?php
class Tour extends CI_Controller{
    function __construct(){
      parent::__construct();
    }
    function int($type = "")
    {
        $data["location"] = "int";
        $data["type"] = $type;
        $data["title"] = "TOUR INTERNATIONAL";
        $this->load->view('tour',$data);
    }
    function dom($type = "")
    {
        $data["location"] = "dom";
        $data["type"] = $type;
        $data["title"] = "TOUR DOMESTIK";
        $this->load->view('tour',$data);
    }
    function detail($strId = ""){        
        $query = $this->db->query("select * from t_tour where str_id = '".$strId."'");
        $data["tour"] = $query->row();
        $this->load->view('tour/detail',$data);
    }
}