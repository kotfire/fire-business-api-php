<?php

namespace Fire\Business\Api;

use Fire\Business\Api;
use Fire\Business\ListResource;

class PayeeList extends ListResource {
	
	public function __construct(Api $api) {
		parent::__construct($api);

		$this->solution = array();
		$this->uri = "v1/fundingsources";
	}

	public function read() {
    		return $this->api->fetch("GET", $this->uri);
   	}

}
