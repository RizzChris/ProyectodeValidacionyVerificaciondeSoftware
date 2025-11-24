<?php

// Pruebas para delete-account.php

function test_delete_account_actions() {
    // Simular datos de entrada
    $_GET = [
        'id' => '456',
    ];

    // Validar ID
    if (!ctype_digit($_GET['id'])) {
        echo "Prueba fallida: ID no es numérico.\n";
    } else {
        echo "Prueba exitosa: ID es numérico.\n";
    }
}

test_delete_account_actions();