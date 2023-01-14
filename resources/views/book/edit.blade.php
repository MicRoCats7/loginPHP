@extends('layouts.main')

@section('content')
    <center><h1 class="mt-3">Edit book Data</h1></center>
    <div class="col-lg-8">
        <form method="post" action="/book/update/{{ $book->id}}">
            @csrf
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror"  id="judul" name="judul" value="{{ old('judul', $book->judul)}}" placeholder="Masukkan Judul Buku">
            </div>
            <div class="form-group">
                <label for="pengarang">Pengarang</label>
                <input type="text" class="form-control @error('pengarang') is-invalid @enderror" id="pengarang" name="pengarang" value="{{ old('pengarang', $book->pengarang)}}" placeholder="Masukkan Nama Pengarang">
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ old('harga', $book->harga)}}" placeholder="Masukkan Harga Buku">
            </div>
            <div class="form-group mb-3">
                <label for="exampleInputName">Publisher</label>
                <select class="form-control" name="publisher_id">
                    @foreach ($publisher as $publisher)
                    @if (old('publisher_id', $book->publisher_id == $publisher->id))
                            <option name="publisher_id" value="{{$publisher->id}}" selected>{{$publisher->nama}}</option>
                        @else
                            <option name="publisher_id" value="{{$publisher->id}}">{{$publisher->nama}}</option>
                        @endif                                    
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top: 12px">Update</button>
        </form>
    </div>
@endsection