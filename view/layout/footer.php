
</div>
<!-- /Body Wrap  -->

<!-- Scripts -->

<!-- jQuery -->
<script src="view/assets/js/jquery/jquery-1.12.3.min.js"></script>
<script src="view/assets/js/jquery/jquery_ui/jquery-ui.min.js"></script>

<!-- AnimatedSVGIcons -->
<script src="view/assets/fonts/animatedsvgicons/js/snap.svg-min.js"></script>
<script src="view/assets/fonts/animatedsvgicons/js/svgicons-config.js"></script>
<script src="view/assets/fonts/animatedsvgicons/js/svgicons.js"></script>
<script src="view/assets/fonts/animatedsvgicons/js/svgicons-init.js"></script>

<!-- Scroll -->
<script src="view/assets/js/utility/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js"></script>

<!-- Mixitup -->

<!-- Summernote -->

<!-- HighCharts Plugin -->
<script src="view/assets/js/plugins/highcharts/highcharts.js"></script>

<!-- Highlight JS -->

<!-- Date/Month - Pickers -->

<!-- Magnific Popup Plugin -->
<!-- <script src="view/assets/js/plugins/magnific/jquery.magnific-popup.js"></script> -->

<!-- FullCalendar Plugin -->

<!-- Plugins -->
<!-- <script src="view/assets/js/plugins/c3charts/c3.min.js"></script> -->
<!-- <script src="view/assets/js/plugins/circles/circles.js"></script> -->

<!-- Google Map API -->

<!-- Jvectormap JS -->
<!-- <script src="view/assets/js/plugins/jvectormap/jquery.jvectormap.min.js"></script>
<script src="view/assets/js/plugins/jvectormap/assets/jquery-jvectormap-us-lcc-en.js"></script> 
<script src="view/assets/js/plugins/jvectormap/assets/jquery-jvectormap-world-mill-en.js"></script> -->

<!-- Datatables JS -->
<script src="view/assets/js/plugins/datatables/media/js/jquery.dataTables.js"></script>
<script src="view/assets/js/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<script src="view/assets/js/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
<script src="view/assets/js/plugins/datatables/media/js/dataTables.bootstrap.js"></script>

<!-- FooTable JS -->

<!-- Validate JS -->

<!-- BS Dual Listbox JS -->

<!-- Bootstrap Maxlength JS -->

<!-- Select2 JS -->
<!-- <script type="text/javascript" src="view/appp.js"></script> -->

<!-- wizard -->
<!-- Typeahead JS -->

<!-- TagManager JS -->

<!-- DateRange JS -->

<!-- BS Colorpicker JS -->

<!-- MaskedInput JS -->

<!-- Slick Slider JS -->

<!-- MarkDown JS -->

<!-- X-edit CSS -->

<!-- Dropzone JS -->

<!-- Cropper JS -->

<!-- Zoom JS -->

<!-- Nestable JS -->

<!-- PNotify JS -->

<!-- Fancytree JSs -->

<!-- Ladda JS -->

<!-- NProgress JS -->

<!-- Countdown JS -->

<!-- Select checkbox -->
<!-- 
<script>
// var clicked = false;
// $(".pilihsemua").on("click", function() {
//   $(".flipswitch-cb").prop("checked", !clicked);
//   clicked = !clicked;
// });
</script> -->

<!-- CanvasBG JS -->
<script src="view/assets/js/plugins/c3charts/d3.min.js"></script>
<script src="view/assets/js/plugins/c3charts/c3.min.js"></script>

<!-- Theme Scripts -->
<script src="view/assets/js/utility/utility.js"></script>
<!-- Sengaja tidak diload, membuat error-->
<script src="view/assets/js/demo/demo.js"></script>
<script src="view/assets/js/main.js"></script>
<script src="view/assets/js/demo/widgets_sidebar.js"></script>


<!-- <script src="view/assets/js/pages/dashboardcopy.js"></script> -->
<script src="view/assets/js/pages/tables-data1.js"></script>
<script src="view/assets/js/pages/allcp_forms-elements.js"></script>

<!-- Select2 JS -->
<script src="view/assets/js/plugins/select2/select2.min.js"></script>

<!--fixed, tidak membuat error-->
<!-- <script src="view/assets/js/demo/widgets.js"></script> -->

<!-- <script src="view/assets/js/demo/charts/highcharts.js"></script> -->
<script src="view/assets/js/demo/charts/d3.js"></script>
<script src="view/assets/js/pages/dashboard_init.js"></script>
<script src="view/assets/js/pages/user-forms-additional-inputs.js"></script>


<script src="view/assets/js/plugins/magnific/jquery.magnific-popup.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<!-- MaskedInput JS -->

<script src="view/assets/js/plugins/maxlength/bootstrap-maxlength.min.js"></script>
<script src="view/assets/js/plugins/jquerymask/jquery.maskedinput.min.js"></script>
<script src="view/assets/js/pages/user-forms-additional-inputs.js"></script>

<script>
        jQuery(function($){
            $(".npwp").mask("99.999.999.9-999.999");
            $(".ktp").mask("9999.9999.9999.9999");
        });
        </script>
<script>
function getSelectedEmplpyee()
{
 var selectedId = $('#kokabhoo').val();
$.ajax({
  type: "POST",
  url: "test.php",
  data: {selected: selectedId},
  success: function(response) {
    $("#pilih").html(response);
  },
  error: function(data) {
    $("#pilih").html(response);
  }
});
}

$('#kokabhoo').change(function() {
  getSelectedEmplpyee();
});
</script>
</body>

</html>


