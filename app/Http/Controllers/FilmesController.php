<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Http\Filme;
use DB;
Use Actors;


    class FilmesController extends Controller{

        public function mostrarTodoOsFilmes(){
            $movies =  \App\Filme::all()->paginate(5);  //referenciando o model e dizendo que quer pegar tudo do banco de dados//
            return view('filmes')->with('listaDeFilmes', $movies); //listaDeFilmes é o apelido da variável $movies (tem que colocar)//              
        }

        public function getNomeCompleto(){
            $atores = \App\Actors::all();
            return view('atores')->with('listaDeAtores', $atores);
        }
        
        public function getById($id){
            $dadosAtor = \App\Actors::find($id);
            return view('ator')->with('buscaPorId', $dadosAtor);
        }

        public function criar(Request $req){
          $firstname = $req->input('name');
          $lastname = $req->input('lastname');
          $rating = $req->input('rating');

          $data = array('first_name' => $firstname, 'last_name' => $lastname, 'rating' => $rating);

          DB::table('actors')->insert($data);

          return redirect('/actors');

        }

        public function excluir($id){
            $actor = \App\Actors::find($id);
            $actor->delete();
            return view('atores')->with('listaDeAtores', $atores);
        }
        

       
    }



    // return view('filmes')->with('listaDeFilmes', $movies);
    // $movies = Filme::all();
    //$filmes = Filme::orderBy('title')->get();
    // $movies = \App\Filme::get();

    // public function procurarFilmeId($id){
    // $filme = Filme::find($id);

    // return view ('filme')->with('resultado', $filme->title);

    // public function procurarFilmeNome($nome){
    //     $filmes = [
    //         1 => "Toy Story",
    //         2 => "Procurando Nemo",
    //         3 => "Avatar",
    //         4 => "Star Wars",
    //         5 => "Up",
    //         6 => "Mary e Max"
    //     ];
    // }

    // public function mostrarTodoOsFilmes(){
    //     //$filmes = Filme::all();
    //     //$filmes = Filme::orderBy('title')->get();
    //     $filmes = Filme::where('title', '=', 'Avatar')->get();

    //     return view('filmes')->with('listaDeFilmes', $filmes);
    // }

    // $resultado = 'nenhum resultado encontrado.';

        // foreach ($filmes as $key => $value){
        //     if ($nome === $value){
        //         $resultado = $key . ' ' . $value;
        //         break;
        //     }
        // }

        //return $resultado[$id];
    // }
?>