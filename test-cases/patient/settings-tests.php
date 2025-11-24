<?php

// Pruebas para settings.php

function test_settings_actions() {
    // Simular datos de entrada
    $_POST = [
        'id' => '123',
        'action' => 'update',
    ];

    // Validar ID
    if (!ctype_digit($_POST['id'])) {
        echo "Prueba fallida: ID no es numérico.\n";
    } else {
        echo "Prueba exitosa: ID es numérico.\n";
    }

    // Validar acción
    $valid_actions = ['update', 'delete'];
    if (!in_array($_POST['action'], $valid_actions)) {
        echo "Prueba fallida: Acción inválida.\n";
    } else {
        echo "Prueba exitosa: Acción válida.\n";
    }
}

test_settings_actions();