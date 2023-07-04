<?php
include 'conexao.php';

$filtrar2 = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (!empty($filtrar2['cadastro'])) {
    try {
        $sql2 = "INSERT INTO empresas(nome, funcao, descricao, requisitos, contato, cnpj, endereco, faixa_salario, carga) VALUES (:nome, :funcao, :descricao, :requisitos, :contato, :cnpj, :endereco, :faixa_salario, :carga)";

        $add_usuarios2 = $pdo->prepare($sql2);
        $add_usuarios2->bindParam(':nome', $filtrar2['nome'], PDO::PARAM_STR);
        $add_usuarios2->bindParam(':funcao', $filtrar2['funcao'], PDO::PARAM_STR);
        $add_usuarios2->bindParam(':descricao', $filtrar2['descricao'], PDO::PARAM_STR);
        $add_usuarios2->bindParam(':requisitos', $filtrar2['requisitos'], PDO::PARAM_STR);
        $add_usuarios2->bindParam(':contato', $filtrar2['contato'], PDO::PARAM_STR);
        $add_usuarios2->bindParam(':cnpj', $filtrar2['cnpj'], PDO::PARAM_STR);
        $add_usuarios2->bindParam(':endereco', $filtrar2['endereco'], PDO::PARAM_STR);
        $add_usuarios2->bindParam(':faixa_salario', $filtrar2['faixa_salario'], PDO::PARAM_STR);
        $add_usuarios2->bindParam(':carga', $filtrar2['carga'], PDO::PARAM_STR);

        $add_usuarios2->execute();
        //echo 'registro feito';
    } catch (PDOException $e) {
        echo 'houve um erro: ' . $e->getMessage();
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



<link rel="stylesheet" href="style.css">
<section class="jobs-container">
    <h1 class="heading">all jobs</h1>

    <div class="box-container">

        <?php
        foreach ($resultados as $row) {
            echo '<div class="box">';
            echo '<div class="company">';
            echo '<img src="images/icon-1.png" alt="">';
            echo '<div>';
            echo '<h3>' . $row['nome'] . '</h3>';
            echo '<p>2 days ago</p>';
            echo '</div>';
            echo '</div>';
            echo '<h3 class="job-title">' . $row['funcao'] . '</h3>';
            echo '<p class="location"><i class="fas fa-map-marker-alt"></i> <span>' . $row['endereco'] . '</span></p>';
            echo '<div class="tags">';
            echo '<p><i class="fas fa-indian-rupee-sign"></i> <span>' . $row['faixa_salario'] . '</span></p>';
            echo '<p><i class="fas fa-briefcase"></i> <span>' . $row['carga'] . '</span></p>';
            echo '<p><i class="fas fa-clock"></i> <span>day shift</span></p>';
            echo '</div>';
            echo '<div class="flex-btn">';
            echo '<a href="view_job.html" class="btn">view details</a>';
            echo '<button type="submit" class="far fa-heart" name="save"></button>';
            echo '</div>';
            echo '</div>';
        }
        ?>

    </div>
</section>
