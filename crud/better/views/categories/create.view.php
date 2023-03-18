<?php include_once __DIR__ . './../partials/header.view.php'; ?>

<!-- Main -->
<main>
    <div class="container">
        <div class="row mt-2">
            <div class="col">
                <h1>Add Category</h1>
            </div>
        </div>
        <?php if (!empty($errors)) : ?>
            <div class="alert alert-danger" role="alert">
                <ul>
                    <?php foreach ($errors as $key => $error) : ?>
                        <li><?php echo $key . " : " . $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        <div class="row mt-2 w-75 bg-light mx-auto">
            <div class="col">
                <?php include_once __DIR__ . DIRECTORY_SEPARATOR . 'form.view.php'; ?>
            </div>
        </div>
    </div>
</main>

<?php include_once __DIR__ . './../partials/footer.view.php'; ?>