<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>NBA Player Information</title>
        <link rel="stylesheet" type="text/css" href="tablestyle.css">
    </head>
    <body>
        <script src="tablejs.js"></script>
<?php

require_once ('connect.php');

$sql = "SELECT * FROM Injuries";
$result = mysqli_query($conn, $sql);
echo "<section>";
echo "<h1>Player Injuries</h1>";
echo "<div class='tbl-header'>";
echo "<table cellpadding='0' cellspacing='0' border='0'>";
echo "<thead>";
echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Injury Description</th></tr></thead></table></div>";
echo "<div class='tbl-content'>";
while($row = mysqli_fetch_assoc($result)) 
{
    echo "<tr><td>{$row["id"]}</td><td>{$row["firstname"]}</td><td>{$row["lastname"]}</td>"
    . "<td>{$row["injury"]}</td></tr>";
}
echo "</tbody></table></div></section>";
?>

