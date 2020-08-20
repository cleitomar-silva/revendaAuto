@extends('layouts.app')

@section('content')
<div class="container">
    <div class="">
        
        <h2>Lista de Chamados</h2>

        @forelse ($chamados as $value)
            <p>
                {{$value->titulo}}
                
                @can('ver-chamado', $value)
                    <a href="/home/{{ $value->id }}">Editar</a>
                @endcan
            </p>
        @empty
            <p>Nenhum Chamado</p>
        @endforelse


    </div>
</div>
@endsection
