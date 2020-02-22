<?php
  
  // Include Configuration File 

  include '../includes/config.php';

  // Include Database Class 

  include '../classes/database.php';

  // Initaite Database Class 

  $data = new Database;
 
  // Get Yesturday Date  
  
  $minusOneday = date("Y-m-d", strtotime("-2 days"));

  $minustwoday = date("Y-m-d", strtotime("-1 days"));

 $api_url = "https://beta.sam.gov/api/prod/sgs/v1/search/?random=1582309815968&index=wd&q=&page=0&sort=-modifiedDate&mode=search&is_active=true&is_standard=true";
 
// $api_url = "search.json";

// Read JSON file
$json_data = file_get_contents($api_url);

 
// Decode JSON data into PHP array
$listing_data = json_decode($json_data);


// assistance listing  data 

$wage_determination_array = $listing_data->_embedded->results;

// echo '<pre>';
// print_r($wage_determination_array);exit();
$query_parts = array();

$query = 'INSERT INTO wage_determination (`year`, `shortReferenceNumber`, `revisionNumber`, `suggestion`, `_rScore`, `publishDate`, `_type`, `indexedDate`, `allReferenceNumbers`, `type`, `title`, `isActive`, `fullReferenceNumber`, `isStandard`, `constructionTypes`, `modifiedDate`, `location`, `_id`) VALUES ';


// $query = 'INSERT INTO assistance_listing (`_rScore`, `_type`, `publishDate`, `assistanceTypes`,`fhNames`,`isActive`,`title`,`objective`,`isFunded`) VALUES ';
// Loop Through assistance listing array 

if(sizeof($wage_determination_array)>0){
  
  foreach ($wage_determination_array as $key=>$value) {
      $_id = $value->_id;
      $getResults =  $data->existquery('wage_determination','_id',$_id);
  
      if(!$getResults){
        $year =addslashes($value->year);
        $shortReferenceNumber =addslashes($value->shortReferenceNumber);
        $revisionNumber = addslashes($value->revisionNumber);
        $suggestion =json_encode(addslashes($value->suggestion));
        $_rScore = addslashes($value->_rScore);
        $publishDate = addslashes($value->publishDate);
        $_type = addslashes($value->_type);
        $indexedDate = addslashes($value->indexedDate);
        $allReferenceNumbers =json_encode(addslashes($value->allReferenceNumbers));
        $type =json_encode(addslashes($value->type));
        $title =addslashes($value->title);
        $isActive =addslashes($value->isActive);
        $fullReferenceNumber =addslashes($value->fullReferenceNumber);
        $isStandard =addslashes($value->isStandard);
        $constructionTypes =json_encode(addslashes($value->constructionTypes));
        $modifiedDate = addslashes($value->modifiedDate) ;
        $location =json_encode(addslashes($value->location));
        $_id = addslashes($value->_id);
        
        $query_parts[] = "('" . $year . "', '" . $shortReferenceNumber . "', '" . $revisionNumber . "', '" . $suggestion . "', '" . $_rScore . "', '" . $publishDate . "', '" . $_type . "', '" . $indexedDate . "', '" . $allReferenceNumbers . "', '" . $type . "', '" . $title . "', '" . $isActive . "', '" . $fullReferenceNumber . "', '" . $isStandard . "', '" . $constructionTypes . "', '" . $modifiedDate . "', '" . $location . "', '" . $_id . "')";  
        
      }
  }

    $query .= implode(',', $query_parts);
    $data->query($query);
     


}   

