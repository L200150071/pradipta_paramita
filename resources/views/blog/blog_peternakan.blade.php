<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CV.Pradipta Paramita</title>

  <!-- Bootstrap core CSS -->
  <link href="blog/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="blog/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="blog/css/clean-blog.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" >Peternakan</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{url('artikelpertanian.html')}}">Pertanian</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{url('artikelpeternakan.html')}}">Peternakan</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{url('artikelperikanan.html')}}">Perikanan</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{url('artikeldekomposer.html')}}">Dekomposer</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{url('artikelracunlalat.html')}}">Racun Lalat</a>
          </li>




        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/headline peternakan.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1>Peternakan</h1>
            <h2>Omset Peternakan naik drastis tanpa membayakan ternak. Mau ?</h2>
            <span class="subheading">Silahkan Baca artikel pilihan kami</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">


          @foreach($artikell as $artikel)
          <a href="artikel/peternakan/{{ $artikel -> id }}">
            <h2 class="post-title">
             {{$artikel -> judul_artikel}}
            </h2>
            <h3 class="post-subtitle">
            {!!substr($artikel -> isi_artikel,0,100)!!}...
            </h3>
          </a>




          <p class="post-meta">Diupload oleh CV.PRADIPTA 
            <a href="/">Home</a>
            Di Update Pada {{$artikel -> updated_at}}</p>
            @endforeach

            {{ $artikell -> render() }}

        </div>

        
        <hr>
        <!-- Pager -->

      </div>
    </div>
  </div>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p class="copyright text-muted">Copyright &copy; CV.Pradipta Paramita</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="blog/vendor/jquery/jquery.min.js"></script>
  <script src="blog/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="blog/js/clean-blog.min.js"></script>

</body>

</html>
