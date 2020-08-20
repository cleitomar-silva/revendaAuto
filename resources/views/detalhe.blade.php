@extends('layouts.app')

@section('content')
<div class="container">
    <div class="">
        @can('view', $chamado)
            <h2>Detalhe do chamado</h2>
        
            Titulo: {{$chamado->titulo}}         
        @else
            <h3>Você não tem permissão para acessar este registro!</h3>
        @endcan

    </div>
</div>
@endsection
