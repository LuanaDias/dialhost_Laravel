<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visitante;

class LadingPageController extends Controller{
	public function inserir(Request $request){
		 $telefone = preg_replace("/\D+/", "", $request->telefone); 
		 $celular = preg_replace("/\D+/", "", $request->celular); 	

		 $page = new Visitante;
		 $page->nome = $request->nome;
		 $page->email = $request->email;
		 $page->telefone = $telefone;
		 $page->celular = $celular;
		 $page->dtnascimento = $request->dtnascimento;	
		 $page->cep = $request->cep;	 
		 $page->logradouro = $request->logradouro;
		 $page->numero = $request->numero;
		 $page->complemento = $request->complemento;
		 $page->bairro = $request->bairro;
		 $page->cidade = $request->cidade;
		 $page->uf = $request->uf;	 
		 
		 $page->save();
		 return 'Criado com sucesso';
	}
}
