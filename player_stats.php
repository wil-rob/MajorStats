<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Current Player Stats</h1>
        <?php
        
        require_once ('connect.php');
        
        // Get cURL resource
        $ch = curl_init();

        // Set url
        curl_setopt($ch, CURLOPT_URL, 'https://api.mysportsfeeds.com/v2.1/pull/nba/2018-2019-regular/player_stats_totals.json');

        // Set method
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

        // Set options
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // Set compression
        curl_setopt($ch, CURLOPT_ENCODING, "gzip");

        // Set headers
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Basic " . base64_encode('8d26e691-9f5d-4dee-986a-f45623' . ":" . 'MYSPORTSFEEDS')
        ]);

        // Send the request & save response to $resp
        $resp = curl_exec($ch);

        if (!$resp) {
                die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
        } else {
                echo "Response HTTP Status Code : " . curl_getinfo($ch, CURLINFO_HTTP_CODE);
        }

        // Close request to clear up some resources
        curl_close($ch);
        
        $data = json_decode($resp, true);
        
        $stats = $data['playerStatsTotals'];
        
        
        foreach ($stats as $stat => $value)
        {
            $firstname = $value['player']["firstName"];
            $lastname = $value['player']["lastName"];
            $team_abbr = $value['player']['currentTeam']['abbreviation'];
            $position = $value['player']['primaryPosition'];
            $jersey_number = $value['player']['jerseyNumber'];
            $fgpct = $value['stats']['fieldGoals']['fgPct'];
            $ftpct = $value['stats']['freeThrows']['ftPct'];
            $rebpg = $value['stats']['rebounds']['rebPerGame'];
            $ptspg = $value['stats']['offense']['ptsPerGame'];
            $astpg = $value['stats']['offense']['astPerGame'];
            $stlpg = $value['stats']['defense']['stlPerGame'];
            $blkpg = $value['stats']['defense']['blkPerGame'];

            
            // preparing statement for insert query
            $st = mysqli_prepare($conn, 'INSERT INTO Player_Stats(firstname, lastname, team, player_position,
                    jersey_number, fg_pct, ft_pct, reb_pg, pts_pg, ast_pg, stl_pg, blk_pg) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');

            // bind variables to insert query params
            mysqli_stmt_bind_param($st, 'ssssssssssss', $firstname, $lastname, $team_abbr, $position,
                    $jersey_number, $fgpct, $ftpct, $rebpg, $ptspg, $astpg, $stlpg, $blkpg);

            // executing insert query
            mysqli_stmt_execute($st);
        }
        ?>
    </body>
</html>