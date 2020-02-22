<?php 
 // Include Configuration File 

  include '../includes/config.php';

  // Include Database Class 
  include '../classes/database.php';

  // Initaite Database
  $data = new Database;


//print_r($_REQUEST); exit;
if ( isset ($_GET['action'])  and  ($_GET['action']=='d'))
{
	
	$cId  =trim($_GET['cId']);
	$_SESSION['contract']['save'] = 'Contract deleted successfully !';
	$data->deletequery('contract_data','cId',$cId);
	header('location:'.$_SERVER['HTTP_REFERER']);

}

 ?>