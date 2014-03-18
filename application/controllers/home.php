<?php
if (!defined('BASEPATH'))
	die();

class Home extends SIIP_Controller {

	public function index() {
		$data['users'] = $this -> getRepository('Entity\User') -> findAll();

		$this -> load -> view('include/header');
		$this -> load -> view('home', $data);
		$this -> load -> view('include/footer');
	}

}
