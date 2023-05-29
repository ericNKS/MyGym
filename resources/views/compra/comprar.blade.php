@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mb-1">
            <div class="card">
                <div class="card-header">
                    <h2>Plano {{ $plano->plano }}</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('pagamento.index', ['plano'=> $plano])}}" method="get">
                        <h5>Forma de Pagamento</h5>
                        <br>
                        <select class="form-select" name="tipo_pagamento" id="metodoPagamento">
                            <option value="">...</option>
                            @foreach ($metodosPagamento as $metodoPagamento)
                                <option value="{{$metodoPagamento->id}}">
                                    {{$metodoPagamento->tipo_pagamento}}
                                </option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-outline-primary mt-2">
                            Proximo
                        </button>
                    </form>
                </div>
            </div>
    
    </div>
</div>
@endsection
