<!-- Sirish Gurung, Travis Ishihara
PDA6
db5.php
03/07/2022  -->
<!-- 
A PHP script to access the nba database
through MySQL -->

<!-- Form 5: Player Info  -->
     
<html>
<head>
<title> NBA Player DB </title>
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
    print "Error - Could not select the NBA database ".$dbname;
    exit;
}

$table = $_POST['table'];
$pk = $_POST['pk'];
$val1 = $_POST['teams'];
$val2 = $_POST['position'];
$val3 = $_POST['name'];
$val4 = $_POST['age'];
$val5 = $_POST['height'];

// print "Team: ".$val1."<br />";
// print "Position: ".$val2."<br />";
// print "Name: ".$val3."<br />";
// print "Age: ".$val4."<br />";
// print "Height: ".$val5."<br />";

// Clean up the given query (delete leading and trailing whitespace)
trim($table);
trim($pk);
trim($val);

// remove the extra slashes
$table = stripslashes($table);
$pk = stripslashes($pk);
$val = stripslashes($val);

// constructing a query
$query2 = "select PlayerID from Player ORDER BY PlayerID DESC LIMIT 1;";

// Testing (remove it when testing is done!!!)
// print "<p>Query: ".$query."</p>";

// Execute the query
$result2 = mysql_query($query2);

$NewPLayerId = 0;

// Loop to fetch query2 result 
while ($row = mysql_fetch_assoc($result2))
{
    $NewPLayerId = $row["PlayerID"] + 1;
    // echo $NewPLayerId;
}

$query1 =  "INSERT INTO Player VALUES (".$NewPLayerId.", '".$val3."', ".$val4.", '".$val2."', ".$val5.", '".$val1."');";

$query =  "select * from Player where TeamCode='".$val1."';";
$result1 = mysql_query($query1);
$result = mysql_query($query);

if (!$result || !$result1 || !$result2) {
    print "Error - the query could not be executed!";
    $error = mysql_error();
    print "<p>" . $error . "</p>";
    exit;
}

// Get the number of rows in the result
$num_rows = mysql_num_rows($result);
//print "Number of rows = $num_rows <br />";

// Get the number of fields in the rows
$num_fields = mysql_num_fields($result);
//print "Number of fields = $num_fields <br />";

// Get the first row
$row = mysql_fetch_array($result);

// Display the results in a table
print "<table border='border'><caption> <h2> Query Results </h2> </caption>";
print "<table border='border'><caption> <h2> Player Table </h2> </caption>";
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

mysql_close($conn);
?>

<br /><br />
<a href="http://css1.seattleu.edu/~sgurung/nbaDB/db.html"> Go to Main Page </a>

</body>
</html>
