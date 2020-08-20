@extends('layouts.app')

@section('content')
<div class="container">
    <div class="">
        
        <h2>Lista de Chamados</h2>

        @forelse ($chamados as $value)
            <p>
                {{$value->titulo}}
                <a href="/home/{{ $value->id }}">Editar</a>
            </p>
        @empty
            <p>Nenhum Chamado</p>
        @endforelse


    </div>
</div>
@endsection
