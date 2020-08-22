@extends('layouts.app')

@section('content')
<div class="container">    
        
    <h2 class="text-center">Lista de Usuários</h2>
    @include('admin._caminho')

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Ação</th>
          </tr>
        </thead>
        <tbody>

            @forelse ($usuarios as $usuario)
            <tr>
                <th>{{ $usuario->id }}</th>
                <td>{{ $usuario->name }}</td>
                <td>{{ $usuario->email }}</td>
                <td>
                    <a href="" class="btn btn-primary">
                        <i class="fa fa-lock"></i>
                    </a>
                </td>
            </tr>    
            @empty
                <p class="text-center">Nenhum Usuário</p>
            @endforelse         
         
        </tbody>
      </table>

</div>
@endsection