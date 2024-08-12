<!-- resources/views/admin/category.blade.php -->
@extends('layouts.admin')

@section('page-header')
<div class="page-header">
    <div class="container-fluid">
        <h2 class="h5 no-margin-bottom">Add New Book</h2>
    </div>
</div>
@endsection

@section('content')
{{-- ------------ ALERT SUCCESS OR FAIL ------------ --}}
<div class="mt-0">
  @if (session()->has('msg'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session()->get('msg') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
  @endif
  @if ($errors->any())
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
  @endif
</div>

{{-- ------------ ADD BOOK ------------ --}}
<form action="{{url('storeBook')}}" method="POST" class="col" enctype="multipart/form-data">
  @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="title">title</label>
      <input type="text" class="form-control" name="title" id="title" placeholder="title">
    </div>
    <div class="form-group col-md-6">
      <label for="author_name">author name</label>
      <input type="text" class="form-control" name="author_name" id="author_name" placeholder="author name">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="price">price</label>
      <input type="text" class="form-control" name="price" id="price" placeholder="price">
    </div>
    <div class="form-group col-md-4">
      <label for="quantity">quantity</label>
      <input type="text" class="form-control" name="quantity" id="quantity" placeholder="quantity">
    </div>
    <div class="form-group col-md-4">
      <label for="category">category</label>
      <select class="form-control" id="category" name="category">
        <option value="">select category</option>
        @foreach ($category as $cat)
        <option value="{{$cat->id}}">{{$cat->cat_title}}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="description">description</label>
    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="book_img">book image</label>
      <input type="file" class="form-control-file" name="book_img" id="book_img">
    </div>
    <div class="form-group col-md-6">
      <label for="author_img">author image</label>
      <input type="file" class="form-control-file" name="author_img" id="author_img">
    </div>
  </div>
  <button type="submit" value="add book" class="btn btn-primary">Submit</button>
</form>
@endsection
