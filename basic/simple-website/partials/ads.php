<?php $ads = include __DIR__ . './../data/ads_db.php'; ?>
<div id="siteAds">
    <h2>Ads</h2>

    <?php foreach ($ads as $ad) : ?>
    <section>
        <a id="aw0" target="_blank" href="<?php echo $ad['link']; ?>" onfocus="ss('aw0')" onmousedown="st('aw0')" onmouseover="ss('aw0')" onclick="ha('aw0')"><img src="<?php echo $ad['image_path']; ?>" border="0" width="80%" height="60%" alt="" class="img_ad"></a>
    </section>

    <?php endforeach; ?>
</div>