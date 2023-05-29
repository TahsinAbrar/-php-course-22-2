@extends('themes.coreui.layouts')

@section('content')
  <div class="container table-container mt-5">
    <div class="row mb-2 justify-content-around ">
      <div class="col-6">
        <h2>All Posts</h2>
      </div>
      <div class="col-6 text-end">
        <a class="btn btn-outline-primary" href="{{ route('manage.articles.create') }}">Add Article</a>
      </div>
    </div>
    <div class="row">
      @if (session()->has('message'))
      <span class="text-success">{{ session()->get('message') }}</span>
      @endif
      <div class="col">

        <table class="table table-striped table-hover table-bordered text-center">
          <thead class="table-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Image Thumbnail</th>
              <th scope="col">Title</th>
              <th scope="col">Category</th>
              <th scope="col">Date</th>
              <th scope="col">Author Name</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($articles as $index => $article)
            <tr>
              <th scope="row">{{ $index+1 }}</th>
              <td>{{ $article->image_path }}</td>
              <td>{{ $article->title }}</td>
              <td>{{ $article->categories }}</td>
              <td>{{ $article->author_name }}</td>
              <td>{{ $article->published_at }}</td>
              <td class="text-center text-success">
                <i class="fas fa-edit"></i>Edit
              </td>
              <td class="text-center text-danger">
                <i class="fa-solid fa-trash"></i>Delete
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <!-- Pagination -->
        <nav aria-label="Page navigation example">
          {{ $articles->links() }}
        </nav>
      </div>
    </div>
  </div>
@endsection
