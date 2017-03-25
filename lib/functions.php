<?php

function getContent() {
	if(isset($_GET['home'])) {
		include __DIR__.'/../pages/home.php';
	} if(empty($_GET)) {
		include __DIR__.'/../pages/home.php';
	} if(isset($_GET['admin'])) {
		include __DIR__.'/../public/admin.php';
	}
}

function getPart($name) {
	if(!isset($_GET["admin"])) {
		include __DIR__ . '/../parts/'. $name . '.php';
	}
}

function home() {
	echo 'function home ok';
}

function admin() {
	echo 'function admin ok';
}

?>
