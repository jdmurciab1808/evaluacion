<!-- sidebarMenu -->
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>{{ Auth::user()->cc }}</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle"></span>
            </a>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ $activePage=='dashboard' ? ' active' : '' }}" aria-current="page"
                    href="{{ route('dashboard') }}">
                    <span data-feather="home"></span>
                    Inicio
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $activePage=='usuarios' ? ' active' : '' }}" href="#">
                    <span data-feather="users"></span>
                    Usuarios
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $activePage=='crearEvaluacion' ? ' active' : '' }}"
                    href="{{ route('evaluacion.create') }}">
                    <span data-feather="file-text"></span>
                    Crear Evaluación
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $activePage=='listaEvaluaciones' ? ' active' : '' }}"
                    href="{{ route('evaluacion.index') }}">
                    <span data-feather="list"></span>
                    Lista de Evaluaciones
                </a>
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Saved reports</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
                <span data-feather="plus-circle"></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Current month
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Last quarter
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Social engagement
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="file-text"></span>
                    Year-end sale
                </a>
            </li>
        </ul>
    </div>
</nav>
