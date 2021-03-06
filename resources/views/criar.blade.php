<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Formulário</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="main.js"></script>
    </head>
    <body>

        <div class="container">

            <h1> Formulário Novo Ator </h1>

            <form action="/inserir" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="formGroupExampleInput">Nome</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="digite o nome"   name="name">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Sobrenome</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="digite o sobrenome" name="lastname" >
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Nota</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="digite a nota" name="rating" >
                </div>
                <a href="#"><button type="submit" class="btn btn-success">Incluir</button>
            </form>
            
        </div>        

    </body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>