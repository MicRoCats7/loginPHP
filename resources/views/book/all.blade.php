
@extends('layouts.main')

@section('content')
<h1 align="center" style="margin-top:160px">Buku Istimewa</h1>

@if (session()->has('succes'))
    <div class="alert alert-success col-lg-12" role="alert">
        {{ session()->get('succes') }}
    </div>
@endif

<div class="container">
    <div class="row mt-5">
        <form method="GET" action="/book/all/" class="d-flex">
            <div class="col-2" style="margin-right: 20px">
                <select class="form-select text-center" name="category" id="">
                    <option name="book_id" value="0"> -- Semua Kelas--</option>
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
{{-- looping book to table --}}
{{-- <a type="button" class="btn btn-success" style="margin-bottom: 12px" href="/book/create">Add New Data</a> --}}
        <div class="book-right row gap-5" style="margin: 50px 0">
          <?php foreach($books as $book): ?>
          <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="/assets/buku.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?= $book['judul']; ?></h5>
                <p class="card-text"><?= $book['pengarang']; ?></p>
                <div class="card-footer bg-transparent border-success">Rp. <?= $book['harga']; ?></div>
              </div>
            </div>
              <?php endforeach; ?>
            </div>  

<div class="d-flex justify-content-center mb-3">
    {!! $books->links() !!}
</div>
@endsection