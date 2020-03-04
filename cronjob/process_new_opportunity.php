<?php
  


  // Initaite Database Class 

  $data = new Database;
 
  // Get Yesturday Date  
  
  $minusOneday = date("m/d/Y", strtotime("-2 days"));

  $minustwoday = date("m/d/Y", strtotime("-1 days"));

  $random = strtotime("-1 days");


  //for ($o=0; $o < $limit ; $o++) {

  $api_url = "https://beta.sam.gov/api/prod/sgs/v1/search/?random=$random&index=opp&q=&page=0&sort=-modifiedDate&mode=search&is_active=true";

 //$api_url = "https://api.sam.gov/prod/opportunities/v1/search?limit=100&api_key=M75D1gGx7BzDJkFCudsSjNObhFPDiZlaZEOrHMIl&postedFrom=$minusOneday&postedTo=$minustwoday";

 //$api_url = "search.json";

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$user_data = json_decode($json_data);
 
// Oppertunities data 

$opportunities_array = $user_data->_embedded->results;
 
$query_parts = array();

$query = 'INSERT INTO opportunities (`noticeId`, `title`, `solicitationNumber`, `department`, `subTier`, `office`, `postedDate`, `type`, `baseType`, `archiveType`, `active`, `award`, `pointOfContact`, `description`, `officeAddress`, `placeOfPerformance`, `links`, `lastResponseDate`,`lastUpdatedDate`) VALUES ';

// Loop Through Oppertunities
 
if(sizeof($opportunities_array)>0){
  
  foreach ($opportunities_array as $key=>$value) {
    $department = '';
    $subTier = '';
    $office = '';
    $officeAddress = '';
    foreach ($value->organizationHierarchy as $org_key => $org_value) {
      if($org_value->type == 'DEPARTMENT'){
        $department = $org_value->name;
      }
      if($org_value->type == 'AGENCY'){
        $subTier = $org_value->name;
      }
      if($org_value->type == 'OFFICE'){
        $office = $org_value->name;
        $officeAddress = $org_value->streetAddress;
      }
    }
    
      $noticeId = addslashes($value->_id);
      $getResults =  $data->existquery('opportunities','noticeId',$noticeId);
      if(!$getResults){
        $title = $value->title ? addslashes($value->title) : '';
        $solicitationNumber = $value->solicitationNumber ? addslashes($value->solicitationNumber) : '';
        $department = $department;
        $subTier = $subTier;
        $office = $office;
        $postedDate = $value->publishDate ? addslashes($value->publishDate) : '';
        $type = json_encode($value->_type ? addslashes($value->_type) : '');
        $otype = json_encode($value->type ? $value->type : '');
        $baseType = $value->_type ? addslashes($value->_type) : '';
        $archiveType = $value->archiveType ? addslashes($value->archiveType) : '';
        $active = $value->isActive ? addslashes($value->isActive) : '';
        $award = json_encode($value->award);
        $pointOfContact =json_encode($value->pointOfContact);
        $description = json_encode($value->descriptions);
        $officeAddress =$officeAddress;
        $links =json_encode($value->organizationHierarchy);
        $responseDate =$value->responseDate;
        $modifiedDate =$value->modifiedDate;
        $officeAddress =$officeAddress;

        $query_parts[] = "('" . $noticeId . "', '" . $title . "', '" . $solicitationNumber . "', '" . $department . "', '" . $subTier . "', '" . $office . "', '" . $postedDate . "', '" . $otype . "', '" . $baseType . "', '" . $archiveType . "','" . $active . "', '" . $award . "', '" . $pointOfContact . "', '" . $description . "', '" . $officeAddress . "', '" . $placeOfPerformance . "', '" . $links . "', '".$responseDate."', '".$modifiedDate."')";   
      }
  }

  $query .= implode(',', $query_parts);
  //echo $query;
  //exit();
  $data->query($query);

}