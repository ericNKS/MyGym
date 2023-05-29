@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">

            <div class="col-md-6 mb-1">
                <div class="card">
                    <div class="card-header">Perfil</div>

                    <div class="card-body">
                        <p>Nome: {{$usuario->name}}</p>
                        <p>Email: {{$usuario->email}}</p>
                        <p>CPF: {{$usuario->cpf}}</p>
                        @if (isset($usuario->plano))
                            <p>Plano: {{$usuario->plano->plano}} - Valor do plano: R$ {{$usuario->plano->valor}}</p>
                            <form action="{{route('compra.destroy')}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-outline-danger" type="submit">Cancelar plano</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        
    </div>
</div>
@endsection
