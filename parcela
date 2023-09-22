<?php 
// Definição da função para gerar parcelas com datas de vencimento
function gerarParcelasComVencimento($valorTotal, $numParcelas, $dataInicial) {
    // Calcula o valor de cada parcela
    $valorParcela = $valorTotal / $numParcelas;
    
    // Cria um objeto DateTime a partir da data inicial
    $dataVencimento = new DateTime($dataInicial);

    // Inicializa um array para armazenar as parcelas
    $parcelas = [];

    // Loop para criar as parcelas
    for ($i = 0; $i < $numParcelas; $i++) {
        // Adiciona 1 mês à data de vencimento
        $dataVencimento->add(new DateInterval('P1M'));
        
        // Clona a data de vencimento para evitar referência ao mesmo objeto
        $dataVencimentoParcela = clone $dataVencimento;
        
        // Formata o valor da parcela para duas casas decimais
        $valorParcelaFormatado = number_format($valorParcela, 2, '.', '');
        
        // Adiciona as informações da parcela ao array de parcelas
        $parcelas[] = [
            'valor' => $valorParcelaFormatado,
            'vencimento' => $dataVencimentoParcela->format('Y-m-d')
        ];
    }

    // Retorna o array de parcelas
    return $parcelas;
}

// Exemplo de uso
$valorTotal = 1000;
$numParcelas = 5;
$dataInicial = '2023-10-01';

$parcelas = gerarParcelasComVencimento($valorTotal, $numParcelas, $dataInicial);

// Loop para imprimir as informações das parcelas
foreach ($parcelas as $indice => $infoParcela) {
    echo "Parcela ", $indice + 1, ": R$ ", $infoParcela['valor'], " - Vencimento: ", $infoParcela['vencimento'], "<br>";
}


?>
