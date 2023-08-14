<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ route('home') }}">
            <span class="align-middle">SISVIGILÂNCIA</span>
        </a>

        <ul style="padding-bottom:75px;" class="sidebar-nav">

            <li class="sidebar-item active">
                <a class="sidebar-link" href="{{ route('home') }}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Painel</span>
                </a>
            </li>
            @foreach (auth()->user()->role->modules as $modulo)

            <li class="sidebar-header">
                {{$modulo->name}}
            </li>

            @foreach ($modulo->permissoes->where('is_menu',1) as $permissao)
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route($permissao->resource)}}">
                    <i class="align-middle" data-feather="chevron-right"></i> <span class="align-middle">{{$permissao->descricao}}</span>
                </a>
            </li>
            @endforeach
            @endforeach

        </ul>


    </div>
</nav>