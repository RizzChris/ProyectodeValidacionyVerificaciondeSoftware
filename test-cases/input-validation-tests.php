<?php

// Casos de prueba para la validación de entradas

function test_input_validation() {
    // Caso de prueba para la validación de $_POST
    $_POST = [
        'name' => 'John Doe',
        'email' => 'john.doe@example.com',
        'password' => 'password123',
    ];

    // Validar nombre
    if (!preg_match('/^[a-zA-Z ]+$/', $_POST['name'])) {
        echo "Prueba fallida: Formato de nombre inválido.\n";
    } else {
        echo "Prueba exitosa: El formato del nombre es válido.\n";
    }

    // Validar correo electrónico
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo "Prueba fallida: Formato de correo electrónico inválido.\n";
    } else {
        echo "Prueba exitosa: El formato del correo electrónico es válido.\n";
    }

    // Validar longitud de la contraseña
    if (strlen($_POST['password']) < 8) {
        echo "Prueba fallida: Contraseña demasiado corta.\n";
    } else {
        echo "Prueba exitosa: La longitud de la contraseña es válida.\n";
    }

    // Caso de prueba para la validación de $_GET
    $_GET = [
        'id' => '123',
        'action' => 'edit',
    ];

    // Validar ID
    if (!ctype_digit($_GET['id'])) {
        echo "Prueba fallida: El ID no es numérico.\n";
    } else {
        echo "Prueba exitosa: El ID es numérico.\n";
    }

    // Validar acción
    $valid_actions = ['edit', 'delete', 'view'];
    if (!in_array($_GET['action'], $valid_actions)) {
        echo "Prueba fallida: Acción inválida.\n";
    } else {
        echo "Prueba exitosa: La acción es válida.\n";
    }
}

test_input_validation();
