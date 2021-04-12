<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Engagement&family=PT+Sans&family=Playfair+Display:wght@300&display=swap" rel="stylesheet">

    <style>
      body{font-family: 'PT Sans', sans-serif !important;}
      h1{font-family: 'Engagement', sans-serif !important;}
    </style>
    <title>Penegak Rohani &middot; About</title>
  </head>
  <body>

    <!-- header section start -->
    <div class="container my-5 text-center">
      <img class="mb-2" src="<?php echo base_url();?>assets/img/book.png" width="30" height="30">
      <h1>Penegak Rohani</h1>
      <p class="lead">
        Kumpulan lirik lagu yang sering dinyanyikan di Gereja Pentakosta Indonesia.
      </p>
    </div>
    <!-- header section end -->

    <!-- nav section start -->
    <div class="container text-center">
        <nav class="mb-3">
          <ul class="nav nav-pills justify-content-center">
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>">Beranda</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Bahasa</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?php echo base_url();?>bahasa/indonesia">Indonesia</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url();?>bahasa/tapanuli">Tapanuli</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url();?>bahasa/nias">Nias</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url();?>bahasa/pakpak">Pakpak</a>
                </ul>
            </li>
            <li class="nav-item"><a class="active nav-link" href="#">Tentang</a></li>
        </ul>
        </nav>

    </div>
    <!-- nav section end -->
    <div class="container mt-5 justify-content-center">
      <h1 class="text-center">Tentang</h1>
      <p class="lead text-center">Web ini dibuat atas inisiasi pribadi.</p>
      <p class="lead text-center">Fokus utama Web ini dibuat adalah <br>untuk memudahkan akses terhadap lirik lagu dari Buku Penegak Rohani Gereja Pentakosta Indonesia.</p>
      <p class="lead text-center">Lain daripada itu, Web ini juga dibuat untuk memuat lirik lagu rohani lainnya.</p>
      <p class="lead text-center">Web ini tidak mengambil keuntungan pribadi dalam bentuk apapun.</p>
      <p class="lead text-center">Anda juga dapat menjadi kontributor untuk menambah data lirik yang ada pada Web ini.</p>
      <p class="lead text-center">
      Temukan saya : <br>
      <a href="https://web.facebook.com/charlie.nainggolan04"><img width="30" height="30" src="<?php echo base_url(); ?>assets/img/facebook.png"></a>
      <a href="https://twitter.com/charlie_ngl"><img width="30" height="30" src="<?php echo base_url(); ?>assets/img/twitter.png"></a>
      <a href="https://www.instagram.com/charlie.ngl/"><img width="30" height="30" src="<?php echo base_url(); ?>assets/img/instagram.png"></a>
      </p>

    </div>

    <!-- footer section start -->
    <div class="container my-5 text-center">
      Desain dan Sistem oleh Charlie Nainggolan
    </div>
    <!-- footer section end -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  </body>
</html>
