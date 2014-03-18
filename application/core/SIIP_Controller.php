<?php
class SIIP_Controller extends CI_Controller {

	private $em;

	function __construct() {
		parent::__construct();
		$this -> em = $this -> doctrine -> em;
	}

	public function getEM() {
		return $this -> em;
	}

	public function getRepository($entityName) {
		return $this -> getEM() -> getRepository($entityName);
	}

}
