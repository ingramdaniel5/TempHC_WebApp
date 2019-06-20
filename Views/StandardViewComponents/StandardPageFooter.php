  </div><!-- end of right-panel (Start is stored in content window header) -->

<!-- Template Scripts  -->
<script src="Assets/TemplateVendorAssets/jquery/dist/jquery.min.js"></script>
<script src="Assets/TemplateVendorAssets/popper.js/dist/umd/popper.min.js"></script>
<script src="Assets/TemplateVendorAssets/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="Assets/TemplateAssets/js/main.js"></script>


<script src="Assets/TemplateVendorAssets/chart.js/dist/Chart.bundle.min.js"></script>
<script src="Assets/TemplateAssets/js/dashboard.js"></script>
<script src="Assets/TemplateAssets/js/widgets.js"></script>
<script src="Assets/TemplateVendorAssets/jqvmap/dist/jquery.vmap.min.js"></script>
<script src="Assets/TemplateVendorAssets/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<script src="Assets/TemplateVendorAssets/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script>
    (function($) {
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
<!-- End of Template Scripts  -->

<!-- Custom Application Scripts  -->

<!-- End of Custom Application Scripts  -->
