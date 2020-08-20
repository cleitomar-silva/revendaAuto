@extends('layouts.app')

@section('content')
<div class="container">
    <div class="">
        
        <h2>Lista de Chamados</h2>
        @can('create', App\Chamado::class)
            <p>Criar Chamado</p>
        @endcan

        @forelse ($chamados as $value)
            <p>{{$value->titulo}}
                
                @can('view', $value)
                
                    @can('update', $value)
                        <a href="/home/{{ $value->id }}">Editar</a>
                    @endcan

                    @can('delete', $value)
                        <a href="/home/{{ $value->id }}">Deletar</a>
                    @endcan

                @endcan
            </p>
        @empty
            <p>Nenhum Chamado</p>
        @endforelse


    </div>
</div>
@endsection
