@extends('layouts.app')

@section('content')
<div class="container">    
        
    <h2 class="text-center">Lista de Papéis para {{ $usuario->name }}</h2>
    @include('admin._caminho')

    <form action="{{ url('/admin/usuarios/papel/'.$usuario->id)}}" method="POST">
        {{  csrf_field() }}
        <div class="form-group">
            <select class="form-control" name="papel_id">
            
                @forelse($papel as $valor)
                    <option value="{{ $valor->id }}">{{ $valor->nome }}</option>
            
                @empty
                    <option>Nenhum Papel</option>
                @endforelse   
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary mb-2">Adicionar</button>
    </form>


    <table class="table mt-5">
        <thead>
          <tr>
            <th scope="col">Papel</th>
            <th scope="col">Descrição</th>          
            <th scope="col">Ação</th>
          </tr>
        </thead>
        <tbody>
            
            @forelse ($usuario->papeis as $papel)
                <tr>
                    <td>{{ $papel->nome }}</td>
                    <td>{{ $papel->descricao }}</td>
                    
                    <td>
                        <form action="{{ url('/admin/usuarios/papel/'.$usuario->id.'/'.$papel->id) }}" method="POST">
                            {{ method_field('DELETE') }}
                            {{  csrf_field() }}                       
                            
                            <button title="Deletar" class="btn btn-danger mb-2"><i class="fa fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>    
            @empty
                <tr>
                    <td colspan="3" class="text-center">Nenhum Papel</td>
                </tr>
                
            @endforelse         
         
        </tbody>
      </table>

    
    




    

    
      
      
</div>
@endsection