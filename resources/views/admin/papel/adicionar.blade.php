@extends('layouts.app')

@section('content')
<div class="container">    
        
    <h2 class="text-center">Adiconar Papel</h2>
    @include('admin._caminho')

    <form action="{{ route('papeis.store') }}" method="POST">

        {{  csrf_field() }}
        @include('admin.papel._form')
        
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
      
      
</div>
@endsection