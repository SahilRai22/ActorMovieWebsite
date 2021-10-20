<html>  
    <head>
            <title>Sahil Rai</title>
            <LINK REL ='stylesheet' TYPE='text/css' HREF='dbicw.css'>
    </head>
<body>
<h1> Movie Database </h1>
<?php 
// logging in 
$titlesearch = $_GET['title'];
$db_host = 'mysql.cs.nott.ac.uk';
$db_user = ' ';
$db_pass = ' ';
$db_name = ' ';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if($conn->connect_errno) die("Connection Failed");

$sql="SELECT mvID, mvTitle, mvGenre, mvPrice, mvYear FROM Movie WHERE mvTitle='$titlesearch'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$stmt->bind_result($mvID, $mvTitle, $mvGenre, $mvPrice, $mvYear);
?>

<table width ="500" border="10">
<tr> <th>mvID</th> <th>mvTitle</th> <th>mvGenre</th> <th>mvPrice</th>  <th>mvYear</th> </tr>

<?php
while($stmt->fetch()){
  echo "<tr>";
  echo "<td>". htmlentities($mvID) . "</td>";
  echo "<td>". htmlentities($mvTitle) . "</td>";
  echo "<td>". htmlentities($mvGenre) . "</td>";
  echo "<td>". htmlentities($mvPrice) . "</td>";
  echo "<td>". htmlentities($mvYear) . "</td>";
  echo "</tr>";


$conn->close();
}
?>
</table>
</body>
</html>
