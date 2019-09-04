<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cliente;

class ClienteApiController extends Controller
{

    public function __construct(Cliente $cliente, Request $request) 
    {
        $this->cliente = $cliente;
        $this->request = $request;
    }
    public function index()
    {
        $data = $this -> cliente -> all();
       //dd($data);
        return response()->json($data);
     }


    public function store(Request $request)
    {
        //
        $this->validate($request, $this->cliente->rules());
        $dataform = $request->all();

        $data = $this-> cliente->create($dataform);

        return response()->json($data, 201);
    }


    public function show($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
