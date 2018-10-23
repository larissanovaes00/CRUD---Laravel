<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Adicionar Novo Filme</title>
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
      

        <h1> Adicionar Categoria </h1>
        <form action="/categoria/adicionar" method="POST">

           @csrf
           @method('PUT')

            <label for="">Nome da Categoria</label>
            <input type="text" name="name">

            <button type="submit">Salvar</button>        
        </form>


        
    </body>
</html>