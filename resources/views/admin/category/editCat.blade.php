<!-- resources/views/admin/edit.blade.php -->
@extends('layouts.base')

@section('page-header')
<div class="page-header">
    <div class="container-fluid">
        <h2 class="h5 no-margin-bottom">Edit Kategori</h2>
    </div>
</div>
@endsection

@section('content')
<div class="container-fluid mb-2">
    <strong class="text-uppercase">Judul Kategori</strong>
</div>

<form action="{{ url('updateCat', $data->id) }}" method="POST">
    @csrf
    <div class="col form-group">
        <input type="text" name="category_name" value="{{ $data->cat_title }}">
        <input type="submit" class="btn btn-primary" value="Update Kategori">
    </div>
</form>
@endsection
