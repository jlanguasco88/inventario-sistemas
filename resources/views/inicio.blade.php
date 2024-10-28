@include('modulos.head')

<body>


    <!-- Left Panel -->

    @include('modulos.dashboard')
    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        @include('modulos.header')

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                        </div>
                        <h1 class="mb-0">
                            <span class="count">{{ $totalStockToners }}</span>
                            <!-- Aquí se muestra el total del stock -->
                        </h1>
                        <h1 class="text-light">Toners<a href="{{ route('toners.index') }}"><i
                                    class="fa fa-tint"></i></a></h1>
                    </div>

                    <div class="chart-wrapper px-0" style="height:70px;" height="70">
                        <canvas id="widgetChart3"></canvas>
                    </div>
                </div>
            </div>
            <!--/.col-->

            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-5">
                    <div class="card-body pb-0">
                        <div class="dropdown float-right">
                        </div>
                        <h1 class="mb-0">
                            <span class="count">{{ $totalImpresorasActivas }}</span>
                            <!-- Aquí se muestra la cantidad de impresoras activas -->
                        </h1>
                        <h1 class="text-light">Impresoras <a href="{{ route('impresoras.index') }}"><i
                                    class="fa fa-print"></i></a></h1>

                        <div class="chart-wrapper px-3" style="height:70px;" height="70">
                            <canvas id="widgetChart4"></canvas>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="/admin/vendors/jquery/dist/jquery.min.js"></script>
    <script src="/admin/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/admin/assets/js/main.js"></script>


    <script src="/admin/vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="/admin/assets/js/dashboard.js"></script>
    <script src="/admin/assets/js/widgets.js"></script>
    <script src="/admin/vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="/admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="/admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function ($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>