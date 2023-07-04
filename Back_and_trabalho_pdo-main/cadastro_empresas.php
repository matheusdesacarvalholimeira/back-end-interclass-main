<?php 


include 'conexao_pdo.php';

$filtrar2 = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(!empty($filtrar2['cadatrar'])){

try{
    $sql2 = "insert into empresas (nome,funcao,descricao,requisitos,contato,cnpj,endereco,carga_horaria,faixa_salario) values (:nome,:funcao,:descricao,:requisitos,:contato,:cnpj,:endereco,:horaria,:faixa_salario)";

    $add_usuarios2 = $pdo->prepare($sql2);
    $add_usuarios2->bindParam(':nome', $filtrar2['nome'], PDO::PARAM_STR);
    $add_usuarios2->bindParam(':funcao', $filtrar2['funcao'], PDO::PARAM_STR);
    $add_usuarios2->bindParam(':descricao', $filtrar2['descricao'], PDO::PARAM_STR);
    $add_usuarios2->bindParam(':requisitos', $filtrar2['requisitos'], PDO::PARAM_STR);
    $add_usuarios2->bindParam(':contato', $filtrar2['contato'], PDO::PARAM_STR);
    $add_usuarios2->bindParam(':cnpj', $filtrar2['cnpj'], PDO::PARAM_STR);
    $add_usuarios2->bindParam(':endereco', $filtrar2['endereco'], PDO::PARAM_STR);
    $add_usuarios2->bindParam(':horaria', $filtrar2['horaria'], PDO::PARAM_STR);
    $add_usuarios2->bindParam(':faixa_salario', $filtrar2['faixa_salario'], PDO::PARAM_STR);
    
 
    $add_usuarios2->execute();
    echo 'registro feito';


//nome varchar(255) not null,
//funcao varchar(255) not null,
//descricao varchar(255) not null,
//requisitos varchar(255) not null,
//contato char(15) not null,
//cnpj char(20) not null,
//endereco varchar(255) not null,
//carga_horaria varchar(30),
//faixa_salario varchar(255) not null

}catch(PDOException $e){

        echo 'ouve um erro'. $e->getMessage();

    }

}

?>

<?php
$sql = "SELECT * FROM empresas";

try {
    $stmt = $pdo->query($sql);
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo 'Erro ao ler registros: ' . $e->getMessage();
}
?>

