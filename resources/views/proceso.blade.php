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
        <h1>Proceso de dato desde un Form</h1>
        <div class="alert bg-light shadow-sm p-4">
            La frase enviada es: <br>
            <span class="lead">
                {{ $prueba }}
            </span> <br> <br>
            <a href="/formulario" class="btn btn-outline-secondary">Volver a inicio</a>
        </div>
    </main>
</body>
</html>
