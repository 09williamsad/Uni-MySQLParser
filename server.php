<?php
if (isset($_POST["query"])) {
    $username = "root";
    $password = "";
    $host = "127.0.0.1";
    $db = "sql parser";
    $connection = mysqli_connect($host, $username, $password, $db);
    $returnString = "";
	
	set_error_handler(function($errno, $errstr){
        if($errno === E_WARNING){
			if (strstr($errstr, '1111') === false) {
				trigger_error($errstr, E_USER_ERROR);				
			}
            return true;
        } else {
            return false;
        }
    });
	

    if (mysqli_connect_error()) {
        $returnString = "Failed to connect to MySQL: " . mysqli_connect_error();
    } else {
        $userQuery = mysqli_real_escape_string($connection, "Explain " . filter_input(INPUT_POST, "query", FILTER_SANITIZE_STRING)); //Store query to variable with escaping
		
		try {
            $queryResults = mysqli_query($connection,$userQuery); //Get query results in a handler that turns warnings into exceptions for handeling. 
		} catch(Exception $e){
            echo $e;
		} finally {
            restore_error_handler();
		}
		
        if ($queryResults === false) { //If query executes with error
            $wordsArrayUnescaped = json_decode($_POST['jsonWords']); //Get words with index values, decoded from JSON.
            $queryWords = []; //Variable for words
            foreach ($wordsArrayUnescaped as $word) { //escape each query value/word and put into new array
                array_push($queryWords, [mysqli_real_escape_string($connection, $word[0]), mysqli_real_escape_string($connection, $word[1])]);
            }
            if (mysqli_errno($connection) == 1111) { //Hard coded example for error 1111, invalid group by usage
                $groupIndex = ""; //Indexes of where "group" words are in query
                $aggregateIndex = ""; //index for aggregate words in query
                $havingFound = false;
                $groupFound = false;
                $aggregateFunctions = ["avg", "bit_and", "bit_or", "bit_xor", "count", "count", "group_concat", "json_arrayagg", "json_objectagg", "max", "min", "std", "stddev", "stddev_pop", "stddev_samp", "sum", "var_pop", "var_samp", "variance"]; //Aggregate functions
                foreach ($queryWords as $word) { //For each word
                    if ($word[1] == "group") { //If "group" then add its index to variable and set groupFound to true.
                        $groupIndex .= ($word[0] . " ");
                        $groupFound = true;
                    } elseif ($word[1] == "having") { //If "having" then set havingCheck to true as having has been found.
                        $havingCheck = true;
                    } elseif ($havingFound === false AND $groupFound === true AND in_array($word[1], $aggregateFunctions)) { //If an aggregate has been found, after "group" and before "having" then add it to variable, aggregates should be after the "having" clause by.
                        $aggregateIndex .= ($word[1] . " at " . $word[0] . ", ");
                    }
                }
                $returnString = "Error 1111 one of the group by clauses are not used correctly, character/s: " . $groupIndex . ". <br /> Group by should be followed by column names with , separating them.";
                if ($aggregateIndex !== "") { //If aggregate functions after group and before having then add text with their indexes.
                    $returnString .= "<br />The following aggregate functions appear to be with the group clause but should be used with a Having clause: " . $aggregateIndex;
                }
            } else {
                $returnString = "Error: " . mysqli_errno($connection) . " " . mysqli_error($connection);
            }
        } else { //If query executes without error.
            $returnString = "Executed successfully";
        }
    }
    mysqli_close($connection);
    echo($returnString); //Feedback to javascript.
}
?>
