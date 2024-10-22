
@include('modulos.head')
<body>


    <!-- Left Panel -->

    @include('modulos.dashboard')
    
    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

       @include('modulos.header')
       
       @yield('contenido')

       

   
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
    @include('modulos.js')

</body>

</html>
