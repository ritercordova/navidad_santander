(function ($) {
    $(document).ready(function (e) {
        //Validacion de formulario
        $('#form_cliente').validate({
            rules: {
                "data[Client][nombre]": {
                    required: true
                },
                "data[Client][email]": {
                    required: true,
                    email:true
                },
                "data[Client][telefono]": {
                    required: true
                }
            },
            messages: {
                "data[Client][nombre]": {
                    required: 'Nombre requerido'
                },
                "data[Client][email]": {
                    required: 'Email requerido',
                    email: 'Email incorrecto'
                },
                "data[Client][telefono]": {
                    required: 'Teléfono requerido'
                }
            }
        });
    });
})(jQuery);