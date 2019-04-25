<?php
if (isset($_POST["Q1"])) {
    $username = "root";
    $password = "Asdosa";
    $host = "127.0.0.1";
    $db = "sql parser";
    $connection = mysqli_connect($host, $username, $password, $db);
    $returnString = "";


    if (mysqli_connect_error()) {
        $returnString = "Failed to connect to MySQL: " . mysqli_connect_error();
    } else {
		
		$maxSurveyIDResults = mysqli_query($connection, "select max(surveyID) as 'maxSurveyID' from surveyResults"); //Get query results in a handler that turns warnings into exceptions for handeling.
		if ($maxSurveyIDResults === false) { //If query executes with error
			$returnString = "Cannot get last survey ID: " . mysqli_errno($connection) . " " . mysqli_error($connection);
        } else { //If query executes without error.
		
            $row_Data = mysqli_fetch_assoc($maxSurveyIDResults);
            $newSurveyID = $row_Data["maxSurveyID"] + 1;	

            $q1Selection = mysqli_real_escape_string($connection, filter_input(INPUT_POST, "Q1", FILTER_SANITIZE_STRING));
            $q1Comment = mysqli_real_escape_string($connection, filter_input(INPUT_POST, "comment1", FILTER_SANITIZE_STRING));
			$q2Selection = mysqli_real_escape_string($connection, filter_input(INPUT_POST, "Q2", FILTER_SANITIZE_STRING));
			$q2Comment = mysqli_real_escape_string($connection, filter_input(INPUT_POST, "comment2", FILTER_SANITIZE_STRING));
			$q3Selection = mysqli_real_escape_string($connection, filter_input(INPUT_POST, "Q3", FILTER_SANITIZE_STRING));
			$q3Comment = mysqli_real_escape_string($connection, filter_input(INPUT_POST, "comment3", FILTER_SANITIZE_STRING));
			$q4Selection = mysqli_real_escape_string($connection, filter_input(INPUT_POST, "Q4", FILTER_SANITIZE_STRING));
			$q4Comment = mysqli_real_escape_string($connection, filter_input(INPUT_POST, "comment4", FILTER_SANITIZE_STRING));
			$q5Selection = mysqli_real_escape_string($connection, filter_input(INPUT_POST, "Q5", FILTER_SANITIZE_STRING));
			$q5Comment = mysqli_real_escape_string($connection, filter_input(INPUT_POST, "comment5", FILTER_SANITIZE_STRING));
			$q6Selection = mysqli_real_escape_string($connection, filter_input(INPUT_POST, "Q6", FILTER_SANITIZE_STRING));
			$q6Comment = mysqli_real_escape_string($connection, filter_input(INPUT_POST, "comment6", FILTER_SANITIZE_STRING));
			$q7Selection = mysqli_real_escape_string($connection, filter_input(INPUT_POST, "Q7", FILTER_SANITIZE_STRING));
			$q7Comment = mysqli_real_escape_string($connection, filter_input(INPUT_POST, "comment7", FILTER_SANITIZE_STRING));
			$q8Selection = mysqli_real_escape_string($connection, filter_input(INPUT_POST, "Q8", FILTER_SANITIZE_STRING));
			$q8Comment = mysqli_real_escape_string($connection, filter_input(INPUT_POST, "comment8", FILTER_SANITIZE_STRING));
			$q9Selection = mysqli_real_escape_string($connection, filter_input(INPUT_POST, "Q9", FILTER_SANITIZE_STRING));
			$q9Comment = mysqli_real_escape_string($connection, filter_input(INPUT_POST, "comment9", FILTER_SANITIZE_STRING));
			$q10Selection = mysqli_real_escape_string($connection, filter_input(INPUT_POST, "Q10", FILTER_SANITIZE_STRING));
			$q10Comment = mysqli_real_escape_string($connection, filter_input(INPUT_POST, "comment10", FILTER_SANITIZE_STRING));
			
			$surveyInsertQuery = 'insert into surveyresults (surveyID, query, chosenFeedback, comments) values 
			(' . $newSurveyID . ', "select * from", "' . $q1Selection . '", "' . $q1Comment . '"),
			(' . $newSurveyID . ', "Select column from example", "' . $q2Selection . '", "' . $q2Comment . '"),
			(' . $newSurveyID . ', "select * from ()", "' . $q3Selection . '", "' . $q3Comment . '"),
			(' . $newSurveyID . ', "select \"blah from example", "' . $q4Selection . '", "' . $q4Comment . '"),
			(' . $newSurveyID . ', "select * from example where column1 = 1)", "' . $q5Selection . '", "' . $q5Comment . '"),
			(' . $newSurveyID . ', "select \"blah\' from example", "' . $q6Selection . '", "' . $q6Comment . '"),
			(' . $newSurveyID . ', "select * from order by", "' . $q7Selection . '", "' . $q7Comment . '"),
			(' . $newSurveyID . ', "Select * from example order by column1 blah", "' . $q8Selection . '", "' . $q8Comment . '"),
			(' . $newSurveyID . ', "select * update from example", "' . $q9Selection . '", "' . $q9Comment . '"),
			(' . $newSurveyID . ', "select * from example group by avg(blah)", "' . $q10Selection . '", "' . $q10Comment . '")';
			
			if (!mysqli_query($connection, $surveyInsertQuery)) {
				$returnString =("Survey insert error: " . mysqli_errno($connection) . " " . mysqli_error($connection));
			} else {
				$returnString = "Results added to table";
			}
        }
    }
    mysqli_close($connection);
    echo($returnString); //Feedback to javascript.
}
else {
    echo 'no POST 1';
}
?>