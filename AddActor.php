<?php
// logging into database
$db_host = 'mysql.cs.nott.ac.uk';
$db_user = ' ';
$db_pass = ' ';
$db_name = ' ';
// Database connection
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if($conn->connect_errno) die("Connection Failed");

//
$actID = $_POST['actID'] ;
$actName = $_POST['actName'] ;


//Inserts values into sql 
$sql ="INSERT INTO Actor (actID, actName) 
VALUES ('$actID', '$actName')";

if($conn->query($sql)==TRUE){
    echo "Actor added successfully! ....";
}
else{
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo "....";
}

// Returns back to url 
header("refresh:3 , url=http://avon.cs.nott.ac.uk/~efysr3/first.html");

$conn->close(); 
?>