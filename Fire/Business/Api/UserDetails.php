<?php

namespace Fire\Business\Api;

use Fire\Business\Api;
use Fire\Business\InstanceResource;

class UserDetails extends InstanceResource {
	
	public function __construct(Api $api) {
		parent::__construct($api);

		$this->solution = array();
		$this->uri = "v1/me";
	}

	public function read() {
    		return $this->api->fetch("GET", $this->uri);
   	}

}
