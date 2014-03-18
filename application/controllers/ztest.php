<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public $em;

	function __construct() {
		parent::__construct();
		$this -> em = $this -> doctrine -> em;
	}

	public function index() {
		//$this->load->view('welcome_message');
		//$userRepository = $this -> em -> getRepository('Entity/User');
		//$users = $userRepository -> findAll();
		//$users = $this->em->findAll('Entity\User');
		$user = $this -> em -> find('Entity\User', 2);

		//foreach ($users as $user) {
		echo sprintf("-%s\n", $user -> getFirstname() . " <br/>");
		//}
		$user = $this -> em -> getRepository('Entity\User') -> findOneBy(array('email' => 'paxm@gmail.com'));
		echo $user -> getFirstname() . ' ' . $user -> getLastname() . ' is glad he isn\'t dealing with Symfony.<br />';

		$q = $this -> em -> createQuery('select u from Entity\User u where u.firstname = ?1');
		$q -> setParameter(1, 'Pax');
		$garfield = $q -> getSingleResult();

		echo "Hello " . $garfield -> getLastname() . " ! <br/>";

	}

	public function save() {
		$user = new Entity\User;
		$user -> setPassword('ajgf');
		$user -> setEmail('ajgf@gmail.com');
		$user -> setFirstname('AJGF');
		$user -> setLastname('SIIP');

		$this -> em -> persist($user);
		$this -> em -> flush();
	}

	public function test() {
		$this -> load -> view('ztest');
	}

	private function _submit_validate() {
		$this -> form_validation -> set_rules('username', 'Username', 'required|alpha_numeric|min_length[6]|max_length[12]|unique[User.username]');
		$this -> form_validation -> set_rules('email', 'E-mail', 'required|valid_email|unique[User.email]');
	}

}
