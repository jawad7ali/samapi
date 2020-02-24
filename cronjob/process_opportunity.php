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

  for ($o=$from; $o < $to ; $o++) {

  //for ($o=0; $o < $limit ; $o++) {

  $api_url = "https://beta.sam.gov/api/prod/sgs/v1/search/?random=$random&index=opp&q=&page=$o&sort=-modifiedDate&mode=search&is_active=true";

 //$api_url = "https://api.sam.gov/prod/opportunities/v1/search?limit=100&api_key=M75D1gGx7BzDJkFCudsSjNObhFPDiZlaZEOrHMIl&postedFrom=$minusOneday&postedTo=$minustwoday";

 //$api_url = "search.json";

// Read JSON file
$json_data = file_get_contents($api_url);

// Decode JSON data into PHP array
$user_data = json_decode($json_data);
 
// Oppertunities data 

$opportunities_array = $user_data->_embedded->results;
 
$query_parts = array();

$query = 'INSERT INTO opportunities (`noticeId`, `title`, `solicitationNumber`, `department`, `subTier`, `office`, `postedDate`, `type`, `baseType`, `archiveType`, `archiveDate`, `typeOfSetAsideDescription`, `typeOfSetAside`, `responseDeadLine`, `naicsCode`, `classificationCode`, `active`, `award`, `pointOfContact`, `description`, `organizationType`, `officeAddress`, `placeOfPerformance`, `additionalInfoLink`, `uiLink`, `links`) VALUES ';

// Loop Through Oppertunities

if(sizeof($opportunities_array)>0){
  
  foreach ($opportunities_array as $key=>$value) {
      $noticeId = addslashes($value->_id);
      $getResults =  $data->existquery('opportunities','noticeId',$noticeId);
      if(!$getResults){
        $title = $value->title ? addslashes($value->title) : '';
        $solicitationNumber = $value->solicitationNumber ? addslashes($value->solicitationNumber) : '';
        $department = $value->department ? addslashes($value->department) : '';
        $subTier = $value->subTier ? addslashes($value->subTier) : '';
        $office = $value->office ? addslashes($value->office) : '';
        $postedDate = $value->publishDate ? addslashes($value->publishDate) : '';
        $type = json_encode($value->type ? addslashes($value->type) : '');
        $baseType = $value->baseType ? addslashes($value->baseType) : '';
        $archiveType = $value->archiveType ? addslashes($value->archiveType) : '';
        $archiveDate = $value->archiveDate ? addslashes($value->archiveDate) : '';
        $typeOfSetAsideDescription = $value->typeOfSetAsideDescription ? addslashes($value->typeOfSetAsideDescription) : '';
        $typeOfSetAside = $value->typeOfSetAside ? addslashes($value->typeOfSetAside) : '';
        $responseDeadLine = $value->responseDeadLine ? addslashes($value->responseDeadLine) : '';
        $naicsCode = $value->_rScore ? addslashes($value->_rScore) : '';
        $classificationCode = $value->classificationCode ? addslashes($value->classificationCode) : '';
        $active = $value->isActive ? addslashes($value->isActive) : '';
        $award = json_encode($value->award ? addslashes($value->award) : '');
        $pointOfContact =json_encode($value->pointOfContact ? addslashes($value->pointOfContact) : '');
        $description = json_encode($value->descriptions ? addslashes($value->descriptions) : '');
        $organizationType = $value->organizationType ? addslashes($value->organizationType) : '';
        $officeAddress =json_encode($value->officeAddress ? addslashes($value->officeAddress) : '');
      $placeOfPerformance =json_encode($value->placeOfPerformance ? addslashes($value->placeOfPerformance) : '');
        $additionalInfoLink = $value->additionalInfoLink ? addslashes($value->additionalInfoLink) : '';
        $uiLink = $value->uiLink ? addslashes($value->uiLink) : '';  
        $links =json_encode($value->organizationHierarchy ? addslashes($value->organizationHierarchy) : '');

        $query_parts[] = "('" . $noticeId . "', '" . $title . "', '" . $solicitationNumber . "', '" . $department . "', '" . $subTier . "', '" . $office . "', '" . $postedDate . "', '" . $type . "', '" . $baseType . "', '" . $archiveType . "', '" . $archiveDate . "', '" . $typeOfSetAsideDescription . "', '" . $typeOfSetAside . "', '" . $responseDeadLine . "', '" . $naicsCode . "', '" . $classificationCode . "', '" . $active . "', '" . $award . "', '" . $pointOfContact . "', '" . $description . "', '" . $organizationType . "', '" . $officeAddress . "', '" . $placeOfPerformance . "', '" . $additionalInfoLink . "', '" . $uiLink . "', '" . $links . "')";   
      }
  }

    $query .= implode(',', $query_parts);
   // echo $query;
    $data->query($query);

}   

}