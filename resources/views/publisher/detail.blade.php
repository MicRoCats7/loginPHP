@extends('layouts.main')

@section('content')
    <center><h1 class="mt-3">Detail Buku</h1></center>
        <div class="from">
            <div class="from-group">
                <label for="judul">Nama</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{$publisher['nama']}}" readonly>
                </div>

                <div class="from-group">
                    <label for="judul">Email</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{$publisher['email']}}" readonly>
                </div>

                <div class="from-group">
                     <label for="judul">Alamat</label>
                    <input type="text" class="form-control" id="judul" name="judul" value="{{$publisher['alamat']}}" readonly>
                </div>
                    

                <a href="/publisher/all" class="btn btn-primary mt-3">Kembali</a>
         </div>
@endsection
