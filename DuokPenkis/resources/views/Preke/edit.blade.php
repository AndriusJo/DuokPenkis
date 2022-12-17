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
            action="{{ route('preke.update', $preke->id) }}" 
            method="POST" 
            enctype="multipart/form-data">
            @csrf
            @method('PATCH')
                <fieldset>
                <legend>Prekės "{{ $preke->pavadinimas }}" redagavimas</legend>
                <div class="form-group">
                    <label class="col-form-label mt-4" for="inputDefault">Prekes pavadinimas</label>
                    <input name="pavadinimas" type="text" class="form-control" value="{{ $preke->pavadinimas }}" >
                </div>

                <div class="form-group">
                    <label class="col-form-label mt-4" for="inputDefault">Kaina</label>
                    <input name="kaina"type="double" class="form-control" value="{{ $preke->kaina }}" >
                </div>

                <div class="form-group">
                    <label for="exampleTextarea" class="form-label mt-4">Aprašymas</label>
                    <textarea name="aprasymas" class="form-control" placeholder="Body..." id="exampleTextarea" rows="3">{{ $preke->aprasymas }}</textarea>
                </div>

                <div class="form-group">
                    <label class="col-form-label mt-4" for="inputDefault">Kiekis</label>
                    <input name="kiekis" type="integer" class="form-control" value="{{ $preke->kiekis }}">
                  </div>

                  <div class="form-group">
                    <label class="col-form-label mt-4" for="inputDefault">Dydis</label>
                    <input name="dydis" type="double" class="form-control" value="{{ $preke->dydis }}">
                  </div>

                  <div class="form-group">
                    <label class="col-form-label mt-4" for="inputDefault">Prekinis Ženklas</label>
                    <input name="prekiniszenklas" type="text" class="form-control" value="{{ $preke->prekiniszenklas }}" id="inputDefault">
                  </div>
                <div class="form-group">
                    <label for="exampleSelect1" class="form-label mt-4">Lytis</label>
                    <select name="lytis" class="form-select" id="exampleSelect1">
                    <option value="option_select" disabled selected>{{ $preke->lytis }}</option>
                    <option>moteris</option>
                    <option>vyras</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleSelect1" class="form-label mt-4">Spalva</label>
                    <select name="spalva" class="form-select" id="exampleSelect1">
                    <option value="option_select" disabled selected>{{ $preke->spalva }}</option>
                    <option>balta</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleSelect1" class="form-label mt-4">Medžiagos tipas</label>
                    <select name="medziagos_tipas" class="form-select" id="exampleSelect1">
                    <option value="option_select" disabled selected>{{ $preke->medziagos_tipas }}</option>
                    <option>medvilne</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleSelect1" class="form-label mt-4">Bukle</label>
                    <select name="bukle" class="form-select" id="exampleSelect1">
                    <option value="option_select" disabled selected>{{ $preke->bukle }}</option>
                    <option>patenkinama</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    </select>
                </div>
                <div class="form-group pb-4">
                    <label for="formFile" class="form-label mt-4">Ikelkite norima nuotrauką</label>
                    <input name="nuotauka" class="form-control" type="file" id="formFile">
                </div>
                </fieldset>
                <button type="submit" class="btn btn-primary">Submit</button>
                </fieldset>
            </form>
        </div>
    </section>
</body>
</html>