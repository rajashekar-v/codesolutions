<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CI_Login extends CI_Controller{

    protected $table;

    protected $email;

    protected $password;

    public function __construct(){

        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
	{
        $data["appview"] = "login";
		$this->load->view('layouts/app',$data);
    }
    
    public function setEmail($email){
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }   

    public function setPassword($password){

        $this->password = $this->EncryptPassword($password);
    }

    public function getPassword(){

        $this->password;
    }

    public function getCredentials(){
        $credentials = [
            "email"=>$this->getEmail(),
            "password"=>$this->getPassword(),
        ];

        return $credentials;
    }

    public function Authenticate(){

        
    }
}




?>