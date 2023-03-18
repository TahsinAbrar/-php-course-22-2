<form action="/articles/store" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input
            name="title"
            type="text"
            class="form-control"
            id="title"
            placeholder="Enter Title"
            value="<?php if (isset($old['title'])): echo $old['title']; elseif (!empty($article->title)): echo $article->title; endif; ?>"
        >
    </div>
    <div class="form-floating mb-3">
        <textarea
            required
            name="description"
            class="form-control"
            placeholder="Write Here"
            id="floatingTextarea2"
            style="height: 100px"
        ><?php if (isset($old['description'])): echo $old['description']; elseif (!empty($article->description)): echo $article->description;  endif; ?></textarea>
        <label for="floatingTextarea2">Description</label>
    </div>
    <div class="mb-3">
        <label for="author_name" class="form-label">Author Name</label>
        <input
            name="author_name"
            required
            type="text"
            class="form-control"
            id="author_name"
            placeholder="Enter Author Name"
            value="<?php if (isset($old['author_name'])): echo $old['author_name']; elseif (!empty($article->author_name)): echo $article->author_name; endif; ?>"
        >
    </div>
    <div class="mb-3">
        <select name="categories" required class="form-select" aria-label="Default select example">
            <option selected value="">--Category--</option>
            <?php foreach ($categories as $category) : ?>
                <option
                    <?php if (isset($old['categories']) && $old['categories'] == $category->id): echo "selected"; elseif (!empty($article->categories) && $article->categories == $category->id): echo "selected"; endif; ?>
                    value="<?= $category->id ?>"><?= $category->name ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Default file input example</label>
        <input name="image_path" class="form-control" type="file" id="formFile">
    </div>
    <div class="mb-3">
        <button class="btn btn-primary" type="submit">
            Add Post
        </button>
    </div>

</form>