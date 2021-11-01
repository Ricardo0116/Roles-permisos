
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{url('css/app.css')}}">
    

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>
<body class="bg-dark">

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>
                <div class="login-form">
                    <form action="{{route('products.update', $products->id)}}" method="post">
                    @csrf
                    @method('PUT')
                        <div class="form-group">
                            <label>NOMBRE DE PRODUCTO</label>
                            <input type="" class="form-control" name="name" value="{{$products->name}}">
                        </div>
                        <div class="form-group">
                            <label>PRECIO</label>
                            <input type="" class="form-control" name="precio" value="{{$products->precio}}">
                        </div>
                        <div class="form-group">
                            <label>CATEGORIA</label>
                            <input type="" class="form-control" name="categoria" value="{{$products->categoria}}">
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">ACTUALIZAR PRODUCTO</button>

                        <a href="{{url('products')}}" class="btn btn-danger mt-2 btn-flat m-b-30 m-t-30">CANCELAR</a>
                        
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

        <script src="{{url('js/app.js')}}"></script>

</body>
</html>
