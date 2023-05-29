<?php

namespace App\Http\Controllers;

use App\Models\MetodoPagamento;
use App\Models\Plano;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Plano $plano)
    {
        //
        $request->validate([
            'tipo_pagamento' => 'required'
        ]);
        $tipo_pagamento = $request->query('tipo_pagamento');
        $forma_pagamento = MetodoPagamento::find($tipo_pagamento)->getAttributes();
        switch($tipo_pagamento)
        {
            case 1:
                return view('compra.pagamento_cartao', ['forma_pagamento' => $forma_pagamento, 'plano' => $plano]);
                break;
            case 2:
                $codigo_boleto = '34191.75124 34567.871230 41234.560005 3 93650000026035';
                $usuario = User::find(Auth::user()->id);
                $usuario->plano_id = $plano->id;
                $usuario->save();
                return view('compra.pagamento_boleto', ['forma_pagamento' => $forma_pagamento, 'plano' => $plano, 'codigo_boleto' => $codigo_boleto]);
                break;
            case 3:
                $codigo_pix = 'pycdZ1c=A[2';
                $usuario = User::find(Auth::user()->id);
                $usuario->plano_id = $plano->id;
                $usuario->save();
                return view('compra.pagamento_pix', ['forma_pagamento' => $forma_pagamento, 'plano' => $plano, 'codigo_pix' => $codigo_pix]);
                break;
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
