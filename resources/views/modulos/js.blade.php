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
    new DataTable('#example',{resposive:true});
</script>

