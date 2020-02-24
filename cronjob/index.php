<?php
// Include Configuration File 
include '../includes/config.php';
// Include Database Class
//$_SESSION['from'] = '';
include '../classes/database.php';
include_once 'process_contract_data.php';
include_once 'process_opportunity.php';
include_once 'process_awards.php';
include_once 'process_assistance_listing.php';
include_once 'process_entity_information.php';
include_once 'process_federal_hierarchy.php';
include_once 'process_wage_determination.php';
?>