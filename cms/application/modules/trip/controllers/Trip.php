<?php class Trip extends CI_Controller{
    function trip(){
        parent::__Construct();  
    }   
    function index(){
        $this->load->view("trip");
    } 
    function get_table(){
        $query = $this->db->query("select * from t_tour");
        $i = 0;
        foreach($query->result() as $tmp){
            $i++;
            echo "<tr>";
            echo "<td>".$i."</td>";
            echo "<td id='tour_name_".$tmp->id."'>".$tmp->tour_name."</td>";
            echo "<td id='tour_description_".$tmp->id."'>".$tmp->tour_description."</td>";
            echo "<td id='tour_type_".$tmp->id."'>".$tmp->tour_type."</td>";
            echo "<td id='tour_location_".$tmp->id."'>".$tmp->tour_location."</td>";
            echo "<td><a class='btn btn-info btn-xs' onclick='do_manage(\"".$tmp->id."\")'><i class='fa fa-pencil'></i> Manage</a><a class='btn btn-danger btn-xs' onclick='do_remove(\"".$tmp->id."\")'><i class='fa fa-close'></i> Delete</a></td>";
            echo "</tr>";
        }
    }
}