@extends('layouts.app')

@section('content')
<div class="container">
    <div class="">
        
        <h2>Detalhe do chamado</h2>

    <p> 
        Titulo: {{$chamado->titulo}}         
    </p>


    </div>
</div>
@endsection
