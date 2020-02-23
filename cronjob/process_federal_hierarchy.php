<?php
  


  // Initaite Database Class 

  $data = new Database;
 
  // Get Yesturday Date  
  
  $minusOneday = date("Y-m-d", strtotime("-2 days"));

  $minustwoday = date("Y-m-d", strtotime("-1 days"));
  $random = strtotime("-1 days");
  $limit =$record_limt ? $record_limt : 10;
  for ($f=0; $f < $limit ; $f++) {
    
    $api_url = "https://beta.sam.gov/api/prod/sgs/v1/search/?random=$random&index=fh&q=&page=$f&sort=-modifiedDate&mode=search&is_active=true";
 
// $api_url = "search.json";

// Read JSON file
$json_data = file_get_contents($api_url);

 
// Decode JSON data into PHP array
$listing_data = json_decode($json_data);


// assistance listing  data 

$federal_hierarchy_array = $listing_data->_embedded->results;
 

$query_parts = array();

$query = 'INSERT INTO federal_hierarchy (`suggestion`, `_rScore`, `modifiedDate`, `_type`, `description`, `organizationHierarchy`, `indexedDate`, `_id`, `title`, `type`, `shortName`, `isActive`, `cgac`) VALUES ';


// $query = 'INSERT INTO assistance_listing (`_rScore`, `_type`, `publishDate`, `assistanceTypes`,`fhNames`,`isActive`,`title`,`objective`,`isFunded`) VALUES ';
// Loop Through assistance listing array 

if(sizeof($federal_hierarchy_array)>0){
  
  foreach ($federal_hierarchy_array as $key=>$value) {
      $_id = $value->_id;

      $getResults =  $data->existquery('federal_hierarchy','_id',$_id);
   
      if(!$getResults){
        $suggestion =json_encode(addslashes($value->suggestion));
        $_rScore = addslashes($value->_rScore);
        $modifiedDate = addslashes($value->modifiedDate);
        $_type = addslashes($value->_type);
        $description = addslashes($value->description);
        $organizationHierarchy =json_encode(addslashes($value->organizationHierarchy));
        $indexedDate = addslashes($value->indexedDate);
        $_id = addslashes($value->_id);
        $title =addslashes($value->title);
        $type =addslashes($value->type);
        $shortName = addslashes($value->shortName);
        $isActive =json_encode(addslashes($value->isActive));
        $cgac = addslashes($value->cgac);
        

        $query_parts[] = "('" . $suggestion . "', '" . $_rScore . "', '" . $modifiedDate . "', '" . $_type . "', '" . $description . "', '" . $organizationHierarchy . "', '" . $indexedDate . "', '" . $_id . "', '" . $title . "', '" . $type . "', '" . $shortName . "', '" . $isActive . "', '" . $cgac . "')";  
        
      }
  }

    $query .= implode(',', $query_parts);
    $data->query($query);
  }
}   

