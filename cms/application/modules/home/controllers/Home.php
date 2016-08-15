<?php
class Home extends CI_Controller{
    function Home(){     
        parent::__Construct();   
        if(!isset($_SESSION["username"])){
            redirect(site_url('login'));
        }
    }
    function index(){
        $this->load->view("home");
    }
    function get_menus(){
        $query = $this->db->query("select * from m_menus where menu_parent = 0 and id in (select menu_parent from m_menus inner join m_role_menus on m_role_menus.menu_id = m_menus.id where role_id = '".$_SESSION["role"]."');");
        foreach($query->result() as $tmp){
            echo "<li>";
            echo "<a> ". $tmp->menu.'<span class="fa fa-chevron-down"></span></a>';
            $this->get_sub_menu($tmp->id);
            echo "</li>";
        }
    }
    function get_sub_menu($id){
        $query = $this->db->query("select * from m_menus where menu_parent = '".$id."';");
        echo ('<ul class="nav child_menu" style="display: none">');
        foreach($query->result() as $tmp){
            echo ("<li>");
            echo ("<a onclick='go_menu(\"$tmp->menu_file\")'>".$tmp->menu. "</a>");
            echo ("</li>");
        }
        echo ("</ul>");
    }
}