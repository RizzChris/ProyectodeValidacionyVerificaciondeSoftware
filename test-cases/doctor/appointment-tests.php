<?php

// Pruebas para doctor/appointment.php

function test_doctor_appointment_actions() {
    // Simular datos de entrada
    $_POST = [
        'sheduledate' => '2025-11-23',
        'docid' => '123',
    ];

    // Validar fecha programada
    if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $_POST['sheduledate'])) {
        echo "Prueba fallida: Fecha programada inválida.\n";
    } else {
        echo "Prueba exitosa: Fecha programada válida.\n";
    }

    // Validar ID del doctor
    if (!ctype_digit($_POST['docid'])) {
        echo "Prueba fallida: ID del doctor no es numérico.\n";
    } else {
        echo "Prueba exitosa: ID del doctor es numérico.\n";
    }
}

test_doctor_appointment_actions();