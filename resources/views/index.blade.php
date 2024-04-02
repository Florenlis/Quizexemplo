 @extends('layout')
 @section('content')
 <div class =" jumbotron">
    <p class =" h3 text-center py-4 ">SEJA BEM-VINDO A O QUIZ DE JOJO BIZZARE ADVENTURE </p >
 </div >
 <div class =" row">
    <div class =" col-md-6 col-sm-6 text-center imagem ">
        <a href ="# " class ="img-thumbnail logo ">
        <img class =" img-fluid" src="{{asset('storage/imagem/logo.jpg')}}"/>
        </a >
    </div >
    <div class = "col-md-6 col-sm-6 text-center py-4">
        <p class =" texto ">
            <h4 >Aqui  você irá testar seus conhecimentos <br >
                <strong> VAMOS LÀ ! </strong> </h4>
        </p >
        <div class =" card-footer py-4 text-center" >

            <a href ="/iniciar" class =" btn btn-primary" role =" button ">
                Começar </a >

        </div>
    </div>
 </div>
