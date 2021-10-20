<html>  
    <head>
            <title>Sahil Rai</title>
            <LINK REL ='stylesheet' TYPE='text/css' HREF='dbicw.css'>
    </head>
<body>
<h1> Actor Database </h1>
<?php 
// logging in 
$actName = $_POST['actName'];

$db_host = 'mysql.cs.nott.ac.uk';
$db_user = ' ';
$db_pass = ' ';
$db_name = ' ';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if($conn->connect_errno) die("Connection Failed");

$sql = "DELETE FROM Actor WHERE actName = '$actName'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

// Returns back to url 
header("refresh:3 , url=http://avon.cs.nott.ac.uk/~efysr3/first.html");

$conn->close();

?>
</body>
</html>