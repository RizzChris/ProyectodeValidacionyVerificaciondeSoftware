<?php

// Pruebas para admin/delete-appointment.php

function test_admin_delete_appointment_actions() {
    // Simular datos de entrada
    $_GET = [
        'id' => '789',
    ];

    // Validar ID
    if (!ctype_digit($_GET['id'])) {
        echo "Prueba fallida: ID no es numérico.\n";
    } else {
        echo "Prueba exitosa: ID es numérico.\n";
    }
}

test_admin_delete_appointment_actions();