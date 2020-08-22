
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        @if(isset($caminhos))
            @foreach ($caminhos as $caminho)
                @if ($caminho['url'])
                    <li class="breadcrumb-item"><a href="{{ $caminho['url'] }}">{{ $caminho['titulo'] }}</a></li>
                @else
                    <li class="breadcrumb-item active">{{ $caminho['titulo'] }}</li>
                @endif
            @endforeach
        @else
            <li class="breadcrumb-item active">Admin</li>
        @endif
    </ol>
</nav>