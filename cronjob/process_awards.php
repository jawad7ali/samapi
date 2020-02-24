<?php
  


  // Initaite Database Class 

  $data = new Database;
 
  // Get Yesturday Date  
  
  $minusOneday = date("m/d/Y", strtotime("-2 days"));

  $minustwoday = date("m/d/Y", strtotime("-1 days"));
  $random = strtotime("-1 days");
  $limit =$record_limt ? $record_limt : 10;
  
  $from = $_SESSION['from'] ? $_SESSION['from'] : 10;
  $to = $_SESSION['from'] + 10;
  $_SESSION['from'] = $to;

  for ($a=$from; $a < $to ; $a++) {

  //for ($a=0; $a < $limit ; $a++) {

$api_url = "https://beta.sam.gov/api/prod/sgs/v1/search/?random=$random&index=cfda,opp,fh,ei,wd,fpds&q=&page=$a&sort=-modifiedDate&mode=search&is_active=true";
 
 //$api_url = "search.json";

// Read JSON file
$json_data = file_get_contents($api_url);
 
// Decode JSON data into PHP array
$user_data = json_decode($json_data);

// Oppertunities data 

$awards_array = $user_data->_embedded->results;

 
$query_parts = array();

$query = 'INSERT INTO awards (`isCanceled`, `_rScore`, `_type`, `publishDate`, `isActive`, `title`, `type`, `descriptions`, `solicitationNumber`,   `responseDate`, `parentNoticeId`, `award`, `modifiedDate`, `organizationHierarchy`, `_id`, `modifications`) VALUES ';

// Loop Through Oppertunities

if(sizeof($awards_array)>0){
  
  foreach ($awards_array as $key=>$value) {
      $_id = $value->_id;

      $getResults =  $data->existquery('awards','_id',$_id);
   
      if(!$getResults){
        $isCanceled =addslashes($value->isCanceled);
        $_rScore =addslashes($value->_rScore);
        $_type =addslashes($value->_type);
        $publishDate =addslashes($value->publishDate);
        $isActive = $value->isActive;
        $title =addslashes($value->title);
        $type =json_encode(addslashes($value->type)); 
        $descriptions =json_encode(addslashes($value->descriptions)); 
        $solicitationNumber =addslashes($value->solicitationNumber);
        $responseDate =addslashes($value->responseDate);
        $parentNoticeId =addslashes($value->parentNoticeId);
        $award =json_encode(addslashes($value->award)); 
        $modifiedDate =addslashes($value->modifiedDate);
        $organizationHierarchy =json_encode(addslashes($value->organizationHierarchy)); 
        $_id =addslashes($value->_id);
        $modifications =json_encode(addslashes($value->modifications));
       
        
        $query_parts[] = "('" . $isCanceled . "', '" . $_rScore . "', '" . $_type . "','" . $publishDate . "', '" . $isActive . "', '" . $title . "', '" . $type . "', '" . $descriptions . "', '" . $solicitationNumber . "', '" . $responseDate . "', '" . $parentNoticeId . "', '" . $award . "', '" . $modifiedDate . "', '" . $organizationHierarchy . "', '" . $_id . "', '" . $modifications . "')";   
      }
  }

    $query .= implode(',', $query_parts);
    $data->query($query);

}   

}