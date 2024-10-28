<aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#"><img src="/admin/images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="#"><img src="/admin/images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="http://localhost:8000/"> <i class="menu-icon fa fa-dashboard"></i>Inicio </a>
                    </li>
                    <h3 class="menu-title">Menú General</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tint"></i>Toners</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-list"></i><a href="{{route('toners.index')}}">Inventario</a></li>
                            <li><i class="fa fa-plus"></i><a href="{{route('toners.create')}}">Agregar toner</a></li>
                            <li><i class="fa fa-plus"></i><a href="{{route('modelosToners.create')}}">Agregar modelo de Toner</a></li>
                            <li><i class="fa fa-list"></i><a href="{{route('modelosToners.index')}}">Ver modelos de toners</a></li>
                            </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-print"></i>Impresoras</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-list"></i><a href="{{route('impresoras.index')}}">Ver Impresoras</a></li>
                            <li><i class="fa fa-plus"></i><a href="{{route('impresoras.create')}}">Agregar Impresora</a></li>
                            <li><i class="fa fa-plus"></i><a href="{{route('modelosImpresoras.create')}}">Agregar modelo de Impresora</a></li>
                            <li><i class="fa fa-list"></i><a href="{{route('modelosImpresoras.index')}}">Ver modelos de Impresoras</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Gestion de Toners</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Cambiar toner</a></li>
                           
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
        
    </aside>