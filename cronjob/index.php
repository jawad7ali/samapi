<?php
//session_start();
// Include Database Class

include 'database.php';

setcookie("from", $_COOKIE["from"]+10, time()+30*24*60*60);
$rec =  $_COOKIE["from"];
$from = $rec-10;
$to =$rec;


// $from = $_SESSION['from'] ? $_SESSION['from'] : 10;
// $to = $_SESSION['from']+10;
// $_SESSION['from'] = $to;

// echo $_SESSION['from'];

include_once 'process_opportunity.php';
include_once 'process_federal_hierarchy.php';
include_once 'process_contract_data.php';
include_once 'process_new_opportunity.php';
include_once 'process_awards.php';
include_once 'process_assistance_listing.php';
include_once 'process_entity_information.php';
include_once 'process_wage_determination.php';

?>