<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller {
    public function regForm(){
        $this->load->view('RegisterForm');
    }

}

?>