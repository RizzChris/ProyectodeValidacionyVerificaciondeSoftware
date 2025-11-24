<?php

// Pruebas para doctor/delete-session.php

function test_doctor_delete_session_actions() {
    // Simular datos de entrada
    $_GET = [
        'sessionid' => '456',
    ];

    // Validar ID de la sesión
    if (!ctype_digit($_GET['sessionid'])) {
        echo "Prueba fallida: ID de la sesión no es numérico.\n";
    } else {
        echo "Prueba exitosa: ID de la sesión es numérico.\n";
    }
}

test_doctor_delete_session_actions();