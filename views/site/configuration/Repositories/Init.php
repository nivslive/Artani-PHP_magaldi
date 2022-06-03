<?php

      require  __DIR__.DIRECTORY_SEPARATOR.'Component.php';
      require  __DIR__.DIRECTORY_SEPARATOR.'Layout.php';

class Repositories {



	public function __construct() {
		new Layout;
		new Component;
	}

}