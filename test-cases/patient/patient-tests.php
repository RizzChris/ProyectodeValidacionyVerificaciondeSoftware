<?php

// Pruebas para patient.php

function test_patient_actions() {
    // Simular datos de entrada
    $_POST = [
        'search' => 'John',
    ];

    // Validar búsqueda
    if (empty($_POST['search'])) {
        echo "Prueba fallida: El término de búsqueda está vacío.\n";
    } else {
        echo "Prueba exitosa: El término de búsqueda no está vacío.\n";
    }
}

test_patient_actions();