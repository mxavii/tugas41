<?php

require __DIR__ . '/vendor/autoload.php';

use App\Controller\Controller;

$main = new Controller();


if(isset($_GET['edit'])){
	$nopol = $_GET['edit'];
	$main->viewEdit($nopol);
}else if(isset($_GET['del'])){
	$nopol = $_GET['del'];
	$main->delete($nopol);
}else if(isset($_GET['add'])){
	$main->viewInsert();
}else{
	$main->index();
}
?>
