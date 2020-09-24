@extends('layout.app', ["current" => "categorias"])

@section('body')
    
    <div class="card border">
        <div class="card-body">
            <form action="/categorias" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeCategoria"><h4>Nome da categoria</h4></label>
                    <input type="text" class="form-control" name="nomeCategoria" id="nomeCategoria" placeholder="Categoria">        
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="submit" class="btn btn-danger btn-sm">Cancelar</button>  
            </form>
        </div>
    </div>
@endsection