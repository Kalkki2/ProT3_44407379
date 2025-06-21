<?php

// override core en language system validation or define your own en language validation message
return [
    'required'      => 'Este campo es obligatorio.',
    'min_length'    => 'El campo {field} debe tener al menos {param} caracteres.',
    'max_length'    => 'El campo {field} no puede superar los {param} caracteres.',
    'valid_email'   => 'El campo {field} debe contener un correo electrónico válido.',
    'matches'       => 'El campo  debe coincidir con el campo contraseña.',
    'numeric'       => 'El campo {field} debe contener solo números.',
    'is_unique'     => 'El {field} ya está registrado.',
    'is_not_unique' => 'El campo {field} no es válido.',
    'integer'       => 'El campo {field} debe ser un número entero.',
    'alpha'         => 'El campo {field} solo puede contener letras.',
    'alpha_numeric' => 'El campo {field} solo puede contener letras y números.',
    'alpha_dash'    => 'El campo {field} solo puede contener letras, números, guiones y guiones bajos.',
    'in_list'       => 'El campo {field} debe ser uno de: {param}.',
];
