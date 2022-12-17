<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">DuokPenkis</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="#">Home
                  <span class="visually-hidden">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Separated link</a>
                </div>
              </li>
            </ul>
            <form class="d-flex pt-3">
              <input class="form-control me-sm-2" type="search" placeholder="Search">
              <button class="btn btn-secondary my-2 my-sm-0 " type="submit">Search</button>
            </form>
            <ul class="navbar-nav mr-auto">
            @if (Route::has('login'))
                @auth
                    <li class="nav-item">                    
                        <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">Log in</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                        </li>    
                    @endif
                @endauth
            @endif
            </ul>
          </div>
        </div>
      </nav>

      <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ $preke->nuotauka }}" alt="..." /></div>
                <div class="col-md-6">
                    <h1 class="display-5 fw-bolder">{{ $preke->pavadinimas }}</h1>
                    <div class="fs-5 mb-5">
                        <span>{{ $preke->kaina }}€</span>
                    </div>
                    <h4>Aprašymas</h4>
                    <p class="lead" >{{ $preke->aprasymas }}</p>
                    <div class="fs-6 mb-5 mt-5"> 
                        <h4>Specifikacija</h4>
                        <span> Prekinis Ženklas - {{ $preke->prekiniszenklas }}</span><br>
                        <span> Spalva - {{ $preke->spalva }}</span><br>
                        <span> Medžiagos Tipas - {{ $preke->medziagos_tipas }}</span><br>
                    </div>
                    <div class="d-flex">
                        <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                        <button class="btn btn-outline-dark flex-shrink-0" type="button">
                            <i class="bi-cart-fill me-1"></i>
                            Į Krepšelį
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
      
</body>
</html>