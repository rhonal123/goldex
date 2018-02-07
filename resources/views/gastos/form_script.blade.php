<script type="text/javascript">

let total;

total = function(){
  let monto = parseFloat($("#monto-field").val()|| 0);
  $("#total").empty().append(" Total: "+ monto.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,') +" BS");
}

$(window).on('load', function() {
  //$("#fecha-field").datepicker({format: "yyyy/mm/dd",language: 'es'});
  $('#fecha').datetimepicker({ format: "YYYY-MM-DD hh:mm a"});

  $("#cuenta_id-field").select2({
    placeholder: 'Seleccione una Cuenta',
    minimumInputLength: 0});

  $("#negocio_id-field").select2({
    placeholder: 'Seleccione un Negocio',
    minimumInputLength: 0});

}); 

$(document).on('keydown','#monto-field',function(){
  total();
});
$(document).on('keyup','#monto-field',function(){
  total();
});
$(document).on('change','#monto-field',function(){
  total();
});


</script>