<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="tablestyle.css">
    
    <title>MAJOR STATS</title>
  </head>
    <body class="d-flex flex-column">
        <script src="tablejs.js"></script>
        
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
            <a class="navtitle" href="index.php">
            MAJOR STATS
            </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item-active">
                    <a class="nav-link" href="nba.php">NBA
                    <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mlb.php">MLB</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">NFL</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>
    <div><img src="/logos/nbalogo.png" class="center"</div>
    <div class="row">
        <div class="column">
            <img src="/logos/brooklynnets.png" alt="Brooklyn Nets" style="width:100%">
        </div>
        <div class="column">
            <img src="/logos/houstonrockets.png" alt="Houston Rockets" style="width:100%">
        </div>
        <div class="column">
            <img src="/logos/lalakers.png" alt="Los Angeles Lakers" style="width:100%">
        </div>
        <div class="column">
            <img src="/logos/76ers.png" alt="Los Angeles Lakers" style="width:100%">
        </div>
        <div class="column">
            <img src="/logos/atlantahawks.png" alt="Los Angeles Lakers" style="width:100%">
        </div>
        <div class="column">
            <img src="/logos/bostonceltics.png" alt="Los Angeles Lakers" style="width:100%">
        </div>
        <div class="column">
            <img src="/logos/charlottehornets.png" alt="Los Angeles Lakers" style="width:100%">
        </div>
        <div class="column">
            <img src="/logos/chicagobulls.png" alt="Los Angeles Lakers" style="width:100%">
        </div>
        <div class="column">
            <img src="/logos/clevelandcavaliers.png" alt="Los Angeles Lakers" style="width:100%">
        </div>
        <div class="column">
            <img src="/logos/dallasmavericks.png" alt="Los Angeles Lakers" style="width:100%">
        </div>
        <div class="column">
            <img src="/logos/denvernuggets.png" alt="Los Angeles Lakers" style="width:100%">
        </div>
        <div class="column">
            <img src="/logos/detroitpistons.png" alt="Los Angeles Lakers" style="width:100%">
        </div>
        <div class="column">
            <img src="/logos/gsw.png" alt="Los Angeles Lakers" style="width:100%">
        </div>
        <div class="column">
            <img src="/logos/indianapacers.png" alt="Los Angeles Lakers" style="width:100%">
        </div>
        <div class="column">
            <img src="/logos/laclippers.png" alt="Los Angeles Lakers" style="width:100%">
        </div>
        <div class="column">
            <img src="/logos/memphisgrizzlies.png" alt="Los Angeles Lakers" style="width:100%">
        </div>
        <div class="column">
            <img src="/logos/miamiheat.png" alt="Los Angeles Lakers" style="width:100%">
        </div>
        <div class="column">
            <img src="/logos/milwaukeebucks.png" alt="Los Angeles Lakers" style="width:100%">
        </div>
        <div class="column">
            <img src="/logos/minnesotatimberwolves.png" alt="Los Angeles Lakers" style="width:100%">
        </div>
        <div class="column">
            <img src="/logos/nop.png" alt="Los Angeles Lakers" style="width:100%">
        </div>
        <div class="column">
            <img src="/logos/nyknicks.png" alt="Los Angeles Lakers" style="width:100%">
        </div>
        <div class="column">
            <img src="/logos/okcthunder.png" alt="Los Angeles Lakers" style="width:100%">
        </div>
        <div class="column">
            <img src="/logos/orlandomagic.png" alt="Los Angeles Lakers" style="width:100%">
        </div>
        <div class="column">
            <img src="/logos/phoenixsuns.png" alt="Los Angeles Lakers" style="width:100%">
        </div>
        <div class="column">
            <img src="/logos/sacramentokings.png" alt="Los Angeles Lakers" style="width:100%">
        </div>
        <div class="column">
            <img src="/logos/saspurs.png" alt="Los Angeles Lakers" style="width:100%">
        </div>
        <div class="column">
            <img src="/logos/toronotoraptors.png" alt="Los Angeles Lakers" style="width:100%">
        </div>
        <div class="column">
            <img src="/logos/trailblazers.png" alt="Los Angeles Lakers" style="width:100%">
        </div>
        <div class="column">
            <img src="/logos/utahjazz.png" alt="Los Angeles Lakers" style="width:100%">
        </div>
        <div class="column">
            <img src="/logos/washingtonwizards.png" alt="Los Angeles Lakers" style="width:100%">
        </div>
    </div> 
  <div id="page-content">
    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-md-7">
        </div>
      </div>
    </div>
  </div>
  <?php

    require_once ('connect.php');

    $sql = "SELECT * FROM Player_Stats";
    $result = mysqli_query($conn, $sql);
    echo "<section>";
    echo "<h1>Player Statistics</h1>";
    echo "<div class='tbl-header'>";
    echo "<table cellpadding='0' cellspacing='0' border='0'>";
    echo "<thead>";
    echo "<tr><th>First Name</th><th>Last Name</th><th>Team</th><th>Position</th>"
    . "<th>Jersey Number</th><th>Field Goal %</th><th>Free Throw %</th><th>Rebounds Per Game</th><th>Points Per Game</th><th>Assists Per Game</th>"
    . "<th>Steals Per Game</th><th>Blocks Per Game</th></tr></thead></table></div>";
    echo "<div class='tbl-content'>";
    while($row = mysqli_fetch_assoc($result)) 
    {
        echo "<table cellpadding='0' cellspacing='0' border='0'>";
        echo "<tbody>";
        echo "<tr><td>{$row["firstname"]}</td><td>{$row["lastname"]}</td>"
        . "<td>{$row["team"]}</td><td>{$row["player_position"]}</td><td>{$row["jersey_number"]}</td>"
        . "<td>{$row["fg_pct"]}</td><td>{$row["ft_pct"]}</td><td>{$row["reb_pg"]}</td><td>{$row["pts_pg"]}</td><"
        . "td>{$row["ast_pg"]}</td><td>{$row["stl_pg"]}</td><td>{$row['blk_pg']}</td></tr>";
    }
    echo "</tbody></table></div></section>";
    $sql2 = "SELECT * FROM Players";
    $result2 = mysqli_query($conn, $sql2);
    echo "<section>";
    echo "<h1>Player Information</h1>";
    echo "<div class='tbl-header'>";
    echo "<table cellpadding='0' cellspacing='0' border='0'>";
    echo "<thead>";
    echo "<tr><th>First Name</th><th>Last Name</th><th>Team</th><th>Position</th>"
    . "<th>Jersey Number</th><th>Height</th><th>Weight</th><th>Age</th><th>College</th><th>Drafted Year</th>"
    . "<th>Drafted Round</th></tr></thead></table></div>";
    echo "<div class='tbl-content'>";
    while($row = mysqli_fetch_assoc($result2)) 
    {
        echo "<table cellpadding='0' cellspacing='0' border='0'>";
        echo "<tbody>";
        echo "<tr><td>{$row["firstname"]}</td><td>{$row["lastname"]}</td>"
        . "<td>{$row["team"]}</td><td>{$row["player_position"]}</td><td>{$row["jersey_number"]}</td>"
        . "<td>{$row["height"]}</td><td>{$row["weight"]}</td><td>{$row["age"]}</td><td>{$row["college"]}</td><"
        . "td>{$row["drafted_year"]}</td><td>{$row["drafted_round"]}</td></tr>\n";
    }
    echo "</tbody></table></div></section>";

    $sql3 = "SELECT * FROM Injuries";
    $result3 = mysqli_query($conn, $sql3);
    echo "<section>";
    echo "<h1>Player Injuries</h1>";
    echo "<div class='tbl-header'>";
    echo "<table cellpadding='0' cellspacing='0' border='0'>";
    echo "<thead>";
    echo "<tr><th>First Name</th><th>Last Name</th><th>Injury Description</th></tr></thead></table></div>";
    echo "<div class='tbl-content'>";
    while($row = mysqli_fetch_assoc($result3)) 
    {
        echo "<table cellpadding='0' cellspacing='0' border='0'>";
        echo "<tbody>";
        echo "<tr><td>{$row["firstname"]}</td><td>{$row["lastname"]}</td>"
        . "<td>{$row["injury"]}</td></tr>";
    }
    echo "</tbody></table></div></section>";
    ?>
  <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small>Copyright &copy; Major Stats</small>
    </div>
  </footer>
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->
    </body>
</html>
