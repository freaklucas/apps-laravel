@extends('layout.app', ["current" => "home"])

@section('body')

    <div class="jumbotron bg-dark border border-secondary">
        <div class="row">
            <div class="card-deck col-sm-12">
                <div class="card border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de Produtos</h5>
                        <p class="card=text">
                            Cadastre seus produtos e categorias.
                        </p>
                        <a href="/produtos" class="btn btn-primary">Cadastre seus produtos</a>
                    </div>  
                </div>
                <div class="card border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro de categorias</h5>
                        <p class="card=text"> 
                            Cadastre as categorias dos seus produtos.
                        </p>
                        <a href="/categorias" class="btn btn-primary">Cadastre suas categorias</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
