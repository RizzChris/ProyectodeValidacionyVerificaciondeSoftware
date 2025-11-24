<?php

// Pruebas para booking.php

function test_booking_actions() {
    // Simular datos de entrada
    $_GET = [
        'id' => '123',
    ];

    // Validar ID
    if (!ctype_digit($_GET['id'])) {
        echo "Prueba fallida: ID no es numérico.\n";
    } else {
        echo "Prueba exitosa: ID es numérico.\n";
    }
}

test_booking_actions();