<?php
//session_start();
// Include Database Class

include 'database.php';

$data = new database();
$result = $data->con->query("SELECT count FROM cronjob");
$datao  =   $result->fetch_assoc();
$limit =10;
if(mysqli_num_rows($result))
{
	$limit =$datao['count'];
}

$from = $limit;
$to =$limit+10;


include_once 'process_opportunity.php';
include_once 'process_federal_hierarchy.php';
include_once 'process_contract_data.php';
include_once 'process_new_opportunity.php';
include_once 'process_awards.php';
include_once 'process_assistance_listing.php';
include_once 'process_entity_information.php';
include_once 'process_wage_determination.php';

$sql = "update cronjob SET count='$to' where id=1 ";
if ($data->con->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
 

?>