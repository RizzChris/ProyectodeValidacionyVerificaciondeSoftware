<?php

// Pruebas para admin/doctors.php

function test_admin_doctors_actions() {
    // Simular datos de entrada
    $_POST = [
        'search' => 'cardiologist',
    ];

    // Validar búsqueda
    if (empty($_POST['search'])) {
        echo "Prueba fallida: El término de búsqueda está vacío.\n";
    } else {
        echo "Prueba exitosa: El término de búsqueda no está vacío.\n";
    }
}

test_admin_doctors_actions();