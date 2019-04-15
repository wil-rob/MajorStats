<?php

        require_once ('connect.php');

        // Get cURL resource
        $ch = curl_init();

        // Set url
        curl_setopt($ch, CURLOPT_URL, 'https://api.mysportsfeeds.com/v2.1/pull/mlb/players.json');

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

                
        $json_data = curl_exec($ch);
        curl_close($ch);
                
        $data = json_decode($json_data, true);
        
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
            $bats = $value['player']['handedness']['bats'];
            $throws = $value['player']['handedness']['throws'];
            
            // preparing statement for insert query
            $st = mysqli_prepare($conn, 'INSERT INTO MLB_Players(firstname, lastname, team, player_position,
                    jersey_number, height, weight, age, college, bats, throws) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');

            // bind variables to insert query params
            mysqli_stmt_bind_param($st, 'sssssssssss', $firstname, $lastname, $team_abbr, $position,
                    $jersey_number, $height, $weight, $age, $college, $bats, $throws);

            // executing insert query
            mysqli_stmt_execute($st);
        }
?>