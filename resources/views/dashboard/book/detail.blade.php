@extends('dashboard.layout.main')

@section('content')
    <center><h1 class="mt-3">Detail Buku</h1></center>
        <div class="from">
            <div class="from-group">
                <label for="judul">Nama</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{$book['judul']}}" readonly>
                </div>

                <div class="list-group-item">
                    <label for="judul">Publisher</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{$book['publisher']['nama']}}" readonly>
                </div>

                <div class="from-group">
                    <label for="judul">Email</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{$book['pengarang']}}" readonly>
                </div>

                <div class="from-group">
                     <label for="judul">Alamat</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{$book['harga']}}" readonly>
                </div>
                    

                <a href="/dashboard/book/all" class="btn btn-primary mt-3">Kembali</a>
         </div>
@endsection
