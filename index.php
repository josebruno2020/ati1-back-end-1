<?php
include('array.php');
$title = 'Atividade 01 - Back End I';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title><?=$title;?> </title>
</head>
<body>
    <h1 class="text-center"><?=$title;?></h1>
    <h4 class="text-center subtitle">José Bruno Campanholi dos Santos</h4>
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th>Colaborador</th>
                <th>Salário Fixo</th>
                <th>Venda Semana 1</th>
                <th>Venda Semana 2</th>
                <th>Venda Semana 3</th>
                <th>Venda Semana 4</th>
                <th class="resultado">Total Vendas</th>
                <th class="resultado">Comissão</th>
                <th class="resultado">Salário Final</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($colaboradores as $colaborador): ?>
                <?php $totalVendas = (floatval($colaborador['venda_semana1']) + floatval($colaborador['venda_semana2']) + floatval($colaborador['venda_semana3']) + floatval($colaborador['venda_semana4']));?>
                <?php $comissao = (floatval($totalVendas) * 5) / 100; ?>
                <?php $salarioFinal = floatval($totalVendas) + floatval($comissao); ?>
                <tr>
                    <td><?=$colaborador['colaborador'];?></td>
                    <td>R$ <?=number_format(floatval($colaborador['salario_fixo']), 2, ',', '.') ;?></td>
                    <td>R$ <?=number_format(floatval($colaborador['venda_semana1']), 2, ',', '.') ;?></td>
                    <td>R$ <?=number_format(floatval($colaborador['venda_semana2']), 2, ',', '.') ;?></td>
                    <td>R$ <?=number_format(floatval($colaborador['venda_semana3']), 2, ',', '.') ;?></td>
                    <td>R$ <?=number_format(floatval($colaborador['venda_semana4']), 2, ',', '.') ;?></td>
                    <td class="resultado">R$ <?=number_format(floatval($totalVendas), 2, ',', '.') ;?></td>
                    <td class="resultado">R$ <?=number_format(floatval($comissao), 2, ',', '.') ;?></td>
                    <td class="resultado">R$ <?=number_format(floatval($salarioFinal), 2, ',', '.') ;?></td>
                </tr>
            <?php endforeach;?>
        </tbody>    
    </table>
</body>
</html>