<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	function pages($content, $data = NULL){
        $data['contentnya'] = $this->load->view($content, $data, TRUE);

        $this->load->view('template', $data);
    }
}
