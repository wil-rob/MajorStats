<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php
        
        //require_once ('connect.php');
        
        // Get cURL resource
        $ch = curl_init();
        $date = date("Ymd");

        // Set url
        curl_setopt($ch, CURLOPT_URL, 'https://api.mysportsfeeds.com/v2.1/pull/nba/2019-playoff/games.json');

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
        print_r ($data);
        /*
        $roster = $data['players'];
        
        
        foreach ($roster as $ros => $value)
        {
            $firstname = $value['player']["firstName"];
            $lastname = $value['player']["lastName"];
            $team_abbr = $value['player']['currentTeam']['abbreviation'];
            $position = $value['player']['primaryPosition'];
            $jersey_number = $value['player']['jerseyNumber'];
            $height = $value['player']['height'];
            $weight = $value['player']['weight'];
            $age = $value['player']['age'];
            $college = $value['player']['college'];
            $drafted_year = $value['player']['drafted']['year'];
            $drafted_round = $value['player']['drafted']['round'];
            
            // preparing statement for insert query
            $st = mysqli_prepare($conn, 'INSERT INTO Players(firstname, lastname, team, player_position,
                    jersey_number, height, weight, age, college, drafted_year, drafted_round) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');

            // bind variables to insert query params
            mysqli_stmt_bind_param($st, 'sssssssssss', $firstname, $lastname, $team_abbr, $position,
                    $jersey_number, $height, $weight, $age, $college, $drafted_year, $drafted_round);

            // executing insert query
            mysqli_stmt_execute($st);
        }
        */
        
        ?>
    </body>
</html>

