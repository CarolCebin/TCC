<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.min.css') }}">

    <link href={{ asset('css/global.css') }} rel="stylesheet" />

    @foreach ($css ?? [] as $file)
    <link href={{ asset($file) }} rel="stylesheet" />
    @endforeach

    <script src="{{ mix('js/app.min.js') }}"></script>

    @foreach ($js ?? [] as $file)
    <script src={{ asset($file) }}></script>
    @endforeach

    <title>{{ $title ?? "Mapa da Desigualdade" }}</title>
</head>