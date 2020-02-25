<?php
  


  // Initaite Database Class 

  $data = new Database;
 
  // Get Yesturday Date  
  
  $minusOneday = date("Y-m-d", strtotime("-2 days"));

  $minustwoday = date("Y-m-d", strtotime("-1 days"));
  $random = strtotime("-1 days");
  $limit =$record_limt ? $record_limt : 10;


  for ($r=$from; $r < $to ; $r++) {

  //for ($r=0; $r < $limit ; $r++) {

 $api_url = "https://beta.sam.gov/api/prod/sgs/v1/search/?random=$random&index=ei&q=&page=$r&sort=title&mode=search&is_active=true";
 
// $api_url = "search.json";

// Read JSON file
$json_data = file_get_contents($api_url);

 
// Decode JSON data into PHP array
$listing_data = json_decode($json_data);


// assistance listing  data 

$entity_information_array = $listing_data->_embedded->results;

$query_parts = array();

$query = 'INSERT INTO entity_information (`address`, `dodaac`, `_rScore`, `suggestion`, `_type`, `hasDelinquentDebt`, `cageCode`, `isActive`, `title`, `registrationPurpose`, `registrationExpirationDate`, `nCageCode`, `hasExclusions`, `name`, `_id`, `dunsNumber`, `organizationHierarchy`, `samNumber`, `activationDate`, `terminationDate`, `classification`, `ctCode`, `type`) VALUES ';


// $query = 'INSERT INTO assistance_listing (`_rScore`, `_type`, `publishDate`, `assistanceTypes`,`fhNames`,`isActive`,`title`,`objective`,`isFunded`) VALUES ';
// Loop Through assistance listing array 

if(sizeof($entity_information_array)>0){
  
  foreach ($entity_information_array as $key=>$value) {
      $_id = $value->_id;

      $getResults =  $data->existquery('entity_information','_id',$_id);
   
      if(!$getResults){
        $address =json_encode(addslashes($value->address));
      	$dodaac = addslashes($value->dodaac);
        
        $_rScore = addslashes($value->_rScore);
        $suggestion =json_encode(addslashes($value->suggestion));
      	

        $_type = addslashes($value->_type);
        
        $hasDelinquentDebt = addslashes($value->hasDelinquentDebt);
        
        $cageCode =json_encode(addslashes($value->cageCode));
        $isActive = addslashes($value->isActive);
        $title =addslashes($value->title);
        
        $registrationPurpose =addslashes($value->registrationPurpose);
        
        $registrationExpirationDate = addslashes($value->registrationExpirationDate);
        
        $nCageCode = addslashes($value->nCageCode);
        
        $hasExclusions = addslashes($value->hasExclusions);
        $name = addslashes($value->name);
        $_id = addslashes($value->_id);
        $dunsNumber = addslashes($value->dunsNumber);
         
        $samNumber = addslashes($value->samNumber);
        $activationDate = addslashes($value->activationDate);
        $terminationDate = addslashes($value->terminationDate);
        $classification =json_encode(addslashes($value->classification));
        $ctCode = addslashes($value->ctCode);
        $type =json_encode(addslashes($value->type));
        
        $query_parts[] = "('" . $address . "', '" . $dodaac . "', '" . $_rScore . "', '" . $suggestion . "', '" . $_type . "', '" . $hasDelinquentDebt . "', '" . $cageCode . "', '" . $isActive . "', '" . $title . "', '" . $registrationPurpose . "', '" . $registrationExpirationDate . "', '" . $nCageCode . "', '" . $hasExclusions . "', '" . $name . "', '" . $_id . "', '" . $dunsNumber . "', '" . $organizationHierarchy . "', '" . $samNumber . "', '" . $activationDate . "', '" . $terminationDate . "', '" . $classification . "', '" . $ctCode . "' , '" . $type . "' )";  
        
      }
  }

    $query .= implode(',', $query_parts);
    $data->query($query);
     


}   

}