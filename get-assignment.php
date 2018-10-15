<?php
include($_SERVER['DOCUMENT_ROOT'] .  "/config.php"); 
include($_SERVER['DOCUMENT_ROOT'] . "/includes/formattop.php"); 
include($_SERVER['DOCUMENT_ROOT'] . "/vendor/autoload.php");


$colNumWhereAssignemntsStarts = 5;
$ignoreLastNColumns = 2;
$assignmentSpreadsheet = "https://docs.google.com/spreadsheets/d/1iufejyPQ2f8DWaiKatKQ1u8X_6aSEJOc8AcQKhcAmbA/edit?usp=sharing"; //make sure sharing settings are set to anyone with link can view
$arr = explode("/", $assignmentSpreadsheet);
$assignmentSpreadsheetId = $arr[5];
$admin = true;

define('APPLICATION_NAME', $GoogleAppName);
define('API_KEY', $GoogleAppAPIKey);
define('CLIENT_SECRET_PATH', $_SERVER['DOCUMENT_ROOT'] . $GoogleSecretPath);
define('SCOPES', implode(' ', array(
  Google_Service_Sheets::SPREADSHEETS_READONLY)
));

$client = new Google_Client();
$client->setApplicationName(APPLICATION_NAME);
$client->setDeveloperKey(API_KEY);
$client->setScopes(SCOPES);
// $client->setAuthConfig(CLIENT_SECRET_PATH);

// Get the API client and construct the service object.
$service = new Google_Service_Sheets($client);

$range = 'A1:Z1';
$response = $service->spreadsheets_values->get($assignmentSpreadsheetId, $range);
$headerColumns = $response->getValues();

// print_r($headerColumns);
$range = 'A2:Z';
$response = $service->spreadsheets_values->get($assignmentSpreadsheetId, $range);
$values = $response->getValues();

$html = formatAssignmentValues($headerColumns, $values, $colNumWhereAssignemntsStarts, $ignoreLastNColumns, $admin);

?>


			
	<div class="page">
		<div class="pagename"><a href='/'>DSD-3647-A</a></div>
		<div class="pagecontent">
			<h3 class="unstack">Assignment Results</h3>
			<?php echo($html[0]); ?>									

			<h3 class="unstack">Links</h3>
			<?php echo($html[1]); ?>									

			<h3 class="unstack">Questions</h3>
			<?php echo($html[2]); ?>									

									
		</div>

	</div>


<?php include($_SERVER['DOCUMENT_ROOT'] . "/includes/formatbottom.php"); ?>


<?php 
function formatAssignmentValues($headerColumns, $values, $colNumWhereAssignemntsStarts, $ignoreLastNColumns, $admin){
	//for each record
	$html = $links = $questions = "<ul>\n";
	for($i = 0; $i<count($values); $i++) {
		$html .="<li>";
		//for each value in spreadsheet
		for($j = 0; $j<count($values[$i]); $j++){
			$columnName = $headerColumns[0][$j];
			$val = $values[$i][$j];
			//if($j < $colNumWhereAssignemntsStarts) {
				switch($columnName){
					case "Timestamp": 	break;
					case "First Name": 	$html .= ucfirst(strtolower($val)) . " ";	break;
					case "Last Name": 	$html .=  ucfirst(strtolower($val)) . " :: ";	break;
					case "SVA Email": 	break;
					case "Email you actually use": 	if($admin) $html .= " (<a href='mailto:" . $val . "'>" . $val . "</a>) :: </span>";	break;
					case "Student ID": 			continue; 	break;
					case "If you had any questions during the assignment, list them here": if($val!="") $questions.="<li>" . htmlentities($val) . "</li>\n"; break;
					case "Find any cool links this week worth sharing?": if($val!="") $links.="<li><a href='" . $val . "' target='_blank'>" . $val . "</a></li>\n"; break;
					default: $html .= ($val!='')? "<a href='" . $val . "' target='_blank'>" . $columnName . "</a> | " : '';	break;
				}
			// }
			// else if($j < count($headerColumns[0]) - $ignoreLastNColumns) {
			// 	$html .= "<a href='" . $val . "' target='_blank'>" . $columnName . "</a> | ";
			// }
		}
		$html.="</li>\n";
	}
	$html.="</ul>";	$links.="</ul>";
	return array($html, $links, $questions);
}

/*
HEADER COLUMNS
Array
(
    [0] => Array
        (
            [0] => Timestamp
            [1] => First Name
            [2] => Last Name
            [3] => SVA Email
            [4] => Email you actually use
            [5] => Design Assignment 1: Wireframes II
            [6] => Design Assignment 2: Homepage designs
            [7] => Coding Assignment: Contact page
            [8] => If you had any questions during the assignment, list them here
            [9] => Find any cool links this week worth sharing?
        )

)
*/
 ?>
