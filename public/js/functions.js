



/* 
  Funzioni js usate nel nostro progetto per generare pup-up di conferma, per rendere
  visibili delle sezioni, per sfruttare la libreria ajax per validare gli elementi e le form
*/


$(document).ready(function() {
    // Gestione del clic sul bottone
    $('#toggleButton').click(function() {
      // Toggle della visibilità della sezione
      $('#hiddenSection').toggle();
    });
});


// genera pop-up
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
      confirmButtonColor: '#30ae69',
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

// controllano delle condizioni
$(document).ready(function() {
  $('#couponExistsModal').modal('show');
});

$(document).ready(function() {
  $('#promScadutaModal').modal('show');
});

function getErrorHtml(elemErrors) {
  if ((typeof (elemErrors) === 'undefined') || (elemErrors.length < 1))
      return;
  var out = '<ul class="errors">';
  for (var i = 0; i < elemErrors.length; i++) {
      out += '<li>' + elemErrors[i] + '</li>';
  }
  out += '</ul>';
  return out;
}

// validazione singoli elementi
function doElemValidation(id, actionUrl, formId) {

  var formElems;

  function addFormToken() {
      var tokenVal = $("#" + formId + " input[name=_token]").val();
      formElems.append('_token', tokenVal);
  }

  function sendAjaxReq() {
      $.ajax({
          type: 'POST',
          url: actionUrl,
          data: formElems,
          dataType: "json",
          error: function (data) {
              if (data.status === 422) {
                  var errMsgs = JSON.parse(data.responseText);
                  $("#" + id).parent().find('.errors').html(' ');
                  $("#" + id).after(getErrorHtml(errMsgs[id]));
              }
          },
          contentType: false,
          processData: false
      });
  }

  var elem = $("#" + id);
  if (elem.attr('type') === 'file') {
  // elemento di input type=file valorizzato
      if (elem.val() !== '') {
          inputVal = elem.get(0).files[0];
      } else {
          inputVal = new File([""], "");
      }
  } else {
      // elemento di input type != file
      inputVal = elem.val();
  }
  formElems = new FormData();
  formElems.append(id, inputVal);
  addFormToken();
  sendAjaxReq();

}

// validazione form
function doFormValidation(actionUrl, formId) {
  var form = new FormData(document.getElementById(formId));
  $.ajax({
    type: 'POST',
    url: actionUrl,
    data: form,
    dataType: "json",
    error: function (data) {
      if (data.status === 422) {
        var errMsgs = JSON.parse(data.responseText);
        $.each(errMsgs, function (id) {
          $("#" + id).parent().find('.errors').html(' ');
          $("#" + id).after(getErrorHtml(errMsgs[id]));
        });
      }
    },
    success: function (data) {
      if (data.redirect) {
        window.location.href = data.redirect; // Effettua il reindirizzamento
      }
    },
    contentType: false,
    processData: false
  });
}