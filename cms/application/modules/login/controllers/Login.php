<?php
class Login extends CI_Controller{
    function index(){
        $this->load->view("login");
    }
    function do_login(){
        $username = (isset($_POST["username"]))?$_POST["username"]:"";
        $password = (isset($_POST["password"]))?$_POST["password"]:"";
        $query = $this->db->query("select m_users.*,'1' status from m_users where username = '$username' and `password` = '$password'");
        if($query->num_rows() > 0){
            $data = $query->row();
            $_SESSION["username"] = $data->username;
            $_SESSION["password"] = $data->password;
            $_SESSION["name"] = $data->name;
            $_SESSION["role"] = $data->role;
            echo json_encode($data);
        }else{
            echo json_encode(array("status"=>'0',"msg"=>"Invalid username or password"));
        }
    }
    function do_logout(){
        $this->session->sess_destroy();
    }
}