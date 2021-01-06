@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                   <h4>Consultar Veículos</h4>
                   <form action="" method="get">
                        <div class="form-group">
                            <label for="car_search"></label>
                            <input type="text" name="" id="" class="form-control" placeholder="Digite um texto" aria-describedby="textHelp">
                            <small id="textHelp" class="text-muted">Digite um texto para obter os dados</small>
                        </div>
                        <button class="btn btn-primary" type="submit">Capturar</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
