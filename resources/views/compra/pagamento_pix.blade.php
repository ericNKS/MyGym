@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mb-1">
            <div class="card">
                <div class="card-header">
                    Forma de pagamento: {{$forma_pagamento['tipo_pagamento']}}
                </div>
                <div class="card-body">
                    
                    <img src="https://chart.googleapis.com/chart?chs=150x150&cht=qr&chl=https://www.codigofonte.com.br" alt="qr-code">
                    
                    <div class="input-group mb-3">
                        <input id="pixInput" type="text" class="form-control" disabled value="{{$codigo_pix}}">
                        <div class="input-group-prepend">
                            <button onclick="copiarTexto()" class="btn btn-outline-primary input-group-text">Copiar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function copiarTexto() {
        var input = document.getElementById("pixInput");
        input.select();
        input.setSelectionRange(0, 99999);

        navigator.clipboard.writeText(input.value)
            .then(function() {
                console.log("Texto copiado: " + input.value);
            })
            .catch(function(error) {
                console.error("Erro ao copiar texto: ", error);
            });
    }
    setTimeout(function() {
            window.location.href = "{{ route('home') }}";
        }, 5000);
        
    setTimeout(() => {
        alert('Você sera redirecionado após 5 para o início pois isso é uma aplicação teste')
    }, 1000);
</script>

@endsection
