<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;



class UserController extends Controller{

   /* Função para indicar que o registo foi efetuado com sucesso */
   public function sucessoUser(){
    return view('users.sucesso_users');
   }


   /* Função para login */
    public function loginUser(){     
    return view('users.login_users');

   }


   /* Função para registo */
   public function registo(){
    return view('users.registo_users');
   }


   /* Função para a página inicial */
   public function indexPage(){
    return view('users.index_page');
   }


   /* Função para a página banda */
   public function bandasController(){


      return view('users.bandas_page');
   }


   /* Função para a página álbuns */
   public function albunsController(){

     $allAlbuns = ['nome' => 'The Wall'];

     $search = request()->query('search') ? request()->query('search') : null;

     if (request()->query('nome_album')) {
         $allAlbuns = DB::table('album')
             ->where('nome_album', request()->query('nome_album'))
             ->get();
     } else {
         $allAlbuns = DB::table('album')
             ->get();
     }


     if ($search) {
         $allAlbuns = DB::table('album')
             ->where('nome_album', 'LIKE', "%{$search}%")
             ->get();
     }


      return view('users.albuns_page', compact('allAlbuns'));
   }


   /* Função para pedir página criar álbum - MÉTODO GET */
   public function criarAlbumPage(){

      return view('users.criar_album');
   }

   /* Função para submeter os dados na página criar álbum - MÉTODO POST */
   public function createAlbumController(Request $request){

      $request->validate(
         [
          'id' => 'required',
          'nome_album' => 'required|string',
          'imagem_algum' =>  'string',
          'data_lancamento' => 'date'
          ]
      );

      User::insert([
         'id' => $request->id,
         '$nome_album' => $request->$nome_album,
         'imagem_algum' => $request->$imagem_algum,
         'data_lancamento' => $request->data_lancamento
     ]);

     return redirect('users.albuns_page')->with('message', 'Álbum criado com sucesso');;

   }

   public function atualizarAlbumPage(){

      return view('users.atualizar_album');
   }

   public function eliminarAlbumPage(){

      return view('users.eliminar_album');
   }

}
