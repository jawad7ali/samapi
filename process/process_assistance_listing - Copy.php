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
	
	$lId  =trim($_GET['lId']);
	$data->deletequery('assistance_listing','lId',$lId);
	$_SESSION['assistance']['save'] = 'Assistance listing deleted successfully !';
	
	header('location:'.$_SERVER['HTTP_REFERER']);

}

 ?>