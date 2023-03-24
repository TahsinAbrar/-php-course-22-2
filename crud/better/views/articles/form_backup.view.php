<form action="store.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input name="title" type="text" class="form-control" id="title" placeholder="Enter Title" value="<?php echo $article->title; ?>">
    </div>
    <div class="form-floating mb-3">
        <textarea required name="description" class="form-control" placeholder="Write Here" id="floatingTextarea2" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Description</label>
    </div>
    <div class="mb-3">
        <label for="author_name" class="form-label">Author Name</label>
        <input name="author_name" required type="text" class="form-control" id="author_name" placeholder="Enter Author Name">
    </div>
    <div class="mb-3">
        <select name="categories" required class="form-select" aria-label="Default select example">
            <option selected>Category</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
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