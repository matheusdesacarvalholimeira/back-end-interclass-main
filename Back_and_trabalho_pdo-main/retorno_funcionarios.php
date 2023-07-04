<?php 

include_once 'conexao_pdo.php';

$sql3 = "SELECT * FROM funcionarios";

try {
    $stmt3 = $pdo->query($sql3);
    $resultados3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);
echo '<div class="container">';
    foreach ($resultados3 as $row) {
        //aqui
        
        echo '<div>'. $row['nome'] .'</div><br><hr>';
    }
echo '</div>';    
} catch (PDOException $e) {
    echo 'Erro ao ler registros: ' . $e->getMessage();
}

//id_usuario int primary key auto_increment,
//nome varchar(255) ,
//email varchar(255) ,
//senha varchar(100),
//data_nasc date, 
//cargo varchar(50),
//cpf char(11) 

?>
<style>
    .container{
        
        align-items: center;
        justify-content: center;
        
    }

    div{
        background-color: aqua;
        text-align: center;
        margin-bottom: 30px;
        
    }
</style>






