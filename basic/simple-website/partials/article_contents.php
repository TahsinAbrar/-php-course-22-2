<?php
include_once __DIR__ . './../functions/helpers.php';

$articles = include __DIR__ . './../data/articles_db.php';
?>

<?php foreach ($articles as $article) : ?>
    <section>
    <h3><?php echo $article['title']; ?></h3>
    <img width="50%" src="<?php echo $article['image_path']; ?>" alt="">
    <p><?php echo excerpt($article['description']) . '<a href="#">see more</a>';  ?></p>
    <?php
        if ($pageName === "Homepage") { break; }
    ?>
</section>

<?php endforeach; ?>