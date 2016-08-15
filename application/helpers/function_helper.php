<?php

/* 
 * Create By Andi Kurniawan 
 * Publish for e-Vendor
 * @author: andikoerniawan@gmail.com
 * 
 * */
function findUndangan($id){
	$CI =& get_instance();
	$query= $CI->db->query("select count(*) total from undangan_sent where USER_ID = '$id' and `READ` = '0' ");
	if($query->num_rows() == 0 ){
		return 0;
	}else{
		$tmp = $query->row();
		return $tmp->total;
	}
}
function findSubKategori($id,$str){
	$CI =& get_instance();
	$query = $CI->db->query("select * from sub_kategori_barang where KODE_SUB_KATEGORI = '$id'");
	foreach ($query->result() as $tmp){
		$str = $tmp->NAMA_SUB_KATEGORI." / ".$str;
		$str = findSubKategori($tmp->MASTER_KATEGORI, $str);
	}
	return $str;
}
function generateKode($kode){
	$CI =& get_instance();
	$query = $CI->db->query("select * from kode where KODE = '$kode'");
	$str = "";
	foreach ($query->result() as $tmp){
		$str = $tmp->PREFIX;
		$next = $tmp->INTERVAL + 1;
		for($i=0; $i <($tmp->LENGHT - strlen($next+""));$i++){
			$str = $str."0";
		}
		$str = $str.$next;
		$CI->db->query("update kode set `INTERVAL` = '$next' where KODE = '$kode'");
	}
	return $str;
}

function goPage($data=NULL){
	loadView("skin/header");
	loadView("skin/include");
	loadView("skin/body",$data);
	loadView("skin/footer");
}

function goPage_error($data=NULL){
	loadView("skin/header");
	loadView("skin/include");
	loadView("skin/body_error",$data);
	loadView("skin/footer");
}


function goLogin($data=NULL){
	loadView("skin/header");
	loadView("skin/include");
	loadView("login/login_form",$data);
	loadView("skin/footer");
}
function randomPassword(){
	$alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
	$pass = array(); //remember to declare $pass as an array
	$alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
	for ($i = 0; $i < 8; $i++) {
		$n = rand(0, $alphaLength);
		$pass[] = $alphabet[$n];
	}
	return implode($pass);
}
function create_breadcrumbs($link){
	$CI =& get_instance();
	foreach ($link as $key=>$val){
		$CI->breadcrumbs->push($key, $val);
	}
}

function showAlert($text, $category=""){
	return '<div class="alert '.$category.'">
	<button type="button" class="close" data-dismiss="alert">×</button>
	'.$text.'
	</div>';
}

function create_pagination($base_url, $total_rows, $per_page=10,$segment = 3){
	$CI =& get_instance();
	$CI->load->library("pagination");
	
	$config['base_url'] 			= $base_url;
	$config['uri_segment']          = $segment;
	$config['total_rows'] 			= $total_rows;
	$config['per_page'] 			= $per_page; 
	$config['display_pages'] 		= TRUE;
	$config['num_links'] 			= 4;
	$config['full_tag_open'] 		= "<div class=\"pagination\"><ul>";
	$config['full_tag_close'] 		= "</ul></div>";
	$config['first_link'] 			= "First";
	$config['first_tag_open'] 		= "<li>";
	$config['first_tag_close'] 		= "</li>";
	$config['num_tag_open'] 		= '<li>';
	$config['num_tag_close'] 		= '</li>';
	$config['prev_link'] 			= '&lt;';
	$config['prev_tag_open'] 		= '<li>';		
	$config['prev_tag_close'] 		= '</li>';
	$config['cur_tag_open'] 		= '<li class="active"><a href="#">';
	$config['cur_tag_close'] 		= '</a></li>';
	$config['next_link'] 			= '&gt;';
	$config['next_tag_open'] 		= '<li>';
	$config['next_tag_close'] 		= '</li>';
	$config['last_link'] 			= 'Last';
	$config['last_tag_open'] 		= "<li>";
	$config['last_tag_close'] 		= "</li>";
	
	return $CI->pagination->initialize($config); 
}

function mysqlToday(){
	$date_today = date('Y-m-d');
	return $date_today;
}

function checkSession($sessName=null){
	$CI =& get_instance();
	
	if(trim($sessName)=="")
		return $CI->session->userdata();
	else 
		return $CI->session->userdata("$sessName");
}

function isLogin(){
	if(checkSession("username")==""){
		return FALSE;
	}else{
		return TRUE;
	}
}

function escapeStr($str){
	$CI =& get_instance();
	
	return $CI->db->escape_str($str);
}

function postInput($str){
	$CI =& get_instance();
	
	return escapeStr($CI->input->post("$str"));
}

function loadModel($model){
	$CI =& get_instance();
	
	if(is_array($model)){
		foreach ($model as $each){
			loadModel($each);
		}
	}else{	
		return $CI->load->model("$model");
	}
}

function loadLibrary($library){
	$CI =& get_instance();
	
	if(is_array($library)){
		foreach ($library as $each){
			loadLibrary($each);
		}
	}else{	
		return $CI->load->library("$library");
	}
}

function loadView($view,$data=null){
	$CI =& get_instance();
	
	if(is_array($view)){
		foreach ($view as $each){
			loadView($each,$data);
		}
	}else{	
		return $CI->load->view("$view",$data);
	}
}

function getLastId(){
	$CI =& get_instance();
	return $CI->db->insert_id();
}

function setSession($arrayUserData){
	$CI =& get_instance();
	
	return $CI->session->set_userdata($arrayUserData);
}

function sessionValue($sessionName){
	$CI =& get_instance();
	
	return $CI->session->userdata("$sessionName");
}

function mysqldatetime(){
	$CI =& get_instance();
	$datestring = "%Y-%m-%d %H:%i:%s";
	$time = time();
	return mdate($datestring, $time);
}

function convertToNumber($number){
	$tmp = explode(",", $number);
	return str_replace(".", "", $tmp[0]);
}

// HADI
function convert_date_to_html_date_complete($date,$showTime=false){
	$tmp["01"] = "Januari";
	$tmp["02"] = "Februari";
	$tmp["03"] = "Maret";
	$tmp["04"] = "April";
	$tmp["05"] = "Mei";
	$tmp["06"] = "Juni";
	$tmp["07"] = "Juli";
	$tmp["08"] = "Augustus";
	$tmp["09"] = "September";
	$tmp["10"] = "Oktober";
	$tmp["11"] = "November";
	$tmp["12"] = "Desember";
	
	$result = "";
	
	if(empty($date)||$date=='0000-00-00 00:00:00'||$date=='0000-00-00'||$date==NULL)
		return $result = "";
	
	$tmpExp = explode(" ", $date);
	$tmpDate = (!empty($tmpExp[0]))?$tmpExp[0]:"";
	$tmpTime = (!empty($tmpExp[1]))?$tmpExp[1]:"";
	
	$subDate = explode("-", $tmpDate);
	$result = $subDate[2]." ".$tmp[$subDate[1]]." ".$subDate[0];
	
	if($showTime)
		$result .= " ".$tmpTime;
	
	return $result;
}

function bulan($month){
	$tmp["01"] = "Januari";
	$tmp["02"] = "Februari";
	$tmp["03"] = "Maret";
	$tmp["04"] = "April";
	$tmp["05"] = "Mei";
	$tmp["06"] = "Juni";
	$tmp["07"] = "Juli";
	$tmp["08"] = "Augustus";
	$tmp["09"] = "September";
	$tmp["10"] = "Oktober";
	$tmp["11"] = "November";
	$tmp["12"] = "Desember";
	
	$result = $tmp[$month];
	
	return $result;
}

function setNumberFormat($val){
	if($val!=''){
		$setNumberFormat = number_format($val,2,',','.');	
	}else if($val==0){
		$setNumberFormat = '0,00';
	}else{
		$setNumberFormat = NULL;
	}
	
	return $setNumberFormat;
}

function setNumberFormatNoDesimal($val){
	if($val!=""){
		$setNumberFormat = number_format($val,0,',','.');
		return $setNumberFormat;
	}else{
		return NULL;
	}
	
}
// END HADI