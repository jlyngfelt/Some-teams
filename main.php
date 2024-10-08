<?php
require __DIR__ ."/data.php";
?>

<main class="main-main">
    <?php
        foreach ($teams as $team => $groups) {
        ?><article class="card"><h2><?=$team;?></h2><article?php
        ?> <a href=" <?= $groups['url'] ?> "><img src="<?= $groups['logo']?>" alt="Team logo" width="100px" height="100px"></a> 
    <ul>
        <li><p>League: <?= $groups['league']?></p></li>
        <li><p>City: <?= $groups['city']?></p></li>
        <li><p>Uefa-ranking: <?= $groups['uefa-coefficient-ranking']?></p></li>
        <li><p>Group: <?= $groups['group']?></p></li>

    </ul></article>
    
    <?php
    }
    ?>
</main>


