@extends('layouts.main')
<link rel="stylesheet" href="/css/home.css">

@section('content')
    <div class="hero">
        <div class="content-left">
            <div class="text-left">
                <h1>Perpusatakaan Buku terbesar seIndonesi</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde exercitationem ipsum ipsam consectetur error in modi, id   architecto a, quidem temporibus autem perferendis iure mollitia? Nisi, suscipit sit! Voluptatibus provident, totam ea molestiae exercitationem rem facilis doloremque. Atque ullam quidem repudiandae vero, cupiditate cum labore corrupti odio nam accusamus velit.</p>
            </div>
        </div>
        <div class="content-right">
            <div class="img-right">
                <img src="/assets/buku.png" alt="">
            </div>
        </div>
    </div>
    <div class="book">
        <div class="book-left">
            <div class="text-book">
                <h1>Buku-Buku Terkini</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde</p>
            </div>
        </div>
        <div class="book-right" style="margin-top: 20px">
          <?php foreach($books as $books): ?>
          <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="/assets/buku.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"><?= $books['judul']; ?></h5>
                <p class="card-text"><?= $books['pengarang']; ?></p>
                <div class="card-footer bg-transparent border-success">Rp. <?= $books['harga']; ?></div>
              </div>
            </div>
              <?php endforeach; ?>

            </div>
            <div class="soMore">
                      <a href="/book/all">Lihat lebih banyak</a>
            </div>
    </div>
    <div class="footer">
        <div class="footer-title">
            <h1>&copy;Copyright Amri Iqra - Perpusatakaan</h1>
        </div>
    </div>
@endsection