<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    use App\Atores;

    class AtoresController extends Controller{

        public function exibir(){
            $atores = Atores::all();
            return view('atores')->with('listaDeAtores', $atores);
        }

        public function novo(){
            return view('atores_add');
        }

        public function adicionar(Request $request){

           $request->validate([
            'first_name' => 'unique:actors',
            'last_name',
            'rating'
           ]);

           $atores = Atores::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'rating' => $request->input('rating')
           ]);
           $atores->save();  

           return redirect('/atores/exibir');
        }

        public function atualizar($id){
            $atores = Atores::find($id);
            return view('atores_editar')->with('atores', $atores);
        }

        public function confirmarAtualizacao(Request $request, $id){
            $request->validate([
                'first_name'
            ]);

            $atores = Atores::find($id);
            $atores->first_name = $request->input('first_name');
            $atores->last_name = $request->input('last_name');
            $atores->rating = $request->input('rating');
            $atores->save();

            return redirect ('/atores/exibir');
        }

        public function excluir($id){
            $atores = Atores::find($id);
            return view('atores_excluir')->with('atores', $atores);
        }

        public function confirmarExclusao($id){
            $atores = Atores::find($id);
            $atores->delete();
            return redirect('/atores/exibir');
        }

       



    }