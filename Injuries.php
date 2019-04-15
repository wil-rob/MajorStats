<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Current Player Injuries</h1>
        <?php
        
        require_once ('connect.php');
        
        // Get cURL resource
        $ch = curl_init();

        // Set url
        curl_setopt($ch, CURLOPT_URL, 'https://api.mysportsfeeds.com/v2.0/pull/nba/injuries.json');

        // Set method
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

        // Set options
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        // Set compression
        curl_setopt($ch, CURLOPT_ENCODING, "gzip");

        // Set headers
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Authorization: Basic " . base64_encode('7a623d32-510c-4ccf-8a7b-8a3af9' . ":" . 'MYSPORTSFEEDS')
        ]);

        // Send the request & save response to $resp
        $json_data = curl_exec($ch);
        curl_close($ch);
                
        $data = json_decode($json_data, true);
        $injuries = $data['players'];
        
        foreach ($injuries as $injury => $value)
        {
            $player_first = $value["firstName"];
            $player_last = $value["lastName"];
            $injury_desc = $value["currentInjury"]["description"];
            
            // preparing statement for insert query
            $st = mysqli_prepare($conn, 'INSERT INTO Injuries(firstname, lastname, injury) VALUES (?, ?, ?)');

            // bind variables to insert query params
            mysqli_stmt_bind_param($st, 'sss', $player_first, $player_last, $injury_desc);

            // executing insert query
            mysqli_stmt_execute($st);
        }
        
        ?>
    </body>
</html>
