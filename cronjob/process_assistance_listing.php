<?php
  


  // Initaite Database Class 

  $data = new Database;
 
  // Get Yesturday Date  
  
  $minusOneday = date("Y-m-d", strtotime("-2 days"));

  $minustwoday = date("Y-m-d", strtotime("-1 days"));
  $random = strtotime("-1 days");
  $limit =$record_limt ? $record_limt : 10;

  for ($i=0; $i < $limit; $i++) {

  $api_url = "https://beta.sam.gov/api/prod/sgs/v1/search/?random=$random&index=cfda&q=&page=$i&sort=-modifiedDate&mode=search&is_active=true";
 
// $api_url = "search.json";

// Read JSON file
$json_data = file_get_contents($api_url);

 
// Decode JSON data into PHP array
$listing_data = json_decode($json_data);


// assistance listing  data 

$assistance_listing_array = $listing_data->_embedded->results;
 

$query_parts = array();

$query = 'INSERT INTO assistance_listing (`_rScore`, `_type`, `publishDate`, `assistanceTypes`, `fhNames`, `isActive`, `title`, `objective`, `isFunded`, `historicalIndex`, `modifiedDate`, `organizationHierarchy`, `programNumber`, `_id`) VALUES ';


// $query = 'INSERT INTO assistance_listing (`_rScore`, `_type`, `publishDate`, `assistanceTypes`,`fhNames`,`isActive`,`title`,`objective`,`isFunded`) VALUES ';
// Loop Through assistance listing array 

if(sizeof($assistance_listing_array)>0){
  
  foreach ($assistance_listing_array as $key=>$value) {
      $_id = $value->_id;

      $getResults =  $data->existquery('assistance_listing','_id',$_id);
   
      if(!$getResults){
        $_rScore = addslashes($value->_rScore);
        $_type = addslashes($value->_type);
        $publishDate = addslashes($value->publishDate);
        $assistanceTypes =json_encode(addslashes($value->assistanceTypes));
        $fhNames = addslashes($value->fhNames);
        $isActive = addslashes($value->isActive);
        $title =addslashes($value->title);
        $objective =addslashes($value->objective);
        $isFunded = addslashes($value->isFunded);
        $historicalIndex =json_encode(addslashes($value->historicalIndex));
        $modifiedDate = addslashes($value->modifiedDate);
        $organizationHierarchy =json_encode(addslashes($value->organizationHierarchy));
        $programNumber = addslashes($value->programNumber);
        $_id = addslashes($value->_id);
       
        

        $query_parts[] = "('" . $_rScore . "', '" . $_type . "', '" . $publishDate . "', '" . $assistanceTypes . "', '" . $fhNames . "', '" . $isActive . "', '" . $title . "', '" . $objective . "', '" . $isFunded . "', '" . $historicalIndex . "', '" . $modifiedDate . "', '" . $organizationHierarchy . "', '" . $programNumber . "', '" . $_id . "')";  
        
      }
  }

    $query .= implode(',', $query_parts);
    $data->query($query);
     


}   

}