<?php include_once __DIR__ . './../partials/header.view.php'; ?>

<!-- Main -->
<main>
  <div class="container table-container mt-5">
    <div class="row mb-2 justify-content-around ">
      <div class="col-6"><h2>All Categories</h2></div>
      <div class="col-6 text-end">
        <a class="btn btn-outline-primary" href="/categories/create">Add Category</a>
      </div>
    </div>
    <div class="row">
      <div class="col">
        
        <table
          class="table table-striped table-hover table-bordered text-center"
        >
          <thead class="table-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Image thumbnail</th>
              <th scope="col">Name</th>
              <th scope="col">Date</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($categories as $index => $category): ?>
            <tr>
              <th scope="row"><?php echo $index + 1; ?></th>
              <td><img class="w-50" src="<?php echo $category->image_path; ?>" alt=""></td>
              <td><?php echo $category->name; ?></td>
              <td><?php echo $category->created_at; ?></td>
              <td class="text-center text-success">
                <a href="/edit?id=<?php echo $category->id; ?>"><i class="fas fa-edit"></i></a>
              </td>
              <td class="text-center text-danger">
                <i class="fa-solid fa-trash"></i>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <!-- Pagination -->
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-center">
            <li class="page-item disabled">
              <a
                class="page-link"
                href="#"
                tabindex="-1"
                aria-disabled="true"
                >Previous</a
              >
            </li>
            <li class="page-item">
              <a class="page-link" href="nextpage.html">1</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="nextpage.html">2</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="nextpage.html">3</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="nextpage.html">Next</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</main>

<?php include_once __DIR__ . './../partials/footer.view.php'; ?>