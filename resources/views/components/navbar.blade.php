<x-layout>

@auth



<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="/order/general-services">
        <img class="logo" src="{{ asset('images/logo.svg') }}" alt="Example Image">
    </a>
    <!-- Sidebar Toggle-->
    <button
        class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0"
        id="sidebarToggle"
        href="#!"
    >
        <i class="fas fa-bars"></i>
    </button>
    <!-- Navbar Search-->
    <form
        class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0 opacity-0"
    >
        <div class="input-group">
        <input
            class="form-control"
            type="text"
            placeholder="Search for..."
            aria-label="Search for..."
            aria-describedby="btnNavbarSearch"
        />
        <button class="btn btn-primary" id="btnNavbarSearch" type="button">
            <i class="fas fa-search"></i>
        </button>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
        <a
            class="nav-link dropdown-toggle"
            id="navbarDropdown"
            href="#"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
            ><i class="fas fa-user fa-fw"></i
        ></a>
        <ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdown"
        >
            <li><a class="dropdown-item" href="/profile">Perfil</a></li>
            <li><a class="dropdown-item" href="/settings">Configurações</a></li>
            <li><hr class="dropdown-divider" /></li>
            <li>
                <form action="/logout" method="POST">
                    @csrf
                    <button class="dropdown-item" >Sair</button>
                </form>
            </li>
        </ul>
        </li>
    </ul>
    </nav>
    <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
            <div class="sb-sidenav-menu-heading">Cadastro</div>
            <a class="nav-link" href="/clients">
                <div class="sb-nav-link-icon">
                <i class="fas fa-tachometer-alt"></i>
                </div>
                Clientes
            </a>

            <a
                class="nav-link collapsed"
                href="#"
                data-bs-toggle="collapse"
                data-bs-target="#collapseLayouts"
                aria-expanded="false"
                aria-controls="collapseLayouts"
            >
                <div class="sb-nav-link-icon">
                <i class="fas fa-columns"></i>
                </div>
                Fornecedores
                <div class="sb-sidenav-collapse-arrow">
                <i class="fas fa-angle-down"></i>
                </div>
            </a>
            <div
                class="collapse"
                id="collapseLayouts"
                aria-labelledby="headingOne"
                data-bs-parent="#sidenavAccordion"
            >
                <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="/supplier/products"
                    >Produtos</a
                >
                <a class="nav-link" href="/supplier/services"
                    >Serviços</a
                >
                </nav>
            </div>


            <a class="nav-link" href="/payments">
            <div class="sb-nav-link-icon">
                <i class="fas fa-tachometer-alt"></i>
            </div>
            Contas a Pagar
            </a>

            <a class="nav-link" href="/purchase-requisition">
                <div class="sb-nav-link-icon">
                <i class="fas fa-tachometer-alt"></i>
                </div>
                Requisição de Compra
            </a>

            <a class="nav-link" href="/employees">
                <div class="sb-nav-link-icon">
                <i class="fas fa-tachometer-alt"></i>
                </div>
                Funcionarios
            </a>

            <a class="nav-link" href="/employees/permissions">
                <div class="sb-nav-link-icon">
                <i class="fas fa-tachometer-alt"></i>
                </div>
                Permissões
            </a>

            <div class="sb-sidenav-menu-heading">Operações</div>


            <a
                class="nav-link collapsed"
                href="#"
                data-bs-toggle="collapse"
                data-bs-target="#collapseOrdens"
                aria-expanded="false"
                aria-controls="collapseOrdens"
            >
                <div class="sb-nav-link-icon">
                <i class="fas fa-columns"></i>
                </div>
                Ordem
                <div class="sb-sidenav-collapse-arrow">
                <i class="fas fa-angle-down"></i>
                </div>
            </a>
            <div
                class="collapse"
                id="collapseOrdens"
                aria-labelledby="headingOne"
                data-bs-parent="#sidenavAccordion"
            >
                <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="/order/general-services"
                    >Serviço Geral</a
                >
                <a class="nav-link" href="/servicos"
                    >Manutenção e Calibração de PSV</a
                >
                </nav>
            </div>






            </div>
        </div>

        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main class="container-fluid px-5 pt-4 pb-4">



            {{$slot}}

        </main>
        <footer class="py-4 bg-dark mt-auto">
        <div class="container-fluid px-4">
            <div
            class="d-flex align-items-center justify-content-between small"
            >
            <div class="text-muted">Copyright &copy; Arcon {{ date('Y')}}</div>
            <div>
                <div class="text-muted">+55 (19) 2660-3347 | 0800 591-6371</div>
            </div>
        </div>
        </footer>
    </div>
    </div>





@endauth



</x-layout>
