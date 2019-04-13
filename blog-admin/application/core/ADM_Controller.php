<?php defined('BASEPATH') OR exit('No direct script access allowed');

class ADM_Controller extends CI_Controller {
	function pages($content, $data = NULL){
        $data['adm_content'] = $this->load->view($content, $data, TRUE);

        $this->load->view('template', $data);
    }
}
