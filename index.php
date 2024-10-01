<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <?php
    require __DIR__ ."/data.php";

foreach ($teams as $key => $team) { 
    ?> <h1><?= $key; ?></h1><br><?php 
    foreach ($team as $category => $value){

        echo $category ?>: <?php echo $value;?><br><?php
    }
}


//     echo $team['league']; ?><br><?php
//     echo $team['uefa-coefficient-ranking']; ?><br><?php
//     echo $team['city']; ?><br><?php
//     echo $team['group']; ?><br><?php
//     echo $team['logo']; ?><br><?php
//     echo $team['url']; ?><br><?php
// }
//     ?>
</body>
</html>