// Cuando se haga click sobre algún `<input name="radio"`
$('input[name="id_estructura"]').on('click', () => {

  // Si el radio no esta seleccionado
  if (!this.checked) {
    return false;
  }

  // Solicitamos al archivo `formaPago.php` el contenido 
  // correspondiente al método de pago seleccionado
  $.ajax({
      type: 'POST',
      url: 'index.php',
      data: {
        idForma: this.value
      }
    })
    .done(function(res) {
        // Si todo va bien, incluimos dentro del 
        // `<div id="formaPagoCont"` el contenido
        $('#formaPagoCont').html(res);
    });
});