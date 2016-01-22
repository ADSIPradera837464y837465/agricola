$(function(){
  $('#filtro_form').submit(function(e){
      e.preventDefault();
  });
  $('#filtro').keyup(function(){
    var envio = $('#filtro').val();
    
    $('.resultado').html('<h2>Cargando</h2>');
  });
  
});

