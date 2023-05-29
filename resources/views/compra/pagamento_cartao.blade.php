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
                    
                    <form method="POST" action="{{ route('compra.store', ['plano' => $plano]) }}">
                        @csrf
                        
                        <div class="row mb-3">
                            <label for="nome" class="col-md-4 col-form-label text-md-end">{{ __('Nome no Cartão') }}</label>
                            
                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" required autocomplete="current-password">
                                
                                @error('nome')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="numero_cartao" class="col-md-4 col-form-label text-md-end">{{ __('Número do Cartão') }}</label>

                            <div class="col-md-6">
                                <input id="numero_cartao" type="text" class="form-control @error('numero_cartao') is-invalid @enderror" name="numero_cartao" value="{{ old('numero_cartao') }}" required autocomplete="numero_cartao" autofocus>

                                @error('numero_cartao')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="validade" class="col-md-4 col-form-label text-md-end">{{ __('Validade') }}</label>

                            <div class="col-md-2">
                                <input id="validade" type="text" class="form-control @error('validade') is-invalid @enderror" name="validade" value="{{ old('validade') }}" required autocomplete="validade" autofocus>

                                @error('validade')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 ">
                            <label for="cvv" class="col-md-4 col-form-label text-md-end">{{ __('CVV') }}</label>

                            <div class="col-md-2">
                                <input id="cvv" type="number" max="999" min="0" class="form-control @error('cvv') is-invalid @enderror" name="cvv" value="{{ old('cvv') }}" required autocomplete="cvv" autofocus>

                                @error('cvv')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="cpf" class="col-md-4 col-form-label text-md-end">{{ __('CPF') }}</label>

                            <div class="col-md-6">
                                <input id="cpf" type="text" class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}" required autocomplete="cpf" autofocus>

                                @error('cpf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                            </div>
                        </div>
                    </form>

                </div>
            </div>
    
    </div>
</div>
@endsection
