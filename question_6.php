<!DOCTYPE html>
<! James Boyd
   30041547
   Agile Web Development AT2 >
<html lang="en">
<head>
<title>Question 6</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/styling.css">
<link rel="stylesheet" href="css/bootstrap.css">
<script src="js/bootstrap.bundle.js"></script>
</head>
<body>

<div class="row">
<div class="col-sm-2">
<div class="navbar">
<?php include_once('nav.php'); ?>
</div>
</div>
<div class="col-sm-8">
<h1>Question 6</h1>
<div class="container" id="info_block">
<?PHP
$servername = "localhost";
$dbname = "at_two";
$username = "adminer";
$password = "P@ssw0rd";

/* Attempt MySQL server connection */
try {
	$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);	
	// Set the PDO error mode to exception
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
} catch (PDOException $e) {
	die("</br>ERROR: Could not connect. " . $e->getMessage());
}
// Attempt select query execution
try{
	$sql = "SELECT * FROM Questions WHERE id=6"; 
	$result = $pdo->query($sql);
	if($result->rowCount() > 0){
	while($row = $result->fetch()){
		echo "<h3>" . $row['question'] . "</h3>";
    	echo "<h5>Definition:</h5>";
		echo "<p>" . $row['definition'] . "</p>";
    	echo "<h5>Answer:</h5>";
		echo "<p>" . $row['answer'] . "</p>";
	}
	// Free result set
	unset($result);
	} else {
	echo "No records matching your query were found.";
	}
} catch(PDOException $e) {
	die("ERROR: Could not to execute $sql. " . $e->getMessage());
}
// Close connection
unset($pdo);
?>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
