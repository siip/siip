<?php
if (!defined('BASEPATH'))
	die();

class UserController extends SIIP_Controller {

	public function create() {

		$this -> form_validation -> set_rules('firstname', 'Prénom', 'required');
		$this -> form_validation -> set_rules('lastname', 'Nom', 'required');
		$this -> form_validation -> set_rules('password', 'Password', 'required|matches[passconf]');
		$this -> form_validation -> set_rules('passconf', 'Password Confirmation', 'required');
		$this -> form_validation -> set_rules('email', 'Email', 'required|valid_email');

		$this -> load -> view('include/header');
		if ($this -> form_validation -> run() == FALSE) {
			$data['user'] = new Entity\User;
			$this -> load -> view('user/create', $data);
		} else {
			$user = new Entity\User;
			$user -> setFirstname($this -> input -> post('firstname'));
			$user -> setLastname($this -> input -> post('lastname'));
			$user -> setEmail($this -> input -> post('email'));
			$user -> setPassword($this -> input -> post('password'));
			$this -> getEM() -> persist($user);
			$this -> getEM() -> flush();

			$this -> load -> view('user/success');
		}
		$this -> load -> view('include/footer');
	}

	public function read() {
		$id = $this -> uri -> segment(3);
		if ($id != '' && is_numeric($id)) {
			$data['user'] = $this -> getEM() -> find('Entity\User', $id);
		} else {
			$data['user'] = new Entity\User;
		}
		$this -> load -> view('include/header');
		$this -> load -> view('user/create', $data);
		$this -> load -> view('include/footer');
	}

}
