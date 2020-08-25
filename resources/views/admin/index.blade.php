@extends('layouts.app')

@section('content')
<div class="container">    
        
    <h2 class="text-center">Admin</h2>
    @include('admin._caminho')
    
    <div class="row">
        <div class="col-sm-1 col-md-1 col-lg-6 col-lx-6">
            <div class="card text-white mb-3" style="background: #9561e2;">
                <div class="card-body">
                    <h5 class="card-title">Usuários</h5>
                    <p class="card-text">Usuários do sistema</p>
                </div>
                <div class="card-header">
                    <a href="{{ route('usuarios.index') }}" class="link">Visualizar</a>  
                </div>                
            </div>
        </div>
        <div class="col-sm-1 col-md-1 col-lg-6 col-lx-6">
            <div class="card text-white bg-info mb-3">
                <div class="card-body">
                    <h5 class="card-title">Favoritos</h5>
                    <p class="card-text">Lista de favoritos</p>
                </div>
                <div class="card-header">
                    <a href="" class="link">Visualizar</a>  
                </div> 
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-1 col-md-1 col-lg-6 col-lx-6">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Perfil</h5>
                    <p class="card-text">Alterar dados do perfil</p>
                </div>
                <div class="card-header">
                    <a href="" class="link">Visualizar</a>  
                </div> 
            </div>
        </div>
        <div class="col-sm-1 col-md-1 col-lg-6 col-lx-6">
            <div class="card text-white mb-3" style="background:#f6993f;">
                <div class="card-body">
                    <h5 class="card-title">Papéis</h5>
                    <p class="card-text">Listar papéis do sistema</p>
                </div>
                <div class="card-header">
                    <a href="{{ route('papeis.index') }}" class="link">Visualizar</a>  
                </div> 
            </div>
        </div>
    </div>       
    
</div>
@endsection
