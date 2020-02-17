<?php
  
  // Include Configuration File 

  include '../includes/config.php';

  // Include Database Class 

  include '../classes/database.php';

  // Initaite Database Class 

  $data = new Database;
 
  // Get Yesturday Date  
  
  $minusOneday = date("m/d/Y", strtotime("-2 days"));

  $minustwoday = date("m/d/Y", strtotime("-1 days"));

 $api_url = "https://api.sam.gov/prod/opportunities/v1/search?limit=10&api_key=M75D1gGx7BzDJkFCudsSjNObhFPDiZlaZEOrHMIl&postedFrom=$minusOneday&postedTo=$minustwoday";
 
// $api_url = "search.json";

// Read JSON file
$json_data = file_get_contents($api_url);
 
// Decode JSON data into PHP array
$user_data = json_decode($json_data);

// Oppertunities data 

$opportunities_array = $user_data->opportunitiesData;


$query_parts = array();

$query = 'INSERT INTO opportunities (`noticeId`, `title`, `solicitationNumber`, `department`, `subTier`, `office`, `postedDate`, `type`, `baseType`, `archiveType`, `archiveDate`, `typeOfSetAsideDescription`, `typeOfSetAside`, `responseDeadLine`, `naicsCode`, `classificationCode`, `active`, `award`, `pointOfContact`, `description`, `organizationType`, `officeAddress`, `placeOfPerformance`, `additionalInfoLink`, `uiLink`, `links`) VALUES ';

// Loop Through Oppertunities

if(sizeof($opportunities_array)>0){
  
  foreach ($opportunities_array as $key=>$value) {
      $noticeId = $value->noticeId;

      $getResults =  $data->existquery('opportunities','noticeId',$noticeId);
   
      if(!$getResults){
        $title = $value->title;
        $solicitationNumber = $value->solicitationNumber;
        $department = $value->department;
        $subTier = $value->subTier;
        $office = $value->office;
        $postedDate = $value->postedDate;
        $type = $value->type;
        $baseType = $value->baseType;
        $archiveType = $value->archiveType;
        $archiveDate = $value->archiveDate;
        $typeOfSetAsideDescription = $value->typeOfSetAsideDescription;
        $typeOfSetAside = $value->typeOfSetAside;
        $responseDeadLine = $value->responseDeadLine;
        $naicsCode = $value->naicsCode;
        $classificationCode = $value->classificationCode;
        $active = $value->active;
        $award =json_encode($value->award);
        $pointOfContact =json_encode($value->pointOfContact);
        $description = $value->description;
        $organizationType = $value->organizationType;
        $officeAddress =json_encode($value->officeAddress);
        $placeOfPerformance =json_encode($value->placeOfPerformance);
        $additionalInfoLink = $value->additionalInfoLink;
        $uiLink = $value->uiLink;  
        $links =json_encode($value->links);
        $query_parts[] = "('" . $noticeId . "', '" . $title . "', '" . $solicitationNumber . "', '" . $department . "', '" . $subTier . "', '" . $office . "', '" . $postedDate . "', '" . $type . "', '" . $baseType . "', '" . $archiveType . "', '" . $archiveDate . "', '" . $typeOfSetAsideDescription . "', '" . $typeOfSetAside . "', '" . $responseDeadLine . "', '" . $naicsCode . "', '" . $classificationCode . "', '" . $active . "', '" . $award . "', '" . $pointOfContact . "', '" . $description . "', '" . $organizationType . "', '" . $officeAddress . "', '" . $placeOfPerformance . "', '" . $additionalInfoLink . "', '" . $uiLink . "', '" . $links . "')";   
      }
  }

    $query .= implode(',', $query_parts);
    $data->query($query);

}   

