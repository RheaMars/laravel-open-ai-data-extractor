<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel OpenAI Example</title>
    </head>
    <body>
        <div>
            <h4>Gib hier einen Text ein, für den du eine Zusammenfassung haben willst:</h4>
            <form action="{{route("requestSummary")}}" method="POST">
                @csrf
                <label for="longText">Texteingabe:</label>
                <textarea name="longText" id="longText"></textarea>
                <button type="submit">Absenden</button>
            </form>
            <div>
                {{ $summary }}
            </div>
        </div>
    </body>
</html>
