$(document).ready(function() {
    // Gestione del clic sul bottone
    $('#toggleButton').click(function() {
      // Toggle della visibilità della sezione
      $('#hiddenSection').toggle();
    });
});

$(document).ready(function() {
  $('.confirm-delete-form').on('click', '.delete-button', function(e) {
    e.preventDefault(); // Evita l'invio del form predefinito
    
    var form = $(this).closest('.confirm-delete-form');
    var confirmMessage = $(this).data('confirm');
    
    Swal.fire({
      title: 'Conferma eliminazione',
      text: confirmMessage,
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Si',
      cancelButtonText: 'No'
    }).then(function(result) {
      if (result.isConfirmed) {
        // Procedi con l'eliminazione inviando il form
        form.submit();
      }
    });
  });
});

$(document).ready(function() {
  $('#couponExistsModal').modal('show');
});

$(document).ready(function() {
  $('#promScadutaModal').modal('show');
});

