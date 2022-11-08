<?php

/**
 * Helpers
 */
class Helpers
{
	
	function base_url() {
		return $base_url = 'http://127.0.0.1:8080/penjualan/';
	}

	function template($view, $data = '') {
		$base_url = $this->base_url();
		$data = $data;
		$nama = 'test';

		include 'views/includes/header.php';
		include 'views/'.$view;
		include 'views/includes/footer.php';
	}

	function load_view($view, $data = '') {
		$base_url = $this->base_url();
		$data = $data;
		include 'views/'.$view;	
	}

	function isloggedin() {
		$base_url = $this->base_url();

		if(! isset($_SESSION['userid'])) {
			header('location: '.$base_url.'/login');
			return false;
		}
		else
			return true;
	}

}
