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
                <p>
                    <label for="longText">Texteingabe:</label>
                </p>
                <p>
                    <textarea rows="20" cols="70" name="longText" id="longText" required>{{ $longText }}</textarea>
                </p>
                <p>
                    <button type="submit">Absenden</button>
                </p>
            </form>
            <p style="max-width: 600px">
                {{ $summary }}
            </p>
        </div>
    </body>
</html>
