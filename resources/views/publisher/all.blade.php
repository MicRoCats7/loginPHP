
@extends('layouts.main')

@section('content')
<h1 align="center">List Publisher</h1>
{{-- looping book to table --}}
<table class="table table-success table-striped">
    <thead>
    <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Alamat</th>
        <th scope="col">Book</th>
        <th scope="col">Aksi</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($publishers as $publisher): ?>
    <tr>
        <td scope="row"><?= $publisher['id']; ?></td>
        <td><?= $publisher['nama']; ?></td>
        <td><?= $publisher['email']; ?></td>
        <td><?= $publisher['alamat']; ?></td>
        <td>
            @foreach ($publisher->book as $book)
                <ul>
                    <li>{{ $book->judul}}</li>
                </ul>
            @endforeach
        </td>
        <td>
            <a type="button" href="/publisher/detail/{{$publisher -> nama }}" class="btn btn-primary">Detail</a>
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
@endsection