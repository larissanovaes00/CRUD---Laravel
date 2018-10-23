<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Excluir Categoria</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <script src="main.js"></script>
    </head>
    <body>

        <h1> Excluir Categoria </h1>
        <form action="/categoria/excluir/{{ $categoria->id }}" method="POST">

            @csrf

            @method('DELETE')

            <label for="">Nome da Categoria</label>
            <input type="text" name="name" value=" {{ $categoria->name }}" readonly>

            <button type="submit" onclick="return confirm('Deseja mesmo excluir?');">excluir</button>        
        </form>


        
    </body>
</html>