<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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

<div class="container mt-5 text-center">
    <h3>Kategorijų langas</h3>
</div>
<div class="container mt-5 p-5">
    @if (session()->has('message'))
    <div class="alert alert-dismissible alert-success">
        <h4 class="alert-heading">{{ session()->get('message') }}</h4>
    </div>
        
    @endif
    <table class="table table-hover">
        <thead>
          <tr class="table-primary">
            <th scope="col" class="text-lg"><h4 class="text-center">Pavadinimas</h4></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th class="text-end"><h4>Redagavimas</h4></th>
            <th class="text-end"><h4>Šalinimas</h4></th>
            <th>
                <div class="text-end">                    
                    <button type="button" class="btn btn-secondary" onclick="window.location='{{ route('kategorija.create') }}'">Kurti kategoriją</button>
                </div>
            </th>
          </tr>
        </thead>
        <tbody>
        @foreach ($kategorijos as $kategorija)

          <tr class="table-active">
            <th scope="row"><h5 class="text-center">{{ $kategorija->pavadinimas }}</h5></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <td>
                <div class="text-end">                    
                    <button type="button" class="btn btn-secondary" onclick="window.location='{{ route('kategorija.edit', $kategorija->pavadinimas) }}'">Redaguoti</button>
                </div>
            </td>
            <td>
                <form class="text-end" action="{{ route('kategorija.destroy', $kategorija->pavadinimas) }}" method="POST">
                    @csrf
                    @method('DELETE')
                <button action type="submit" class="btn btn-secondary">Pašalinti</button>   
                </form>
            </td>
            <th></th>
          </tr> 
          
          @endforeach
        </tbody>
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html> 
 
    {{-- 2:49  --}}
    {{-- @unless ($prekes)
        <h1>
            Prekes pridetos
        </h1>
    @endunless --}}

    {{-- 2:47  --}}
    {{-- @if (count($prekes) < 10)
        <h1>
            {{ dd($prekes) }}
        </h1>
    @elseif (count($prekes)===30)
        <h1>
            30 prekiu
        </h1>
    @else
        <h1>
            Ner prekiu
        </h1>
    @endif --}}