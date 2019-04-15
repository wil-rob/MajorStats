<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>NBA Player Statistics</title>
        <link rel="stylesheet" type="text/css" href="tablestyle.css">
    </head>
    <body>
        <script src="tablejs.js"></script>
<?php

require_once ('connect.php');

$sql = "SELECT * FROM Player_Stats";
$result = mysqli_query($conn, $sql);
echo "<section>";
echo "<h1>Player Statistics</h1>";
echo "<div class='tbl-header'>";
echo "<table cellpadding='0' cellspacing='0' border='0'>";
echo "<thead>";
echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Team</th><th>Position</th>"
. "<th>Jersey Number</th><th>Field Goal %</th><th>Free Throw %</th><th>Rebounds Per Game</th><th>Points Per Game</th><th>Assists Per Game</th>"
        . "<th>Steals Per Game</th><th>Blocks Per Game</th></tr></thead></table></div>";
echo "<div class='tbl-content'>";
while($row = mysqli_fetch_assoc($result)) 
{
    echo "<table cellpadding='0' cellspacing='0' border='0'>";
    echo "<tbody>";
    echo "<tr><td>{$row["id"]}</td><td>{$row["firstname"]}</td><td>{$row["lastname"]}</td>"
    . "<td>{$row["team"]}</td><td>{$row["player_position"]}</td><td>{$row["jersey_number"]}</td>"
    . "<td>{$row["fg_pct"]}</td><td>{$row["ft_pct"]}</td><td>{$row["reb_pg"]}</td><td>{$row["pts_pg"]}</td><"
    . "td>{$row["ast_pg"]}</td><td>{$row["stl_pg"]}</td><td>{$row['blk_pg']}</td></tr>";
}
echo "</tbody></table></div></section>";
?>
    </body>
</html>

