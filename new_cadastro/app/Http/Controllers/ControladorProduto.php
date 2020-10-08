<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;


class ControladorProduto extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index() {
        // /api/produtos
        $prods = Produto::all();
        
        return json_encode($prods);

        // return $prods->toJson();
    }
    
    public function indexView() {
        // /produtos
        return view('produtos');
    }

    //public function index() {
        // index vazia para teste unitário
    //}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $produto = new Produto();

        $produto->nome = $request->input('nome');
        $produto->preco = $request->input('preco');
        $produto->estoque = $request->input('estoque');
        $produto->categoria_id = $request->input('categoria_id');
        
        $produto->save();
        
        return json_encode($produto);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}


// prod = { nome: "Caneca", preco: 25, estoque: 22, categoria_id: 4}

// $.post('/api/produtos', prod, function() {
//     console.log(data);
// })