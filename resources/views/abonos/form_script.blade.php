<script type="text/javascript">

let total, opcionesTipo;

opcionesTipo = function(tipo){
  if(tipo === "TRANSFERENCIA") {
    $("#form-comision").css("display", "none");
    $("#form-cuenta").css("display", "block");
    $("#form-referencia").css("display", "block");
    $("#comision-field").val(0);
  }
  else{
    $("#form-comision").css("display", "block");
    $("#form-cuenta").css("display", "none");
    $("#form-referencia").css("display", "none");
  }
  total();
}

total = function(){
  let monto = parseFloat($("#monto-field").val()|| 0);
  let comision = parseFloat($("#comision-field").val()||0.0);
  let totalcomision =  monto * (comision /100);
  let total  = monto +totalcomision;
  $("#total").empty().append(" Total: "+ total.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,') +" BS");
  $("#comision").empty().append(" Comision: "+ totalcomision.toFixed(2).replace(/(\d)(?=(\d{3})+\.)/g, '$1,') +" BS");
}

$(window).on('load', function() {
  opcionesTipo($("#tipo-field").val());
  $("#fecha-field").datepicker({format: "yyyy/mm/dd",language: 'es'});
  $("#negocio_id-field").select2({
    placeholder: 'Seleccione un Negocio',
    minimumInputLength: 0});
  $("#cuenta_id-field").select2({
    placeholder: 'Seleccione un Negocio',
    minimumInputLength: 0});
}); 

$(document).on('change','#tipo-field',function(){
  opcionesTipo($("#tipo-field option:selected").val());
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


$(document).on('change','#comision-field',function(){
  total();
});
$(document).on('keyup','#comision-field',function(){
  total();
});
$(document).on('keydown','#comision-field',function(){
  total();
});

</script>