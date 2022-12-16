<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="grid grid-cols-2">
        <div class="col-span-1 item-center w-1/3">
            <h1 class="font-mono text-xl">
                {{ $preke->pavadinimas }}
            </h1>  
            <img class="w-full aspect-auto p-2 rounded-xl" src="{{ $preke->nuotauka }}"/>
        </div>
        <div class="col-span-2">
            <h1>
                {{ $preke->aprasymas }}
            </h1>
        </div>
    </div>
</body>
</html>