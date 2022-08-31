
<?php
$mtach_bascket_array = [
    ["Home" => "Caserta ", "Away" => "Parma", "home_score" => "50", "away_score" => "60"],
    ["Home" => "Bologna", "Away" => "Verona", "home_score" => "48", "away_score" => "65"],
    ["Home" => "Pescara", "Away" => "Trento", "home_score" => "40", "away_score" => "90"],
    ["Home" => "Sassari", "Away" => "Cremona", "home_score" => "80", "away_score" => "60"],
    ["Home" => "Varese", "Away" => "Trieste", "home_score" => "60", "away_score" => "20"],
    ["Home" => "salerno", "Away" => "Foggia", "home_score" => "80", "away_score" => "80"],
    ["Home" => "Milano", "Away" => "Bari", "home_score" => "40", "away_score" => "56"],
    ["Home" => "Cagliari", "Away" => "Roma", "home_score" => "72", "away_score" => "65"],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>

</head>
<body>
    <h1>Risultati partite</h1>
    <h2>Giornata 8</h2>
    <ul>
        <?php for ($i = 0; $i < count($mtach_bascket_array); $i++): ?>
        <li><?=$mtach_bascket_array[$i]['Home']?> - <?=$mtach_bascket_array[$i]['Away']?> : <strong><?=$mtach_bascket_array[$i]['home_score']?> | <?=$mtach_bascket_array[$i]['away_score']?></strong></li>
        <?php endfor?>
    </ul>
</body>
</html>