<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Editar Categoria</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <script src="main.js"></script>
    </head>
    <body>

        @if ($errors->count())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li> {{ $error}} </li>
                    @endforeach
                </ul>
            </div>    
        @endif
      

        <h1> Editar Categoria </h1>
        <form action="/categoria/editar/{{ $categoria->id }}" method="POST">

            @csrf

            @method('PUT')

            <label for="">Nome da Categoria</label>
            <input type="text" name="name" value=" {{ $categoria->name }}">

            <button type="submit">alterar</button>        
        </form>


        
    </body>
</html>