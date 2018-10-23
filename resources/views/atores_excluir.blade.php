<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Adicionar Novo Ator</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
     
    </head>
    <body>

        <div class="container">
            
            <h1 class="newActor">Excluir Ator</h1>

          <form action="/atores/excluir/{{ $atores->id }}" method="POST">
                
                @csrf

                @method('DELETE')

                <div class="form-row">
                    
                    <div class="col">
                        <input type="text" class="form-control" name="first_name" value=" {{ $atores->first_name }}" readonly>
                    </div>

                    <div class="col">
                        <input type="text" class="form-control" name="last_name" value=" {{ $atores->last_name }}" readonly>
                    </div>

                    <div class="col">
                        <input type="decimal" class="form-control" name="rating" value=" {{ $atores->rating }}" readonly>
                    </div>

                    <button type="submit" class="btn btn-danger" onclick="return confirm('Deseja mesmo excluir?');">excluir</button>       

                </div>
            
            </form>

        </div>
        
    </body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>