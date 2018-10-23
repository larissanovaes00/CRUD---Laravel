<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    use App\Categoria;

    class CategoriaController extends Controller{

        public function exibir(){
            $categorias = Categoria::all();
            return view('categorias_todas')->with('listaDeCategorias', $categorias);
        }

        public function novo(){
            return view('categorias_adicionar');
        }

        public function adicionar(Request $request){

           $request->validate([
               'name' => 'unique:genres'
           ]);

           $categoria = Categoria::create([
            'name' => $request->input('name'),
            'ranking' => 841
           ]);
           $categoria->save();  

           return redirect('/categoria/exibir');
        }

        public function editar($id){
            $categoria = Categoria::find($id);
            return view('categoria_editar')->with('categoria', $categoria);

        }

        public function receberAlteracoes(Request $request, $id){
            $request->validate([
                'name' => 'required'
            ]);

            $categoria = Categoria::find($id);
            $categoria->name = $request->input('name');
            $categoria->save();

            return redirect('/categoria/exibir');
        }

        public function excluir($id){
            $categoria = Categoria::find($id);

            return view('categoria_excluir')->with('categoria', $categoria);

        }
       
        public function excluirCategoria($id){
            $categoria = Categoria::find($id);
            $categoria->delete();
            return redirect('/categoria/exibir');

        }



    }