<?php 
    include dirname(__DIR__) . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'init.php';
    require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'head.php'; 
    require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'header.php';

    $file = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'portfolio.csv';
    $projects = array_reverse(get_csv_files($file, 'project'));
?>

<main class="portfolio_main">
    
    <?php foreach($projects as $project): ?>
        <article class="portfolio_article">
            <div class="portfolio_image">
                <a href="<?= $project['url'] ?>" target="_blank">
                    <img src="<?= $project['image']?>" class="portfolio_img" alt="Image du projet">
                </a>
            </div>
            <div class="content">
                <h2><?= $project['name'] ?></h2>
                <h3><?= $project['technologies'] ?></h3>
                <p><?= $project['description'] ?></p>
                <button><a href="<?= $project['url'] ?>" target="_blank">Visiter</a></button>
            </div>
        </article>
    <?php endforeach ?>
    
</main>

<?php
    require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'footer.php';
?>