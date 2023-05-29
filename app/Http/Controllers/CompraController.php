<?php

namespace App\Http\Controllers;

use App\Models\Cartao;
use App\Models\MetodoPagamento;
use App\Models\Plano;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompraController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

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
        $metodosPagamento = MetodoPagamento::all();
        return view('compra.comprar', ['plano' => $plano, 'metodosPagamento' => $metodosPagamento]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Plano $plano)
    {
        // Pegar o plano que o cliente deseja comprar
        $plano = $plano->id;
        // verificar se os input do cartao eh valido
        $request->validate([
            'nome' => ['required', 'string'],
            'numero_cartao' => ['required'],
            'validade' => ['required', 'date_format:m/y'],
            'cvv' => ['required', 'numeric', 'max:999'],
            'cpf' => ['required']
        ]);
        //Cartao::create($request->all());
        $usuario = User::find(Auth::user()->id);

        $usuario->plano_id = $plano;
        $usuario->save();
        return redirect()->route('home');
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
    public function destroy()
    {
        // tirando o plano do usuario
        $usuario = User::find(Auth::user()->id);

        $usuario->plano_id = null;
        $usuario->save();
        return redirect()->route('perfil.index');
    }
}
