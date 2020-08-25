@extends('layouts.app')

@section('content')
<div class="container">    
        
    <h2 class="text-center">Lista de Papéis</h2>
    @include('admin._caminho')

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Descrição</th>
            <th scope="col">Ação</th>
          </tr>
        </thead>
        <tbody>

            @forelse ($registros as $registro)
            <tr>
                <th>{{ $registro->id }}</th>
                <td>{{ $registro->nome }}</td>
                <td>{{ $registro->descricao }}</td>
                <td>
                    <form action="{{ route('papeis.destroy', $registro->id) }}" method="post">
                        <a title="Editar" href="{{ route('papeis.edit', $registro->id)}}" class="btn btn-warning">
                            <i class="fa fa-pencil-alt"></i>
                        </a>
                        <a title="Permissões" href="{{ url('/admin/usuarios/papel/'.$registro->id)}}" class="btn btn-primary">
                            <i class="fa fa-lock"></i>
                        </a>    
                        

                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button title="Deletar"class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                   
                </td>
            </tr>    
            @empty
                <p class="text-center">Nenhum Usuário</p>
            @endforelse         
            
        </tbody>
      </table>
      <a href="{{ route('papeis.create') }}" type="submit" class="btn btn-primary mb-2">Adicionar</a>

</div>
@endsection