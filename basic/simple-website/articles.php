<?php
$pageName = 'Articles';
?>
<?php include_once __DIR__ . './partials/header.php'; ?>

<article id="mainArticle">
    <h2><?php echo $pageName; ?></h2>
    <?php include_once __DIR__ . './partials/article_contents.php'; ?>
</article>

<!-- Nav option will be here -->
<?php include_once __DIR__ . './partials/nav.php'; ?>

<!-- Ads section -->
<?php include_once __DIR__ . './partials/ads.php'; ?>

<?php include_once __DIR__ . './partials/footer.php'; ?>