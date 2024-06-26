$(document).ready(function () {
  $('#editar').on('click', function () {
      var url = $('#url').val();

      var Fn = {
          // Valida el rut con su cadena completa "XXXXXXXX-X"
          validaRut: function (rutCompleto) {
              rutCompleto = rutCompleto.replace("‐", "-");
              if (!/^[0-9]+[-|‐]{1}[0-9kK]{1}$/.test(rutCompleto))
                  return false;
              var tmp = rutCompleto.split('-');
              var digv = tmp[1];
              var rut = tmp[0];
              if (digv == 'K') digv = 'k';

              return (Fn.dv(rut) == digv);
          },
          dv: function (T) {
              var M = 0, S = 1;
              for (; T; T = Math.floor(T / 10))
                  S = (S + T % 10 * (9 - M++ % 6)) % 11;
              return S ? S - 1 : 'k';
          }
      }


      $("#btnvalida").click(function () {
          if (Fn.validaRut($("#NuevoRut").val())) {
          } else {
              $("#msgerror").html("El Rut no es válido :'( ");
              toastr["warning"]("El Rut no es válido :'( ");
              return false;
          }
      });

      var rut = $('#NuevoRut').val();
      var nom = $('#NuevoNombre').val()
      var email = $('#NuevoEmail').val()
      var apel = $('#NuevoApellido').val()
      var tel = $('#Nuevo_nmro').val()
      var cod = $('#codigo_nmro').val()
      var token = $("meta[name='csrf-token']").attr("content")

      var TELEFONO = String(tel);
      var codigo = String(cod);
      num = codigo + TELEFONO;
      if (rut == "") {
          toastr["warning"]("Por favor ingrese su rut");
          return false;
      }
      if (nom == "") {
          toastr["warning"]("Por favor ingresar Nombre");
          return false;
      }
      if (email == "") {
          toastr["warning"]("Por favor ingresar su email");
          return false;
      }
      if (apel == "") {
          toastr["warning"]("Por favor ingresar su apellido");
          return false;
      }
      if (tel == "") {
          toastr["warning"]("Por favor ingresar su telefono");
          return false;
      }

      $.ajax({
          url: url,
          type: 'GET',
          data: {
              _token: token,
              rut: rut,
              nom: nom,
              email: email,
              apel: apel,
              num: num,

          },
          success: function (data) {
              if (data["message"] == "Successful") {
                  toastr["info"]("Su informacion ha sido guardada correctamente");
                  console.log('data')
              } else {
                  toastr["warning"]("Ha ocurrido un problema, por favor vuelva a intentarlo");
              }
          },
          error: function (data) {
              toastr["warning"](
                  "Ha ocurrido un problema, por favor vuelva a intentarlo"
              )
              console.log(data);
          },
      })
  })
})