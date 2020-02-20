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
	
	$id  =trim($_GET['id']);
	$_SESSION['awards']['save'] = 'Award deleted successfully !';
	$data->deletequery('awards','id',$id);
	header('location:'.$_SERVER['HTTP_REFERER']);

}

 ?>