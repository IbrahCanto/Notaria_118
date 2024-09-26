<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="logo_108_asset" sizes="76x76" href="./assets/img/logo_108_asset.png">
    <link rel="icon" type="image/png" href="./assets/img/Logo_118_mini_2.png">
    
    <title>
      Notaría Publica 118
    </title>

    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/blk-design-system-pro.css?v=1.0.0" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <link href="./assets/css/style.css" rel="stylesheet" />
  </head>

  <body class="sections-page">

  <div style="position: relative; width: 100%; height: 0; padding-top: 100.0000%;
 padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
 border-radius: 8px; will-change: transform;">
  <iframe loading="lazy" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
    src="https://www.canva.com/design/DAGQBJYmyCw/Kj-OTxwTkdIBtmxZE7-k2w/view?embed" allowfullscreen="allowfullscreen" allow="fullscreen">
  </iframe>
</div>


    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="./assets/js/plugins/jquery.fancybox.min.js"></script>
    <script src="./assets/js/plugins/jquery.validate.js"></script>
    <script src="./assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="./assets/js/blk-design-system-pro.min.js?v=1.0.0" type="text/javascript"></script>
    <script src="./assets/js/plugins/sweetalert2.all.min.js"></script>

    <!-- <script>

      var texto = "notaria118yucatan@gmail.com";
      var textoMinusculas = texto.toLowerCase();
      var contadorClics = 0;
      var limiteClics = 3;

      $('div.checkbox-group.required :checkbox:checked').length > 0
      $(".nome").html(textoMinusculas),

      $(document).ready(function() {
        $(".pdf-link").fancybox({
            type: 'iframe',
            iframe: {
                preload: false,
                css: {
                    width: '90%', 
                    height: '90%' 
                }
            }
        });


        $("#miFormulario").validate({
          rules: {
            Nombre: {
              required: true,
              maxlength: 64
            },
            Telefono: {
              required: true,
              maxlength: 64
            },
            Email: {
              required: true,
              maxlength: 64,
              email: true,
            },
            Mensaje: {
              required: true,
              minlength: 6, 
              maxlength: 450,
            },
            Tipo_de_Informacion: {
              required: true,
            },
            checkbox_form: {
              required: true,
            },
          },
          messages: {
            Nombre: {
              required: "Por favor, ingrese su nombre.",
              maxlength: "Ingrese un máximo de 64 caracteres",
            },
            Telefono: {
              required: "Por favor, ingrese su número de teléfono.",
              maxlength: "Ingrese un máximo de 64 caracteres.",
            },
            Email: {
              required: "Por favor, ingrese su correo electrónico.",
              maxlength: "Ingrese un máximo de 64 caracteres.",
              email: "Ingrese un correo electrónico valido.",
            },
            Mensaje: {
              required: "Por favor, ingrese su mensaje.",
              minlength: "El valor mínimo es de 6 caracteres.",
              maxlength: "Ingrese un máximo de 450 caracteres.",
            },
            Tipo_de_Informacion: {
              required: "Por favor, seleccione una opción.",
            },
            checkbox_form: {
              required: "Es necesario aceptar el Aviso de Privacidad.",
            },
            errorElement : 'span'
            },
        });

        const customClassSwal_1 = Swal.mixin({
          customClass: {
            container: 'background-blur',
            popup: 'custom-border-radius',
            confirmButton: "btn btn-success",
            cancelButton: "btn btn-danger",
          },
          buttonsStyling: false,
        });
              
        const customClassSwal_2 = Swal.mixin({
          customClass: {
            popup: 'custom-background',
            confirmButton: "btn btn-success",
            cancelButton: "btn btn-danger",
          },
          buttonsStyling: false,
        });

        $('#enviarFormulario').on('click', function() {
          contadorClics++;

          if ($('#miFormulario').valid()) {
            customClassSwal_2.fire({
              title: 'Su mensaje será enviado',
              text: 'Asegúrese de que los datos ingresados sean correctos',
              icon: 'info',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Sí, enviar',
              cancelButtonText: 'Cancelar',
            }).then((result) => {
              if (result.isConfirmed) {
                enviarFormulario();
                customClassSwal_1.fire({
                  title: 'Enviando mensaje...',
                  text: 'Por favor no cierre la página',
                  allowOutsideClick: false,
                  showConfirmButton: false,
                  onBeforeOpen: () => {
                    Swal.showLoading();
                  }
                });
              } 
            });
          } else {
              if (contadorClics >= limiteClics) {
                customClassSwal_2.fire({
                  title: 'Mensaje no enviado',
                  text: 'Favor de revisar los datos ingresados',
                  icon: 'error',
                })
                contadorClics = 0;
              }
          }
        });
        
        function enviarFormulario() {
          var formData = $('#miFormulario').serialize();

          $.ajax({
            type: 'POST',
            url: "{{ route('comentatios_recibir') }}",
            data: formData,
            success: function(response) {
              customClassSwal_2.fire({
                icon: 'success',
                title: 'Su mensaje fue enviado con éxito.',
                iconHtml: '<i class="fa fa-check"></i>',
                html: `
                    <p style="color: #0f0f0f;">Le hemos enviado un correo de confirmación a su dirección de correo electrónico.</p>
                    <p style="color: #0f0f0f;">Muy pronto nos pondremos en contacto con usted.</p>
                  `,
              });
              $('#miFormulario')[0].reset()
              return false;
            },
            error: function(response) {
              customClassSwal_2.fire({
                icon: 'error',
                title: 'Error',
                text: 'Hubo un error al enviar su mensaje. Inténtelo nuevamente más tarde',
              });
            }
          });
        }
      });

      function statusCheck() {};

      $(document).ready(function() {  
        $("#checkboxPolyline").change(function() {
          if ($(this).is(':checked')) {
            console.log("ON")
          } else {
            console.log("OFF")
          }
        });
                              
        $('#buttonStart #checkboxPolyline').attr('unchecked', 'checked').change();

        if ($('.nav-down').length != 0) {
          blackKit.checkScrollForMovingNavbar();
        };
      });

    </script> -->
  </body>
</html>
 