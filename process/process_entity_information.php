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
	
	$eId  =trim($_GET['eId']);
	$data->deletequery('entity_information','eId',$eId);
	$_SESSION['entity']['save'] = 'Entity information deleted successfully !';
	
	header('location:'.$_SERVER['HTTP_REFERER']);

}

 ?>