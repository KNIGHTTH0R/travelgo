<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailTour extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

    function index()
    {
      $this->load->view('detailTour_view');
    }
}
?>