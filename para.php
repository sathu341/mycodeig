<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Para extends CI_Controller {
    var $name;
    var $idno;
    function __construct(){  
        	    parent::__construct();  
        	// passing value  
        	$this->name="PHP Frame Work";  
            $this->idno=546;
        	}  
        

    function  tut(){
    $data['name']=$this->name;
    $data['idno1']=$this->idno;

    $this->load->view('para_view',$data);
    }


}


?>