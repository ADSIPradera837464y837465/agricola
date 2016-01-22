$(function () {
  $('#filtro_form').submit(function (e) {
    e.preventDefault();
  });
  $('#filtro').keyup(function () {
    var envio = $('#filtro').val();

    $('.resultado').html('<h2>Cargando...</h2>');

    $.ajax({
      type: 'POST',
      url: "http://localhost/agricola/web/index.php/metodoRiego/index",
      data: ('filtro=' + envio),
      success: function(resp){
        if(resp!==""){
          $('.resultado').html(resp);
        }
      } 
    });
  });

});

