<?php 


include 'conexao_pdo.php';

$filtrar2 = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(!empty($filtrar2['Cadastrar'])){

try{
    $sql2 = "insert into funcionarios (nome,email,senha,data_nasc,cargo,cpf) values (:nome,:email,:senha,:data_nasc,:cargo,:cpf)";
    $sql3 = "insert into usuario (nome,email,senha) values (:nome,:email,:senha)";
   
    $parn = '';

    $add_usuarios2 = $pdo->prepare($sql2);
    $add_usuarios3 = $pdo->prepare($sql3);
    $add_usuarios3->bindParam(':nome', $filtrar2['nome'], PDO::PARAM_STR);
    $add_usuarios3->bindParam(':email', $filtrar2['email'], PDO::PARAM_STR);
    $add_usuarios3->bindParam(':senha', $parn, PDO::PARAM_STR);
    $parn = '';
    $add_usuarios2->bindParam(':nome', $filtrar2['nome'], PDO::PARAM_STR);
    $add_usuarios2->bindParam(':email', $filtrar2['email'], PDO::PARAM_STR);
    $add_usuarios2->bindParam(':senha', $parn, PDO::PARAM_STR);
    $add_usuarios2->bindParam(':data_nasc', $filtrar2['requisitos'], PDO::PARAM_STR);
    $add_usuarios2->bindParam(':cargo', $filtrar2['contato'], PDO::PARAM_STR);
    $add_usuarios2->bindParam(':cpf', $filtrar2['cpf'], PDO::PARAM_STR);


    echo $filtrar2['nome'];


    if($filtrar2['contato']=='gerente'){
        $parn = '1234321';
    }elseif($filtrar2['contato']=='funcionario'){
        $parn = '3456543';
    }
   
    //nome varchar(255) ,
    //email varchar(255) ,
    //senha varchar(100) 
    
    $add_usuarios3->execute();
    $add_usuarios2->execute();
    echo 'registro feito';

}catch(PDOException $e){

        echo 'ouve um erro'. $e->getMessage();

    }

}

?>