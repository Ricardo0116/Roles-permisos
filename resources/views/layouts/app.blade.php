
<!DOCTYPE html>
<html lang="es">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>        
    <div class="d-grid gap-2 col-6 mx-auto mt-3">
       <a href="{{url('products')}}" class="btn btn-success">ir a productos</a>
       <form class="d-grid gap-2 col-6 mx-auto" action="{{route('logout')}}" method="post">
        @csrf
            <button type="submit" class="btn btn-danger">Salir</button>
        </form>
</div>         
<footer></footer>
</body>
</html>