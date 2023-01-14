
@extends('layouts.main')

@section('content')
<h1 align="center">Halaman Buku Tepopuler.</h1>

@if (session()->has('succes'))
    <div class="alert alert-success col-lg-12" role="alert">
        {{ session()->get('succes') }}
    </div>
@endif



{{-- looping book to table --}}
<a type="button" class="btn btn-success" style="margin-bottom: 12px" href="/book/create">Add New Data</a>
<table class="table table-success table-striped">
    <thead>
    <tr>
        <th scope="col">No</th>
        <th scope="col">Judul</th>
        <th scope="col">Pengarang</th>
        <th scope="col">Harga</th>
        <th scope="col">Aksi</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($books as $book): ?>
    <tr>
        <th scope="row"><?= $book['id']; ?></th>
        <td><?= $book['judul']; ?></td>
        <td><?= $book['pengarang']; ?></td>
        <td><?= $book['harga']; ?></td>
        <td>
            <a type="button" href="/book/detail/{{$book ->id }}" class="btn btn-primary">Detail</a>
            <a type="button" href="/book/edit/{{$book ->id }}" class="btn btn-warning">Edit</a>
            <form action="/book/delete/{{$book->id}}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onClick="return confirm('Apakah Kamu yakin? ')">Hapus</button>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
@endsection