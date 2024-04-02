<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

 class controllerQuiz extends Controller
 {
 private $perguntas = array () ;

 public function __construct () {
 $this -> perguntas[' pergunta1 '] ='B';
 $this -> perguntas[' pergunta2 '] ='A';
 $this -> perguntas[' pergunta10 '] ='B';
 }

 public function index () {
    session (['acertos' => 0]);
    return view (' pagina1') ;
 }

 public function dadosPagina1( Request $request){

 $resposta = $request -> input (' pergunta ') ;

 session ([' resposta1' => $resposta]) ;

 if( strcmp ( $this -> perguntas[' pergunta1 '] , $resposta) == 0) {
 $acertos = session(' acertos') ;
 $acertos ++;
 session([ ' acertos' => $acertos]) ;
 session([ ' resultado1 ' => ' Acertou']) ;
 } else
 session([ ' resultado1 ' => ' Errou ']) ;

 return view (' pagina2') ;
 }
 
 
 // métodos para as demais páginas/ perguntas
 

 public function dadosPagina10( Request $request) {
    
     $resposta = $request -> input (' pergunta ') ;
    
     session ([' resposta10 ' => $resposta]) ;
    
     if( strcmp ( $this -> perguntas[' pergunta10 '] , $resposta) == 0) {
     $acertos = session(' acertos') ;
     $acertos ++;
     session([ ' acertos' => $acertos]) ;
     session([ ' resultado10 ' => ' Acertou']) ;
     } else
     session([ ' resultado10 ' => ' Errou ']) ;
    
     $dados = array () ;
    
     $dados [1][ ' gabarito'] = $this -> perguntas[' pergunta1 '];
     $dados [1][ ' resposta'] = session(' resposta1 ') ;
     $dados [1][ ' resultado '] = session(' resultado1 ') ;
     
      // incluir no array dados os resultados
      // das demais perguntas
     
     $dados [10][ ' gabarito '] = $this -> perguntas[' pergunta10 '];
     $dados [10][ ' resposta '] = session(' resposta10 ') ;
     $dados [10][ ' resultado '] = session(' resultado10 ') ;
    
     $acertos = session(' acertos') ;
    
     if( $acertos == 10)
     $dados [' mensagem '] = " Excelente !! você acertou todas !! Você é um
    super fã !!";
     else if( $acertos > 7)
     $dados [' mensagem '] = " Muito bom !! você acertou " . $acertos . "
    de 10!! Parabéns !!";
     else if( $acertos > 5)
     $dados [' mensagem '] = " Você conhece um pouco sobre a banda !! Mas
    pode melhorar. Você acertou " . $acertos . " de 10.";
     else if( $acertos == 5)
     $dados [' mensagem '] = " Você acertou 50% do teste !! Está de
    recuperação !! ";
     else
     $dados [' mensagem '] = " Precisa se inteirar mais sobre a banda !
    Você acertou " . $acertos . " de 10.";
    
     return view (' resultado', compact( 'dados ') );
     }
     }