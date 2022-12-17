<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <form 
            action="{{ route('kategorija.update', $kategorija->pavadinimas) }}" 
            method="POST" 
            enctype="multipart/form-data">
            @csrf
            @method('PATCH')
                <fieldset>
                <legend>Kategorijos kūrimas</legend>
                <div class="form-group">
                    <label class="col-form-label mt-4" for="inputDefault">Kategorijos pavadinimas</label>
                    <input name="pavadinimas" type="text" class="form-control" placeholder="{{ $kategorija->pavadinimas }}" id="inputDefault">
                </div>
                <div class="form-group">
                    <label for="exampleSelect1" class="form-label mt-4">Kategorija kuriai priklausys:</label>
                    <select name="fk_Kategorija_pavadinimas" class="form-select" id="exampleSelect1">
                    <option value="option_select" disabled selected>{{ $kategorija->fk_Kategorija_pavadinimas }}</option>   
                    @foreach ($kategorijos as $kategorija)
                        <option>{{ $kategorija->pavadinimas }}</option>
                    @endforeach

                    </select>
                </div>
            </fieldset>
            <button type="submit" class="btn btn-primary">Submit</button>
            </fieldset>
            </form>
        </div>
    </section>
</body>
</html>