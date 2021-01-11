<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sessionManage extends CI_Controller{ 

    public function __construct(){
        
        parent::__construct();
        $this->load->library("session");
    }


}

?>