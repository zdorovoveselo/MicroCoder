<?php

namespace MicroServices;

class ServerService
{
	private $server;

	public function __construct() {
		$this->server = $_SERVER;
	}

	public function printServer($a) {
		\d::p($this->server);
	}
}