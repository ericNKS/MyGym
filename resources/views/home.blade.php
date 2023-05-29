@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">

        @foreach ($planos as $plano)
            <div class="col-md-6 mb-1">
                <div class="card">
                    <div class="card-header">{{ $plano->plano }}</div>

                    <div class="card-body">
                        <p>{{$plano->descricao}}</p>
                        <hr>
                        <p>
                            R$ {{$plano->valor}}
                            <a class="btn btn-outline-dark ml-5" href="{{route('compra.create', ['plano' => $plano])}}">Comprar</a>
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
        
    </div>
</div>
@endsection
