<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * mx2
 * 
 * A free and open source web based forum system
 *
 * @package		mx2
 * @author		BYOOS solutions
 * @copyright	Copyright (c) 2018 GPL
 * @license		http://www.byoos.net
 * @link		http://www.byoos.eu
 * 
 */

class MY_Controller extends MX_Controller {

    public function __construct()
    {
		
		parent::__construct();

		$this->config->load('mx');
		$this->load->library(array('session', 'counter'));
		$this->load->helper(array('url', 'html', 'language'));
		(!$this->session->userdata('site_lang')) ? $this->session->set_userdata('site_lang', $this->config->item('language')) : $this->session->userdata('site_lang');
		$this->lang->load('mx', $this->session->userdata('site_lang'));

	}

}
