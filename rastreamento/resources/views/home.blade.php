<!DOCTYPE html>
<html lang= pt-br>
    <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .navbar {
             max-height: 100px;
             background-color: #f1f1f1;
        }
    </style>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
       
    <nav class="d-flex justify-content-between align-itens-center navbar px-2 mb-5">
        <div>Rastreamento</div>
        <div>Login</div>
    </nav>
       

    <div class="d-flex alignt-items-center justify-content-center mb-5">
        <img src="https://via.placeholder.com/950x350" />
    </div>
    
    <div class= "container">
        <div class="row">
            @foreach($produtos as $produto)
                <div class="col-4">
                    <div class="card w-100">
                    <img src="https://via.placeholder.com/400" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{ $produto-> nome }}</h5>
                    <p class="card-text">{{$produto->descricao}}</p>
                    <a href="#" class="btn btn-primary">Comprar</a>
        </div>
    </div>
    
</div>
        </div>
        @endforeach
    </div>
       <!-- JavaScript Bundle with Popper -->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>