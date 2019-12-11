
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

$(document).ready(function(){
  
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div><div class="row"> <div class="col-md-4"> <p><strong>BANK</strong></p><label class="field select"> <select class="form-control select2-single" name="bank1[]" id="area"> <option value="002">BANK BRI</option><option value="003">BANK EKSPOR INDONESIA</option><option value="008">BANK MANDIRI</option><option value="009">BANK BNI</option><option value="011">BANK DANAMON</option><option value="013">PERMATA BANK</option><option value="014">BANK BCA</option><option value="016">BANK BII</option><option value="019">BANK PANIN</option><option value="020">BANK ARTA NIAGA KENCANA</option><option value="022">BANK NIAGA</option><option value="023">BANK BUANA IND</option><option value="026">BANK LIPPO</option><option value="028">BANK NISP</option><option value="030">AMERICAN EXPRESS BANK LTD</option><option value="031">CITIBANK N.A.</option><option value="032">JP. MORGAN CHASE BANK, N.A.</option><option value="033">BANK OF AMERICA, N.A</option><option value="034">ING INDONESIA BANK</option><option value="036">BANK MULTICOR TBK.</option><option value="037">BANK ARTHA GRAHA</option><option value="039">BANK CREDIT AGRICOLE INDOSUEZ</option><option value="040">THE BANGKOK BANK COMP. LTD</option><option value="041">THE HONGKONG & SHANGHAI B.C.</option><option value="042">THE BANK OF TOKYO MITSUBISHI UFJ LTD</option><option value="045">BANK SUMITOMO MITSUI INDONESIA</option><option value="046">BANK DBS INDONESIA</option><option value="047">BANK RESONA PERDANIA</option><option value="048">BANK MIZUHO INDONESIA</option><option value="050">STANDARD CHARTERED BANK</option><option value="052">BANK ABN AMRO</option><option value="053">BANK KEPPEL TATLEE BUANA</option><option value="054">BANK CAPITAL INDONESIA, TBK.</option><option value="057">BANK BNP PARIBAS INDONESIA</option><option value="058">BANK UOB INDONESIA</option><option value="059">KOREA EXCHANGE BANK DANAMON</option><option value="060">RABOBANK INTERNASIONAL INDONESIA</option><option value="061">ANZ PANIN BANK</option><option value="067">DEUTSCHE BANK AG.</option><option value="068">BANK WOORI INDONESIA</option><option value="069">BANK OF CHINA LIMITED</option><option value="076">BANK BUMI ARTA</option><option value="087">BANK EKONOMI</option><option value="088">BANK ANTARDAERAH</option><option value="089">BANK HAGA</option><option value="093">BANK IFI</option><option value="095">BANK CENTURY, TBK.</option><option value="097">BANK MAYAPADA</option><option value="110">BANK JABAR</option><option value="111">BANK DKI</option><option value="112">BPD DIY</option><option value="113">BANK JATENG</option><option value="114">BANK JATIM</option><option value="115">BPD JAMBI</option><option value="116">BPD ACEH</option><option value="117">BANK SUMUT</option><option value="118">BANK NAGARI</option><option value="119">BANK RIAU</option><option value="120">BANK SUMSEL</option><option value="121">BANK LAMPUNG</option><option value="122">BPD KALSEL</option><option value="123">BPD KALIMANTAN BARAT</option><option value="124">BPD KALTIM</option><option value="125">BPD KALTENG</option><option value="126">BPD SULSEL</option><option value="127">BANK SULUT</option><option value="128">BPD NTB</option><option value="129">BPD BALI</option><option value="130">BANK NTT</option><option value="131">BANK MALUKU</option><option value="132">BPD PAPUA</option><option value="133">BANK BENGKULU</option><option value="134">BPD SULAWESI TENGAH</option><option value="135">BANK SULTRA</option><option value="145">BANK NUSANTARA PARAHYANGAN</option><option value="146">BANK SWADESI</option><option value="147">BANK MUAMALAT</option><option value="151">BANK MESTIKA</option><option value="152">BANK METRO EXPRESS</option><option value="153">BANK SHINTA INDONESIA</option><option value="157">BANK MASPION</option><option value="159">BANK HAGAKITA</option><option value="161">BANK GANESHA</option><option value="162">BANK WINDU KENTJANA</option><option value="164">HALIM INDONESIA BANK</option><option value="166">BANK HARMONI INTERNATIONAL</option><option value="167">BANK KESAWAN</option><option value="200">BANK TABUNGAN NEGARA (PERSERO)</option><option value="212">BANK HIMPUNAN SAUDARA 1906, TBK .</option><option value="213">BANK TABUNGAN PENSIUNAN NASIONAL</option><option value="405">BANK SWAGUNA</option><option value="422">BANK JASA ARTA</option><option value="426">BANK MEGA</option><option value="427">BANK JASA JAKARTA</option><option value="441">BANK BUKOPIN</option><option value="451">BANK SYARIAH MANDIRI</option><option value="459">BANK BISNIS INTERNASIONAL</option><option value="466">BANK SRI PARTHA</option><option value="472">BANK JASA JAKARTA</option><option value="484">BANK BINTANG MANUNGGAL</option><option value="485">BANK BUMIPUTERA</option><option value="490">BANK YUDHA BHAKTI</option><option value="491">BANK MITRANIAGA</option><option value="494">BANK AGRO NIAGA</option><option value="498">BANK INDOMONEX</option><option value="501">BANK ROYAL INDONESIA</option><option value="503">BANK ALFINDO</option><option value="506">BANK SYARIAH MEGA</option><option value="513">BANK INA PERDANA</option><option value="517">BANK HARFA</option><option value="520">PRIMA MASTER BANK</option><option value="521">BANK PERSYARIKATAN INDONESIA</option><option value="525">BANK AKITA</option><option value="526">LIMAN INTERNATIONAL BANK</option><option value="531">ANGLOMAS INTERNASIONAL BANK</option><option value="523">BANK DIPO INTERNATIONAL</option><option value="535">BANK KESEJAHTERAAN EKONOMI</option><option value="536">BANK UIB</option><option value="542">BANK ARTOS IND</option><option value="547">BANK PURBA DANARTA</option><option value="548">BANK MULTI ARTA SENTOSA</option><option value="553">BANK MAYORA</option><option value="555">BANK INDEX SELINDO</option><option value="566">BANK VICTORIA INTERNATIONAL</option><option value="558">BANK EKSEKUTIF</option><option value="559">CENTRATAMA NASIONAL BANK</option><option value="562">BANK FAMA INTERNASIONAL</option><option value="564">BANK SINAR HARAPAN BALI</option><option value="567">BANK HARDA</option><option value="945">BANK FINCONESIA</option><option value="946">BANK MERINCORP</option><option value="947">BANK MAYBANK INDOCORP</option><option value="948">BANK OCBC � INDONESIA</option><option value="949">BANK CHINA TRUST INDONESIA</option><option value="950">BANK COMMONWEALTH</option> </select> </label> </div><div class="col-md-8"> <p><strong>No. Rek</strong></p><label class="field prepend-icon"> <input type="text" name="norek[]" class="gui-input" placeholder="No. Rekening" required> <span class="field-icon"> <i class="fa fa-dollar"></i> </span> </label><br/><br/> </div></div><br/><a href="javascript:void(0);" class="remove_button btn btn-block btn-danger" style="width:50%;">Hapus Field</i></a><br/><br/></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
            $('.select2-single').select2();
        }
        
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
</body>

</html>


