<?php

// Pruebas para admin/add-new.php

function test_admin_add_new_actions() {
    // Simular datos de entrada
    $_POST = [
        'name' => 'John Doe',
        'email' => 'john.doe@example.com',
        'password' => 'password123',
    ];

    // Validar nombre
    if (!preg_match('/^[a-zA-Z ]+$/', $_POST['name'])) {
        echo "Prueba fallida: Formato de nombre inválido.\n";
    } else {
        echo "Prueba exitosa: Formato de nombre válido.\n";
    }

    // Validar correo electrónico
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo "Prueba fallida: Formato de correo electrónico inválido.\n";
    } else {
        echo "Prueba exitosa: Formato de correo electrónico válido.\n";
    }

    // Validar contraseña
    if (strlen($_POST['password']) < 8) {
        echo "Prueba fallida: Contraseña demasiado corta.\n";
    } else {
        echo "Prueba exitosa: Contraseña válida.\n";
    }
}

test_admin_add_new_actions();