<aside>
    <div class="sidebar d-flex flex-column" id="sidebar">

        <button type="button"
            class="btn d-block d-lg-none btn-light bg-white close-sidebar fs-5 shadow p-0 d-flex align-items-center justify-content-center"
            title="Fechar" onclick="toggleMenuMobile()">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none"
                stroke="#133D3C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>


        <ul class="list-unstyled">
            <li class="">
                <a href="{{ route('home') }}"
                    class="sidebar-link d-flex align-items-center  gap-4 @if (Route::is('home')) active @endif  sidebar-link-inicio">
                    <i data-feather="home"></i>
                    <div>
                        Início
                    </div>
                </a>
            </li>
            @can('farmacia')
                <li class="">
                    <a href="{{ route('painel.farmacia.agenda.index') }}"
                        class="sidebar-link d-flex align-items-center @if (Route::is('painel.farmacia.agenda.*')) active @endif  gap-4 ">
                        <i data-feather="calendar"></i>
                        <div>
                            Agenda
                        </div>
                    </a>
                </li>
            @endcan
            @can('admin')
                <li class="">
                    <a href="{{ route('painel.admin.clientes.index') }}"
                        class="sidebar-link d-flex align-items-center @if (Route::is('painel.admin.clientes.*')) active @endif  gap-4 ">
                        <i data-feather="users"></i>
                        <div>
                            Clientes
                        </div>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('painel.admin.compras.index') }}"
                        class="sidebar-link d-flex align-items-center @if (Route::is('painel.admin.compras.*')) active @endif  gap-4 ">
                        <i data-feather="list"></i>
                        <div>
                            Pedidos de compras
                        </div>
                    </a>
                </li>
            @endcan
            @can('farmacia')
                <li class="">
                    <a href="{{ route('painel.farmacia.clientes.index') }}"
                        class="sidebar-link d-flex align-items-center @if (Route::is('painel.farmacia.clientes.*')) active @endif  gap-4 ">
                        <i data-feather="users"></i>
                        <div>
                            Clientes
                        </div>
                    </a>
                </li>
            @endcan
            @can('admin')
                <li class="">
                    <a href="{{ route('painel.admin.exames.index') }}"
                        class="sidebar-link d-flex align-items-center @if (Route::is('painel.admin.exames.*')) active @endif gap-4 ">
                        <i data-feather="file-text"></i>
                        <div>
                            Exames
                        </div>
                    </a>
                </li>
            @endcan
            @can('farmacia')
                <li class="">
                    <a href="{{ route('painel.farmacia.exames.index') }}"
                        class="sidebar-link d-flex align-items-center @if (Route::is('painel.farmacia.exames.*')) active @endif gap-4 ">
                        <i data-feather="file-text"></i>
                        <div>
                            Exames
                        </div>
                    </a>
                </li>
            @endcan

            @can('admin')
                <li class="">
                    <a href="{{ route('painel.admin.graficos.index') }}"
                        class="sidebar-link d-flex align-items-center @if (Route::is('painel.admin.graficos.*')) active @endif  gap-4 ">
                        <i data-feather="bar-chart-2"></i>
                        <div>
                            Gráficos
                        </div>
                    </a>
                </li>
            @endcan
            @can('farmacia')
                <li class="">
                    <a href="{{ route('painel.farmacia.graficos.index') }}"
                        class="sidebar-link d-flex align-items-center @if (Route::is('painel.farmacia.graficos.*')) active @endif  gap-4 ">
                        <i data-feather="bar-chart-2"></i>
                        <div>
                            Gráficos
                        </div>
                    </a>
                </li>
            @endcan


        </ul>

        <ul class="list-unstyled mt-auto mb-0">
            <li class="">
                <a href="{{ route('painel.config.index') }}"
                    class="sidebar-link d-flex align-items-center @if (Route::is('painel.config.*')) active @endif  gap-4 ">
                    <i data-feather="settings"></i>
                    <div>
                        Ajustes
                    </div>
                </a>
            </li>
            <li class="">
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();"
                    class="sidebar-link d-flex align-items-center  gap-4 sidebar-link-sair ">
                    <i data-feather="log-out"></i>
                    <div>
                        Sair
                    </div>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>

        </ul>
    </div>
</aside>
