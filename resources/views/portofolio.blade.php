<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portofolio | Naba Elang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">

    <!-- Akhir CSS -->
</head>
  <body id="home">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">Naba Elang</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/portofolio">Portofolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <!-- Akhir Navbar -->

    <!-- Projects -->
    <section id="projects" style="background-color: #e2edff;">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h2>My Projects</h2>
          </div>
        </div>
        <div class="row">
         @foreach ($posts as $item)
         <div class="col-md-4 mb-3">
          <div class="card">
            <img src="{{ asset('/storage/posts/'.$item->image) }}" class="card-img-top" alt="Projects 6" style="width: 100%; height: 200px; object-fit:cover">
            <div class="card-body">
              <h5 class="card-title">{{ $item->title }}</h5>
              <p class="card-text">{!! $item->content !!}</p>
            </div>
          </div>
        </div>
         @endforeach
        </div>
      </div>
    </section>
    <!-- Akhir Projects -->

    <!-- Footer -->
    <footer class="bg-primary text-white text-center pb-5">
      <p>Creater with love by <a href="https://www.instagram.com/naba_pmlt/" class="text-white fw-bold">Naba Elang</a></p>
    </footer>
    <!-- Akhir Footer -->
</html>