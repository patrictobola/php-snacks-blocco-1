<?php
$matches = [
    'match_1' => [
        'match_number' => 'Match 1',
        'home_team' => ['team_name' => 'Philadelphia 76ers', 'score' => 119],
        'away_team' => ['team_name' => 'Boston Celtics', 'score' => 115]
    ],
    'match_2' => [
        'match_number' => 'Match 2',
        'home_team' => ['team_name' => 'Phoenix Suns', 'score' => 87],
        'away_team' => ['team_name' => 'Denver Nuggets', 'score' => 97]
    ],
    'match_3' => [
        'match_number' => 'Match 3',
        'home_team' => ['team_name' => 'Miami Heat', 'score' => 105],
        'away_team' => ['team_name' => 'New York Knicks', 'score' => 97]
    ],
    'match_4' => [
        'match_number' => 'Match 4',
        'home_team' => ['team_name' => 'Los Angeles Lakers', 'score' => 113],
        'away_team' => ['team_name' => 'Golden State Warriors', 'score' => 121]
    ],
    'match_5' => [
        'match_number' => 'Match 5',
        'home_team' => ['team_name' => 'Miami Heat', 'score' => 111],
        'away_team' => ['team_name' => 'Boston Celtics', 'score' => 105]
    ],
    'match_6' => [
        'match_number' => 'Match 6',
        'home_team' => ['team_name' => 'Sacramento Kings', 'score' => 108],
        'away_team' => ['team_name' => 'Washington Wizards', 'score' => 118]
    ],

];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php foreach ($matches as $match) :
        $home = $match['home_team'];
        $away = $match['away_team'];
    ?>
        <h1><?= $match['match_number'] ?></h1>
        <h3><?= $home['team_name'] ?> vs <?= $away['team_name'] ?> | <?= $home['score'] ?> - <?= $away['score'] ?></h3>
    <?php endforeach ?>
</body>


</html>