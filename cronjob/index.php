<?php
// Include Configuration File 
include 'config.php';
// Include Database Class
//$_SESSION['from'] = '';
include 'database.php';

$from = $_SESSION['from'] ? $_SESSION['from'] : 10;
$to = $_SESSION['from']+10;
$_SESSION['from'] = $to;
include_once 'process_opportunity.php';
exit();
include_once 'process_federal_hierarchy.php';
include_once 'process_contract_data.php';
include_once 'process_new_opportunity.php';
include_once 'process_awards.php';
include_once 'process_assistance_listing.php';
include_once 'process_entity_information.php';
include_once 'process_wage_determination.php';

?>