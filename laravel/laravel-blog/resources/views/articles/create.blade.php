@extends('themes.coreui.layouts')

@section('content')
  <div class="container">
    <div class="row mt-2">
      <div class="col">
        <h1>Add Post</h1>
      </div>
    </div>
    <div class="row mt-2 w-75 bg-light mx-auto">
      <div class="col">
        @include('articles.form')
      </div>
    </div>
  </div>
@endsection