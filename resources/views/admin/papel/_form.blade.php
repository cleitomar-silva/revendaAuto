<div class="form-group">
    <input type="text" class="form-control" name="nome" value="{{ isset($registro->nome) ? $registro->nome : '' }}" placeholder="Nome">
</div>

<div class="form-group">
    <input type="text" class="form-control" name="descricao" value="{{ isset($registro->descricao) ? $registro->descricao : '' }}" placeholder="Descrição">
</div> 