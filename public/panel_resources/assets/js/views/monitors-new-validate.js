$('#form-new-monitor').validate({
    errorElement: "div",
    focusInfalid: false,

    // Reglas para la validación de campos
    rules: {
        'marca' : {
            required: true
        },
        'modelo' : {
            required: true,
            maxlength: 99
        },
        'acabado' : {
            required: true,
            maxlength: 49
        },
        'material' : {
            required: true
        },
        'stock' : {
            required: true,
            step: 1,
            min: 0,
            max: 1000
        },
        'no_monitores' : {
            required: true,
            step: 1,
            min: 0,
            max: 10
        },
        'precio' : {
            required: true,
            step: .01,
            min: 0,
            max: 9999999.99
        },
        'anchura' : {
            required: true,
            step: 1,
            min: 0,
            max: 2000
        },
        'altura' : {
            required: true,
            step: 1,
            min: 0,
            max: 2000
        },
        'profundidad' : {
            required: true,
            step: 1,
            min: 0,
            max: 2000
        },
        'descripcion' : {
            required: true
        }
    },

    // Mensajes para las reglas de validación
    messages: {
        'marca' : {
            required: 'Es necesario seleccionar una marca'
        },
        'modelo' : {
            required: 'Es necesario ingresar un modelo',
            maxlength: 'El modelo debe de tener menos de 100 caracteres'
        },
        'acabado' : {
            required: 'Es necesario ingresar un color o acabado',
            maxlength: 'El nombre del acabado debe tener menos de 50 caracteres'
        },
        'material' : {
            required: 'Es necesario seleccionar un material del monitor'
        },
        'stock' : {
            required: 'Es necesario ingresar una cantidad de unidades',
            step: 'Solo puede ingresar números enteros',
            min: 'Ingrese un valor mayor o igual a 0',
            max: 'Ingrese un valor menor o igual a 1000'
        },
        'no_monitores' : {
            required: 'Es necesario ingresar un número de monitores',
            step: 'Solo puede ingresar números enteros',
            min: 'Ingrese un valor mayor o igual a 0',
            max: 'Ingrese un valor menor o igual a 10'
        },
        'precio' : {
            required: 'Es necesario ingresar un precio',
            step: 'Ingresa un número de hasta 2 decimales',
            min: 'Ingrese un valor mayor o igual a $0.00',
            max: 'Ingrese un valor menor o igual a $9999999.99'
        },
        'anchura' : {
            required: 'Es necesario ingresar una medida de anchura',
            step: 'Solo puede ingresar números enteros',
            min: 'Ingrese un valor mayor o igual a 0',
            max: 'Ingrese un valor menor o igual a 2000'
        },
        'altura' : {
            required: 'Es necesario ingresar una medida de altura',
            step: 'Solo puede ingresar números enteros',
            min: 'Ingrese un valor mayor o igual a 0',
            max: 'Ingrese un valor menor o igual a 2000'
        },
        'profundidad' : {
            required: 'Es necesario ingresar una medida de profundidad',
            step: 'Solo puede ingresar números enteros',
            min: 'Ingrese un valor mayor o igual a 0',
            max: 'Ingrese un valor menor o igual a 2000'
        },
        'descripcion' : {
            required: 'Ingresa una descripción del producto'
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

document.getElementById("imagen-producto").onchange = function(e) {
    let reader = new FileReader();
    reader.readAsDataURL(e.target.files[0]);
    reader.onload = function() {
        let imgPreview = document.getElementById('imagen-producto-previsualizacion');
        imgPreview.src = reader.result;
    };
};