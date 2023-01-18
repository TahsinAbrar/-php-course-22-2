<?php
// This line will execute after include file happened.
$pageName = 'About Us';
?>

<?php include_once __DIR__ . './partials/header.php'; ?> <!-- This line will execute first -->

<article id="mainArticle">
    <h2><?php echo $pageName ?? "About"; ?></h2>
    <section>
        <p>An About Us Page is a page on your website that tells your readers all about you. It includes a detailed
            description covering all aspects of your business and you as an entrepreneur. This can include the
            products
            or services you are offering, how you came into being as a business, your mission and vision, your aim,
            and
            maybe something about your future goals too. Your About Us page is your perfect opportunity to tell a
            compelling story about your business.</p>

        <p>Even though an About Us page is one of the most important elements of a website, it is often one of the
            most overlooked elements. Compared to a landing page, an About Us page help you communicate a range of
            things:</p>

        <ul>
            <li>The story of your brand and why you started it.</li>
            <li>The cause or customers that your business serves.</li>
            <li>Your business model or how your products are sourced/manufactured.</li>
        </ul>
    </section>
</article>

<!-- Nav option will be here -->
<?php include_once __DIR__ . './partials/nav.php'; ?>

<!-- Ads section -->
<?php include_once __DIR__ . './partials/ads.php'; ?>

<?php include_once __DIR__ . './partials/footer.php'; ?>