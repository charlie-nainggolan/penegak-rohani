<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Engagement&family=PT+Sans&family=Playfair+Display:wght@500&display=swap" rel="stylesheet">

  <style>
    body{font-family: 'PT Sans', sans-serif !important;}
    h1{font-family: 'Engagement', sans-serif !important;}
  </style>
  <title>Penegak Rohani</title>
</head>
  <body>

    <!-- header section start -->
    <div class="container my-5 text-center">
      <img class="mb-2" src="<?php echo base_url();?>assets/img/book.png" width="50" height="50">
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
            <li class="nav-item"><a class="nav-link active" href="<?php echo base_url(); ?>">Beranda</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Bahasa</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Indonesia</a></li>
                    <li><a class="dropdown-item" href="#">Tapanuli</a></li>
                    <li><a class="dropdown-item" href="#">Nias</a></li>
                    <li><a class="dropdown-item" href="#">Pakpak</a>
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="#">Tentang</a></li>
        </ul>
        </nav>

        <!-- search section start -->
        <div class="container text-center">
          <form action="search.php" method="get">
              <input type="search" class="form-control col-4" name="keywords" id="search" placeholder="Judul atau Lirik">
              <button type="submit" class="btn btn-primary mb-5">Cari Lirik!</button>
          </form>
        </div>
        <!-- search section end -->
    </div>
    <!-- nav section end -->

    <!-- lyrics list start -->
    <div class="container my-3">
      <?php
        foreach ($lirik as $d) {
      ?>
        <h3 style="font-family: 'Playfair Display', serif !important;" class="text-center mb-5"><?php echo $d->judul; ?> </h3>
          <div class="row text-center justify-content-center">
            <?php echo $d->lirik; ?>

          <div
              <?php
                }
              ?>

          </div>
    </div>
    <!-- lyrics list end -->



    <!-- footer section start -->
    <div class="container my-5 text-center">
      Desain dan Sistem oleh Charlie Nainggolan
    </div>
    <!-- footer section end -->

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  </body>
</html>
