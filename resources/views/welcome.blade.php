<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel OpenAI Data Extractor</title>
    </head>
    <body class="antialiased">

        <form action="{{route("extractJobOffer")}}" method="POST">
            @csrf
            <label for="jobOffer">Texteingabe:</label>
            <textarea name="jobOffer" id="jobOffer"></textarea>
            <button type="submit">Absenden</button>
        </form>

    </body>
</html>
