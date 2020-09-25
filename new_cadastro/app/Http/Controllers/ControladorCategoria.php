<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categoria;

class ControladorCategoria extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $cats = Categoria::all(); 

        return view('categorias', compact('cats'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) {

        return view('novacategoria');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        
        $categoria = new Categoria();
        $categoria->nome = $request->input('nomeCategoria');
        
        $categoria->save();

        return redirect('/categorias');
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
    public function edit($id) {

        $cat = Categoria::find($id);
        
        if(isset($cat)) {
            
            return view('editarcategoria', compact('cat'));
        }
        return redirect('/categorias');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {

        $categoria = Categoria::find($id);
        if(isset($categoria)) {
            $categoria->nome = $request->input('nomeCategoria');
            $categoria->save();
        }
        return redirect('/categorias');
    }

    /** 
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {

        $categoria = Categoria::find($id);
        if(isset($categoria)) {
            $categoria->delete();
        }
        return redirect('/categorias');
    }
}
