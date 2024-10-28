<script src="/admin/vendors/jquery/dist/jquery.min.js"></script>
<script src="/admin/vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/admin/assets/js/main.js"></script>



<script src="/admin/vendors/jszip/dist/jszip.min.js"></script>
<script src="/admin/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="/admin/vendors/pdfmake/build/vfs_fonts.js"></script>

<!-- DataTables JS -->

<script src="/admin/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/admin/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="/admin/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="/admin/vendors/jszip/dist/jszip.min.js"></script>
<script src="/admin/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="/admin/vendors/pdfmake/build/vfs_fonts.js"></script>
<script src="/admin/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="/admin/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="/admin/vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<script src="/admin/assets/js/init-scripts/data-table/datatables-init.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- prueba-->
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
<script src="https://cdn.datatables.net/responsive/3.0.3/js/dataTables.responsive.js"></script>
<script src="https://cdn.datatables.net/responsive/3.0.3/js/responsive.bootstrap5.js"></script>
<script type="text/javascript" src="{{ asset('js/scripts_generales.js')}}"></script>
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
<script>
new DataTable('#example', {
    responsive: {
        details: {
            display: DataTable.Responsive.display.modal({
                header: function (row) {
                    var data = row.data();
                    return 'Details for ' + data[0] + ' ' + data[1];
                }
            }),
            renderer: DataTable.Responsive.renderer.tableAll({
                tableClass: 'table'
            })
        }
    },
    language: {
            url: '//cdn.datatables.net/plug-ins/1.11.5/i18n/es-ES.json'
        }
});
</script>

@if(session('ModeloCreado') == 'OK')
    <script type="text/javascript">
        
      Swal.fire(

          'Los datos han sido agregados con éxito',
          '',
          'success'
        )

    </script>
@elseif(session('ModeloActualizado') == 'OK') 
    <script type="text/javascript">  
        
      Swal.fire(

          'Datos actualizados con éxito',
          '',
          'warning'
        )

    </script>   
@endif