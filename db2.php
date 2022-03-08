<!-- Sirish Gurung, Travis Ishihara
PDA6
db2.php
03/07/2022  -->
<!-- 
A PHP script to access the nba database
through MySQL -->

<!-- Form 2: Player Info  -->

<html>
<head>
<title> Access the Team Database </title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<?php

// Connect to MySQL
$servername = "cs100.seattleu.edu";
$username = "user9";
$password = "1234abcdF!";

$conn = mysql_connect($servername, $username, $password);

if (!$conn) {
     print "Error - Could not connect to MySQL ".$conn;
     exit;
}

// change to your default db for PDA6!!!
$dbname = "bw_db9";

$db = mysql_select_db($dbname, $conn);
if (!$db) {
    print "Error - Could not select the sailor database ".$dbname;
    exit;
}

$val = $_POST['positions'];
$val1 = $_POST['teams'];

// Clean up the given query (delete leading and trailing whitespace)
trim($val);

// remove the extra slashes
$val = stripslashes($val);

$query = 'select * from Player where PPosition='.$val.' and TeamCode='.$val1.';';

//query2
$query2 = 'select CoachId, CName, CAge, TeamCode from Coach where TeamCode='.$val1.';';

// Testing (remove it when testing is done!!!)
// print "<p>Query: ".$query."</p>";

// Execute the query
$result = mysql_query($query);

// Execute the query2
$result2 = mysql_query($query2);

if (!$result) {
    print "Error - the query could not be executed";
    $error = mysql_error();
    print "<p>" . $error . "</p>";
    exit;
}

// Get the number of rows in the result
$num_rows = mysql_num_rows($result);
//print "Number of rows = $num_rows <br />";
$num_rows2 = mysql_num_rows($result2);

// Get the number of fields in the rows
$num_fields = mysql_num_fields($result);
//print "Number of fields = $num_fields <br />";
$num_fields2 = mysql_num_fields($result2);

// Get the first row
$row = mysql_fetch_array($result);
$row2 = mysql_fetch_array($result2);

// Display the results in a table
print "<table border='border'><caption> <h2> Query Results </h2> </caption>";
print "<table border='border'><caption> <h2> Player Position Table </h2> </caption>";
print "<tr align = 'center'>";

// Produce the column labels
$keys = array_keys($row);
for ($index = 0; $index < $num_fields; $index++) 
    print "<th>" . $keys[2 * $index + 1] . "</th>";

print "</tr>";

// Output the values of the fields in the rows
for ($row_num = 0; $row_num < $num_rows; $row_num++) {

    print "<tr align = 'center'>";
    $values = array_values($row);
	
    for ($index = 0; $index < $num_fields; $index++){
        $value = htmlspecialchars($values[2 * $index + 1]);
        print "<td>" . $value . "</td> ";
    }

    print "</tr>";
    $row = mysql_fetch_array($result);
}

print "</table>";

// // For query 2
// Display the results in a table
print "<table border='border'><caption> <h2> Team Coach Table </h2> </caption>";
print "<tr align = 'center'>";

// Produce the column labels
$keys2 = array_keys($row2);
for ($index = 0; $index < $num_fields2; $index++) 
    print "<th>" . $keys2[2 * $index + 1] . "</th>";

print "</tr>";

// Output the values of the fields in the rows
for ($row2_num = 0; $row2_num < $num_rows2; $row2_num++) {

    print "<tr align = 'center'>";
    $value2s2 = array_values($row2);
	
    for ($index = 0; $index < $num_fields2; $index++){
        $value2 = htmlspecialchars($value2s2[2 * $index + 1]);
        print "<td>" . $value2 . "</td> ";
    }

    print "</tr>";
    $row2 = mysql_fetch_array($result2);
}

print "</table>";


mysql_close($conn);
?>

<br /><br />
<a href="http://css1.seattleu.edu/~sgurung/pda6/db.html"> Go to Main Page </a>

</body>
</html>
