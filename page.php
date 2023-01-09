<html>
<head>
   <link href="style.css" rel="stylesheet" type="text/css">
   <meta http-equiv="content-type" content="text/html; charset=iso-8859-7">
   <meta name="author" content=""> 
   <title>page.main</title>
</head>


<?php
$host = "localhost";
$user = "db1test";
$pass = "dbFmAF7P2A";
$db = $user;
?>

<body>


<pre><code class="language-SQL">SELECT *
FROM ;
</code></pre>

<h2>και παρουσιάζουμε το αποτέλεσμα, εγγραφή προς εγγραφή:</h2>

<?php
$link = pg_connect("host=$host dbname=$db user=$user password=$pass")
        or die ("Could not connect to server\n");

$result = pg_exec($link, "SELECT * FROM ")
        or die("Cannot execute query: $query\n");

$numrows = pg_numrows($result);
?>
