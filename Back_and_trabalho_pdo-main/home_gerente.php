<?php 

include_once 'conexao_pdo.php';

$sql = "SELECT * FROM candidatura";
$sql2 = "SELECT * FROM funcionarios";
$sql3 = "SELECT * FROM empresas";

try {
    $stmt = $pdo->query($sql);
    $stmt2 = $pdo->query($sql2);
    $stmt3 = $pdo->query($sql3);
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $resultados2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
    $resultados3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo 'Erro ao ler registros: ' . $e->getMessage();
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link href="https://fonts.google.com/specimen/Archivo+Black" rel="stylesheet">
    <title>Relatório Gerente</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #01161e;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #124559;
            color: #eff6e0;
        }
        body{
          background-color:  #eff6e0 ; 
          font-family: sans-serif;
        }
        a{
            text-decoration: none;
            color: #124559;
        }    

    </style>
</head>
<body>
    <a href="cad_funcionario.php">Cadastrar Um Funcionario |</a>
    <a href="front_cadidatura.php">Fazer uma candidatura</a>
    <h1>Relatório candidaturas</h1>
    <table>
        <thead>
            <tr>
                <th>Nome Completo</th>
                <th>Data de Nascimento</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>CPF</th>
                <th>Formação</th>
                <th>CEP</th>
                <th>Escolaridade</th>

            </tr>
        </thead>
        <tbody>
            <?php
    foreach ($resultados as $row) { 
          echo '<tr>';
             echo '<td>'. $row['nome'].' </td>';
             echo '<td>'. $row['email'].' </td>';
             echo '<td>'. $row['data_nasc'].' </td>';
             echo '<td>'. $row['telefone'].' </td>';
             echo '<td>'. $row['cpf'].' </td>';
             echo '<td>'. $row['escolaridade'].' </td>';
             echo '<td>'. $row['formacao'].' </td>';
             echo '<td>'. $row['cep'].' </td>';
         echo '</tr>';
    }
            ?>
        </tbody>
    </table>

    <h1>Relatório Funcionario</h1>
    <table>
        <thead>
            <tr>
                <th>Nome Completo</th>
                <th>Data de Nascimento</th>
                <th>Email</th>
                <th>Senha</th>
                <th>Cargo</th>

            </tr>
        </thead>
        <tbody>
            
        <?php
    foreach ($resultados2 as $row2) { 
          echo '<tr>';
             echo '<td>'. $row2['nome'].' </td>';
             echo '<td>'. $row2['email'].' </td>';
             echo '<td>'. $row2['data_nasc'].' </td>';
             echo '<td>'. $row2['cargo'].' </td>';
             echo '<td>'. $row2['cpf'].' </td>';
             
         echo '</tr>';
    }
            ?>



        
        </tbody>
    </table>

    <h1>Relatório Empresa</h1>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Função</th>
                <th>Descriçao</th>
                <th>Requisitos</th>
                <th>Contatos</th>
                <th>CNPJ</th>
                <th>Endereço</th>
                <th>Carga Horaria</th>
                <th>Faixa Salarial</th>
            </tr>
        </thead>
        <tbody>
        <?php
    foreach ($resultados3 as $row3) { 
          echo '<tr>';
             echo '<td>'. $row3['nome'].' </td>';
             echo '<td>'. $row3['funcao'].' </td>';
             echo '<td>'. $row3['descricao'].' </td>';
             echo '<td>'. $row3['requisitos'].' </td>';
             echo '<td>'. $row3['contato'].' </td>';
             echo '<td>'. $row3['cnpj'].' </td>';
             echo '<td>'. $row3['endereco'].' </td>';
             echo '<td>'. $row3['carga_horaria'].' </td>';
             echo '<td>'. $row3['faixa_salario'].' </td>';
            echo '</tr>';
            }
            ?>
        </tbody>
    </table>