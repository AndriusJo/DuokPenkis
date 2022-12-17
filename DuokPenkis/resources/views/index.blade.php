<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sidebars/">
    <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }
  
        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
  
        .b-example-divider {
          height: 3rem;
          background-color: rgba(0, 0, 0, .1);
          border: solid rgba(0, 0, 0, .15);
          border-width: 1px 0;
          box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }
  
        .b-example-vr {
          flex-shrink: 0;
          width: 1.5rem;
          height: 100vh;
        }
  
        .bi {
          vertical-align: -.125em;
          fill: currentColor;
        }
  
        .nav-scroller {
          position: relative;
          z-index: 2;
          height: 2.75rem;
          overflow-y: hidden;
        }
  
        .nav-scroller .nav {
          display: flex;
          flex-wrap: nowrap;
          padding-bottom: 1rem;
          margin-top: -1px;
          overflow-x: auto;
          text-align: center;
          white-space: nowrap;
          -webkit-overflow-scrolling: touch;
        }
      </style>
  
      
      <!-- Custom styles for this template -->
      <link href="sidebars.css" rel="stylesheet">
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
              @auth
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Administratoriui</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{ route('kategorija.index') }}">Kategorijų langas</a>
                </div>
              </li>
              @endauth
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

    <main class="d-flex flex-nowrap">
      <div class="flex-shrink-0 p-3 bg-white" style="width: 280px;">
        <ul class="list-unstyled ps-0">
          <li class="mb-1 mt-3">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
              Home
            </button>
            <div class="collapse show" id="home-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Overview</a></li>
                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Updates</a></li>
                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Reports</a></li>
              </ul>
            </div>
          </li>
          <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
              Dashboard
            </button>
            <div class="collapse" id="dashboard-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Overview</a></li>
                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Weekly</a></li>
                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Monthly</a></li>
                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Annually</a></li>
              </ul>
            </div>
          </li>
          <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
              Orders
            </button>
            <div class="collapse" id="orders-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">New</a></li>
                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Processed</a></li>
                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Shipped</a></li>
                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Returned</a></li>
              </ul>
            </div>
          </li>
          <li class="border-top my-3"></li>
          <li class="mb-1">
            <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
              Account
            </button>
            <div class="collapse" id="account-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">New...</a></li>
                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Profile</a></li>
                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Settings</a></li>
                <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Sign out</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
    
    @auth
    <div class="contianer">
        <div class="container pt-5 pb-5 pl-14">
            <div>
                <button type="button" class="btn btn-secondary" onclick="window.location='{{route('preke.create') }}'">Sukurti Preke</button>
            </div>
        </div>
    @endauth        

    @if (session()->has('message'))
    <div class="alert alert-dismissible alert-success">
        <h4 class="alert-heading">{{ session()->get('message') }}</h4>
    </div>
        
    @endif
        <section class="">
            <div class="container px-4 px-lg-1 mt-1">
                <div class="row gx-4 gx-lg-3 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    @foreach ($prekes as $preke)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="{{ URL::to('/') }}\{{ $preke->nuotauka }}" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-2">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{ $preke->pavadinimas }}</h5>
                                    <!-- Product price-->
                                    {{ $preke->kaina }}
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-1 pt-0 border-top-0 bg-transparent">
                                <div class="text-center pb-3">
                                    <button type="button" class="btn btn-secondary" onclick="window.location='{{route('preke.show', $preke->id) }}'">Peržiūrėti</button>
                                    <button type="button" class="btn btn-secondary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                        </svg>
                                    </button>
                                    @auth
                                    <div class="pt-2">
                                        <button type="button" class="btn btn-secondary" onclick="window.location='{{route('preke.edit', $preke->id) }}'">Redaguoti</button>
                                        <form class="pt-2" action="{{ route('preke.destroy', $preke->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        <button action type="submit" class="btn btn-secondary">Pašalinti</button>   
                                        </form>
                                    </div>
                                    @endauth
                                </div>                        
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </section>
    </div>
</main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="sidebars.js"></script>

</body>
</html>