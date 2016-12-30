$( document ).ready(function() {

});

function addOp(){
  var cant = $('#NumbOp').val();
  $('.contenedor').empty();
  for(var i= 0; i < cant;i++){
  	$('.contenedor').append("<br><div class='md-form'><div class='col-md-6'><select class='form-control' id='type"+i+"' name='type"+i+"'><option value='update'>Update</option><option value='query'>Query</option></select></div><div class='col-md-6'><i class='fa fa-pencil prefix'></i><input type='text' id='op"+i+"' name='op"+i+"' class='form-control' onFocus='change("+i+")' onblur='validar_size("+i+")' ></div></div>");
  }
}

function change(id){
	var op = "#op"+id;
	var type ="#type"+id+" option:selected";
	
	if($(type).text() == 'Update'){
      $(op).mask('99:99:99=>99');
	}else
	  $(op).mask('99:99:99 + 99:99:99');
}

/*  -----  validar que las operaciones estan en el el rango del tamaño de cubo  ---- */
function validar_size(id){
	var op = "#op"+id;
	var size = parseInt($("#size").val());
    var value = $(op).val();
    /*  -------- */
    var value2 = value.split("=>",1);
    /*  -------- */
    
    if((parseInt(value[0]) > size) || (parseInt(value[1]) > size) || (parseInt(value[2]) > size)){
    		alert("Fuera de Rango !");
    		$(op).val('');
    		$(op).focus(true);
	}

}
/*  -------------------------------------------------------------------------------- */



function valNumber(id){
	var valor = $('#'+id).val();
	if (isNaN(valor) || valor < 1 || valor > 50) {
             $('#'+id).val('');
             return false;
	}else{
         return true;
	}
}
