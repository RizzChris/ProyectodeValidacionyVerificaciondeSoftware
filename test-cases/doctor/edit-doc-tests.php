<?php

// Pruebas para doctor/edit-doc.php

function test_doctor_edit_doc_actions() {
    // Simular datos de entrada
    $_POST = [
        'name' => 'Dr. Jane Doe',
        'email' => 'jane.doe@example.com',
    ];

    // Validar nombre
    if (!preg_match('/^[a-zA-Z .]+$/', $_POST['name'])) {
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
}

test_doctor_edit_doc_actions();