@extends('layouts.app')

@section('content')
<div class="container">    
        
    <h2 class="text-center">Adiconar Papel</h2>
    @include('admin._caminho')

    <form action="{{ route('papeis.update', $registro->id) }}" method="POST">

        {{  csrf_field() }}
        {{ method_field('PUT') }}
        @include('admin.papel._form')
        
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
      
      
</div>
@endsection