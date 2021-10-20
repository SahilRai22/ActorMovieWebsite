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
$mvID = $_POST['mvID'] ;
$mvTitle = $_POST['mvTitle'] ;
$mvGenre = $_POST['mvGenre'] ;
$mvPrice = $_POST['mvPrice'] ;
$mvYear = $_POST['mvYear'] ;

//Inserts values into sql 
$sql ="INSERT INTO Movie (mvID, mvTitle, mvGenre, mvPrice, mvYear) VALUES 
('$mvID', '$mvTitle', '$mvGenre', '$mvPrice', '$mvYear')";

if($conn->query($sql)==TRUE){
    echo "Movie added successfully!";
}
else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header("refresh:2 , url=http://avon.cs.nott.ac.uk/~efysr3/first.html");
$conn->close(); 
?>


