@extends('dashboard.layout.main')

@section('content')
<h1 align="center">Halaman Buku Tepopuler.</h1>

@if (session()->has('succes'))
    <div class="alert alert-success col-lg-12" role="alert">
        {{ session()->get('succes') }}
    </div>
@endif



{{-- looping book to table --}}
<div class="container">
    <div class="row">
        <form method="GET" action="/dashboard/book/all/" class="d-flex">
            <a role="button" class="btn btn-primary col-2" style="margin-bottom: 12px; margin-right: 20px" href="/dashboard/book/create">Tambah Data</a>
            <div class="col-4" style="margin-right: 20px">
                <select class="form-select text-center" name="category" id="">
                    <option name="book_id" value="0"> -- Publisher --</option>
                    @foreach ($publisher as $item)
                        @if (request('category') == $item->id)
                            <option name="category" value="{{ $item->id }}" selected>{{ $item->nama }}</option>
                        @else
                        <option name="category" value="{{ $item->id }}">{{ $item->nama }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="col-5 d-flex" style="margin-bottom: 12px">
                <input type="search" name="search" value="{{ request()->input('search') }}" class="form-control" placeholder="Search"  style="margin-right: 20px">
                <button type='submit' class='btn btn-primary'>
                    {{('Search') }}
                </button>
            </div>
        </form>
    </div>
</div>
@if ($books->count()>0)
@else
    <div class="alert alert-danger col-lg-12" role="alert">
        Data tidak ditemukan
    </div>
@endif
<table class="table table-primary table-striped">
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
    <?php 
        $no = $books->firstItem();  
    ?>
    <?php foreach($books as $book): ?>
    <tr>
        <th scope="row"><?= $no++; ?></th>
        <td><?= $book['judul']; ?></td>
        <td><?= $book['pengarang']; ?></td>
        <td><?= $book['harga']; ?></td>
        <td>
            <a type="button" href="/dashboard/book/detail/{{$book ->judul }}" class="btn btn-primary">Detail</a>
            <a type="button" href="/dashboard/book/edit/{{$book ->id }}" class="btn btn-warning">Edit</a>
            <form action="/dashboard/book/delete/{{$book->id}}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onClick="return confirm('Apakah Kamu yakin? ')">Hapus</button>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<div class="d-flex justify-content-center">
    {!! $books->links() !!}
</div>
@endsection