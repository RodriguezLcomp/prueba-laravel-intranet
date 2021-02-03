<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba Intranet</title>
</head>
<body>
    <main>
        <form action="/enviado" method="GET">
            @csrf
                Escriba la frase
                <input type="text" name='frase'>
                <button>Escribi la frase</button>
        </form>
    </main>
</body>
</html>
