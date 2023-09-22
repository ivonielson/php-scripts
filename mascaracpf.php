<?php

function mascararCPF($cpf) {
    // Remove qualquer caractere que não seja número
    $cpf = preg_replace("/\D/", "", $cpf);

    // Verifica se o CPF possui 11 dígitos
    if (strlen($cpf) !== 11) {
        return "CPF inválido";
    }

    // Aplica a máscara
    $cpfMascarado = substr($cpf, 0, 3) . '.***.***-' . substr($cpf, -2);

    return $cpfMascarado;
}

$cpfOriginal = "12345678901";
$cpfMascarado = mascararCPF($cpfOriginal);

echo $cpfMascarado;

?>
