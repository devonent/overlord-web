$.validator.addMethod('filesize', function (value, element, param) {
    return this.optional(element) || (element.files[0].size <= param)
});

$('#form-detail-user').validate({
    errorElement: "div",
    focusInfalid: false,

    // Reglas para la validación de campos
    rules: {
        'nombre' : {
            required: true,
            rangelength: [3,45]
        },
        'apellido-paterno' : {
            required: true,
            rangelength: [3,45]
        },
        'apellido-materno' : {
            required: true,
            rangelength: [3,45]
        },
        'rol' : {
            required: true
        },
        'email' : {
            required: true,
            email: true
        },
        'sexo' : {
            required: true
        },
        'contrasenia' : {
            required: false,
            rangelength: [6,60],
        },
        'confirmar-contrasenia' : {
            required: false,
            rangelength: [6,60],
            equalTo: '#contrasenia'
        },
        'imagen-perfil' : {
            filesize: 4194304 
        }
    },

    // Mensajes para las reglas de validación
    messages: {
        'nombre': {
            required: 'Es necesario el nombre del usuario',
            rangelength: 'El nombre del usuario debe tener entre 3 a 45 caracteres'
        },
        'apellido-paterno': {
            required: 'Es necesario el apellido paterno del usuario',
            rangelength: 'El apellido paterno debe tener entre 3 a 45 caracteres'
        },
        'apellido-materno': {
            required: 'Es necesario el apellido materno del usuario',
            rangelength: 'El nombre del usuario debe tener entre 3 a 45 caracteres'
        },
        'rol': {
            required: 'Es necesario seleccionar un rol para el usuario'
        },
        'email': {
            required: 'Es necesario ingresar un correo electrónico',
            email: 'Ingresa un correo electrónico válido'
        },
        'sexo': {
            required: 'Es necesario seleccionar un sexo'
        },
        'contrasenia': {
            rangelength: 'La contraseña debe tener entre 6 a 60 caracteres'
        },
        'confirmar-contrasenia': {
            rangelength: 'La contraseña debe tener entre 6 a 60 caracteres',
            equalTo: 'Las contraseñas no coinciden'
        },
        'imagen-perfil' : {
            filesize: 'Tu imagen no puede ser mayor a 4 MiB'
        }
    },
    
    errorPlacement: function errorPlacement(error, element) {
        var $parent = $(element).parents('.form-group');

        if($parent.find('.jquery-validation-error').length) {
            return;
        }

        $parent.append (
            error.addClass('jquery-validation-error small form-text invalid-feedback')
        );
    },
    highlight: function(element) {
        var $el = $(element);
        var $parent = $el.parents('.form-group');

        $el.addClass('is-invalid');

        if($el.hasClass('select2-hidden-accessible') || $el.attr('data-role') == 'tagsinput') {
            $el.parent().addClass('is-invalid');
        }

        if($el.hasClass('form-check-input')) {
            $el.parent().find('.is-invalid').removeClass('is-invalid');
        }
    },
    unhighlight: function(element) {
        $(element).parents('.form-group').find('.is-invalid').removeClass('is-invalid');
    }
});

document.getElementById("imagen-perfil").onchange = function(e) {
    let reader = new FileReader();
    reader.readAsDataURL(e.target.files[0]);
    reader.onload = function() {
        let imgPreview = document.getElementById('imagen-perfil-previsualizacion');
        imgPreview.src = reader.result;
    };
};