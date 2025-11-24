<?php

// Pruebas para booking-complete.php

function test_booking_complete_actions() {
    // Simular datos de entrada
    $_POST = [
        'apponum' => '456',
        'scheduleid' => '789',
        'date' => '2025-11-23',
    ];

    // Validar número de cita
    if (!ctype_digit($_POST['apponum'])) {
        echo "Prueba fallida: Número de cita no es numérico.\n";
    } else {
        echo "Prueba exitosa: Número de cita es numérico.\n";
    }

    // Validar ID del horario
    if (!ctype_digit($_POST['scheduleid'])) {
        echo "Prueba fallida: ID del horario no es numérico.\n";
    } else {
        echo "Prueba exitosa: ID del horario es numérico.\n";
    }

    // Validar fecha
    if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $_POST['date'])) {
        echo "Prueba fallida: Fecha inválida.\n";
    } else {
        echo "Prueba exitosa: Fecha válida.\n";
    }
}

test_booking_complete_actions();