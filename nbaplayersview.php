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

$sql = "SELECT * FROM Players";
$result = mysqli_query($conn, $sql);
echo "<section>";
echo "<h1>Player Information</h1>";
echo "<div class='tbl-header'>";
echo "<table cellpadding='0' cellspacing='0' border='0'>";
echo "<thead>";
echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Team</th><th>Position</th>"
. "<th>Jersey Number</th><th>Height</th><th>Weight</th><th>Age</th><th>College</th><th>Drafted Year</th>"
        . "<th>Drafted Round</th></tr></thead></table></div>";
echo "<div class='tbl-content'>";
while($row = mysqli_fetch_assoc($result)) 
{
    echo "<table cellpadding='0' cellspacing='0' border='0'>";
    echo "<tbody>";
    echo "<tr><td>{$row["id"]}</td><td>{$row["firstname"]}</td><td>{$row["lastname"]}</td>"
    . "<td>{$row["team"]}</td><td>{$row["player_position"]}</td><td>{$row["jersey_number"]}</td>"
    . "<td>{$row["height"]}</td><td>{$row["weight"]}</td><td>{$row["age"]}</td><td>{$row["college"]}</td><"
    . "td>{$row["drafted_year"]}</td><td>{$row["drafted_round"]}</td></tr>";
}
echo "</tbody></table></div></section>";
?>
    </body>
</html>

