@extends('dashboard.layout.main')

@section('content')
    <center><h1 class="mt-3">Tambah Data</h1></center>
    <div class="col-lg-8">
        <form method="post" action="/dashboard/book/add">
            @csrf
            <div class="form-group">    
                <label for="judul">Judul</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror"  id="judul" name="judul" value="{{ old('judul')}}" placeholder="Masukkan Judul Buku">
            </div>
            <div class="form-group">
                <label for="pengarang">Pengarang</label>
                <input type="text" class="form-control @error('pengarang') is-invalid @enderror" id="pengarang" name="pengarang" value="{{ old('pengarang')}}" placeholder="Masukkan Nama Pengarang">
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ old('harga')}}" placeholder="Masukkan Harga Buku">
            </div>
            <div class="form-group">
                <label for="publisher">Publisher</label>
                <select class="form-control" name="publisher_id" id="">
                    @foreach ($publisher as $publish)
                        <option name="publisher_id" value="{{ $publish->id }}">{{ $publish->nama }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top: 12px">Tambah Data</button>
        </form>
    </div>
@endsection