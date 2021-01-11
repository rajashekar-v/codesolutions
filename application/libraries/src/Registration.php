<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CI_Registration extends CI_Controller{


    public function __construct(){

        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
	{
        $data["appview"] = "registration";
		$this->load->view('layouts/app',$data);
    }

    public function EncryptPassword($password){
        return password_hash($password);
    }
}

?>

