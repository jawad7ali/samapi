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
	
	$wId  =trim($_GET['wId']);
	$_SESSION['wage']['save'] = 'Wage determination deleted successfully !';
	$data->deletequery('wage_determination','wId',$wId);
	header('location:'.$_SERVER['HTTP_REFERER']);

}

 ?>