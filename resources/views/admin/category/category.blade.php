<!-- resources/views/admin/category.blade.php -->
@extends('layouts.admin')

@section('page-header')
<div class="page-header">
    <div class="container-fluid">
        <h2 class="h5 no-margin-bottom">Category</h2>
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

<form action="{{ url('addCat') }}" method="POST">
    @csrf
    <div class="col form-group">
        <input type="text" name="category" placeholder="Tambah kategori" required>
        <input type="submit" class="btn btn-primary" value="Tambah Kategori">
    </div>
</form>

<div class="col-lg-3 col-md-6">
    <strong class="text-uppercase">Daftar Kategori</strong>
    <table class="table">
        <thead>
            <tr>
                <th>Judul Kategori</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cat as $d)
                <tr>
                    <td><a href="#">{{ $d->cat_title }}</a></td>
                    <td>
                        <a href="{{ url('editCat', $d->id) }}" class="text-info">Edit</a>
                        <a href="{{ url('deleteCat', $d->id) }}" class="text-danger" onclick="confirmDelete(event)">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    function confirmDelete(ev) {
        ev.preventDefault();
        var url = ev.currentTarget.getAttribute('href');
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Data tidak bisa dipulihkan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        });
    }
</script>
@endsection
