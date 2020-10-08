@extends('layout.app', ["current" => "home"])

@section('body')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h3 class="display-4">Seja bem vindo</h3>
      <p class="lead">Essa é uma aplicação de estudos, então talvez o desenvolvimento não esteja da melhor maneira possível, mas estou trabalhando para que isso seja possível.</p>
    </div>
  </div>    
    <div class="jumbotron bg-dark border border-secondary">
        <div class="row">
            <div class="card-deck col-sm-12">
                <div class="card border-info">
                    <div class="card-body btn-dark">
                        <h5 class="card-title">Cadastro de Produtos</h5>
                        <p class="card=text">
                            Cadastre seus produtos e categorias.
                        </p>
                        <a href="/produtos" class="btn btn-info">Cadastre seus produtos</a>
                    </div>  
                </div>
                <div class="card border-info">
                    <div class="card-body btn-dark">
                        <h5 class="card-title">Cadastro de categorias</h5>
                        <p class="card=text"> 
                            Cadastre as categorias dos seus produtos.
                        </p>
                        <a href="/categorias" class="btn btn-info">Cadastre suas categorias</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
