<form action="/categories/store" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="name" class="form-label">Category Name</label>
        <input name="name" type="text" class="form-control" id="name" placeholder="Enter Category Name" value="<?php if (isset($old['name'])): echo $old['name']; endif; ?>">
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Default file input example</label>
        <input name="image_path" class="form-control" type="file" id="formFile">
    </div>
    <div class="mb-3">
        <button class="btn btn-primary" type="submit">
            Add Category
        </button>
    </div>

</form>