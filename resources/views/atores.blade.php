<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Lista de Atores</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
       
    </head>
    <body>

        <div class="container">

            <h1 class="titleActor"> Lista de Atores </h1> 
            
            <a href="/atores/add"><button type="button" class="btn btn-success">adicionar novo ator</button></a>      
            <br>
            
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Sobrenome</th>
                        <th scope="col">Nota</th>
                        <th scope="col">Atualizar</th>
                        <th scope="col">Excluir</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($listaDeAtores as $nomeAtores)
                        <tr> 
                            <td>{{ $nomeAtores->id }}</td>
                            <td> {{ $nomeAtores->first_name }} </td>
                            <td> {{ $nomeAtores->last_name }} </td>
                            <td> {{ $nomeAtores->rating }} </td>
                            <td><a href="/atores/atualizar/{{$nomeAtores->id}}"> <button type="button" class="btn btn-warning">Atualizar</button></a> </td>
                            <td><a href="/atores/excluir/{{ $nomeAtores->id }}"> <button type="button" class="btn btn-danger">Excluir</button></a> </td>
                        </tr>
                    @endforeach 
                </tbody> 
            </table>

            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="/atores/exibir" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">anterior</span>
                        </a>
                    </li>

                    <li class="page-item"><a class="page-link" href="/atores/exibir">1</a></li>
                    <li class="page-item"><a class="page-link" href="/atores/exibir">2</a></li>
                    <li class="page-item"><a class="page-link" href="/atores/exibir">3</a></li>
                    
                    <li class="page-item">
                        <a class="page-link" href="/atores/exibir" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">próximo</span>
                        </a>
                    </li>
                </ul>
            </nav>         
        
        </div>        

    </body>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>