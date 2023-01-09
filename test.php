<?php

// Connect to MySQL database
$hostname = "localhost";
$username = "database_username";
$password = "database_password";
$dbname = "database_name";

$conn = mysqli_connect($hostname, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

// Insert data into MySQL table
$sql = "INSERT INTO table_name (column1, column2) VALUES ('value1', 'value2')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);

?>
