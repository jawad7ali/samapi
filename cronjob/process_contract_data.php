<?php
  // Initaite Database Class 
  $data = new Database;
  // Get Yesturday Date  
  
  $minusOneday = date("Y-m-d", strtotime("-2 days"));
  $minustwoday = date("Y-m-d", strtotime("-1 days"));
  $random = strtotime("-1 days");
  $limit =$record_limt ? $record_limt : 10;

  $from = $_SESSION['from'] ? $_SESSION['from'] : 10;
  $to = $_SESSION['from'] + 10;
  $_SESSION['from'] = $to;

  for ($c=$from; $c < $to ; $c++) {

    $api_url = "https://beta.sam.gov/api/prod/sgs/v1/search/?random=$random&index=fpds&q=&page=$c&sort=-modifiedDate&mode=search&is_active=true";
    // $api_url = "search.json";
    // Read JSON file
    $json_data = file_get_contents($api_url);
    // Decode JSON data into PHP array
    $listing_data = json_decode($json_data);
    // assistance listing  data 
    $contract_data_array = $listing_data->_embedded->results;
    $query_parts = array();
    $query = 'INSERT INTO contract_data (`identifiers`, `purchaser`, `vendor`, `_rScore`, `contract`, `_type`, `_id`, `productOrService`, `isActive`, `type`, `awardType`) VALUES ';
    // $query = 'INSERT INTO assistance_listing (`_rScore`, `_type`, `publishDate`, `assistanceTypes`,`fhNames`,`isActive`,`title`,`objective`,`isFunded`) VALUES ';
    // Loop Through assistance listing array 
    if(sizeof($contract_data_array)>0){
      
      foreach ($contract_data_array as $key=>$value) {
          $_id = $value->_id;
          $getResults =  $data->existquery('contract_data','_id',$_id);
          
          if(!$getResults){
            $identifiers =json_encode(addslashes($value->identifiers));
            $purchaser =json_encode(addslashes($value->purchaser));
            $vendor =json_encode(addslashes($value->vendor));
            $_rScore =addslashes($value->_rScore);
            $contract =json_encode(addslashes($value->contract));
            $_type = addslashes($value->_type);
            $_id =addslashes($value->_id);
            $productOrService =json_encode(addslashes($value->productOrService));
            $isActive =addslashes($value->isActive);
            $type =addslashes($value->type);
            $awardType =json_encode(addslashes($value->awardType));
            
            $query_parts[] = "('" . $identifiers . "', '" . $purchaser . "', '" . $vendor . "', '" . $_rScore . "', '" . $contract . "', '" . $_type . "', '" . $_id . "', '" . $productOrService . "', '" . $isActive . "', '" . $type . "', '" . $awardType . "')";
          }
      }
    $query .= implode(',', $query_parts);
   // echo $query;
    $data->query($query);  

  } 

}