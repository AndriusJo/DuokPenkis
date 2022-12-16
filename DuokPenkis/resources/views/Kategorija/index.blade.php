<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>


    @forelse ($prekes as $preke )
        {{-- {{ $loop->iteration }} --}}
        {{ $loop->remaining }}
        <h1>
            {{ $preke->pavadinimas }}
        </h1>
    @empty
        <p> Ner prekiu </p>
    @endforelse


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