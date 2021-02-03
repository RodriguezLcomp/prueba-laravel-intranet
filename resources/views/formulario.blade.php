<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Formulario</title>
</head>
<body>
    <main class="container">
        <h1>Formulario de envio</h1>
        <div class="alert bg-light shadow-sm p-4">
            <form action="/proceso" method="POST">
                @csrf
                Frase: <br>
                <input type="text" name="prueba" id="" class="form-control">
                <br>
                <button class="btn-dark">Enviar Frase</button>
            </form>
        </div>
    </main>
</body>
</html>
