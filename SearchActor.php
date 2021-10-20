<html>  
    <head>
            <title>Sahil Rai</title>
            <LINK REL ='stylesheet' TYPE='text/css' HREF='dbicw.css'>
    </head>
<body>
<h1> Actor Database </h1>
<?php 
// logging in 
$namesearch = $_GET['actname'];
$db_host = 'mysql.cs.nott.ac.uk';
$db_user = ' ';
$db_pass = ' ';
$db_name = ' ';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if($conn->connect_errno) die("Connection Failed");

$sql="SELECT actID, actName FROM Actor WHERE actName='$namesearch'";
$stmt = $conn->prepare($sql);
$stmt->execute();
$stmt->bind_result($actID, $actName);
?>

<table width ="500" border="10">
<tr> <th>actID</th> <th>actName</th> </tr>

<?php
while($stmt->fetch()){
  echo "<tr>";
  echo "<td>". htmlentities($actID) . "</td>";
  echo "<td>". htmlentities($actName) . "</td>";
  echo "</tr>";
}
?>
</table>

</body>
</html>