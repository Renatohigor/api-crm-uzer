<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Cliente;

class ClienteController extends Controller
{
    //Metodo que lista todos os dados da tabela.
    public function index()
    {
        return Cliente::all();
    }

    //Metodo chamado pelo endpoint POST incluindo os dados informados.
    public function store(Request $request)
    {
        Cliente::create($request->all());
    }

    //Metodo que lista as informações de um cliente em expecifico.
    public function show($id)
    {
        return Cliente::findOrFail($id);
    }

    //Atualiza informação de um determinado cliente.
    public function update(Request $request, $id)
    {
        $cl = Cliente::findOrFail($id);
        $cl->udpade($request->all()); 
    }

    /*  
        Deleta as informações de um cliente expecifico.
        Fornecendo o Id.
    */
    public function destroy($id)
    {
        $cl = Cliente::findOrFail($id);
        $cl->delete(); 
    }
}
