<?php 

include_once "../conexao_pdo.php";

$sql = "SELECT * FROM empresas";

try {
    $stmt = $pdo->query($sql);
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo 'Erro ao ler registros: ' . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section starts  -->

<header class="header">

   <section class="flex">

      <div id="menu-btn" class="fas fa-bars-staggered"></div>

      <a href="home.html" class="logo"><i class="fas fa-briefcase"></i> Emprego sem fronteiras</a>

      <nav class="navbar">
         <a href="home.html">home</a>
         <a href="jobs.html">Vagas</a>
         <a href="about.html">Nossa equipe</a>
      </nav>

      <a href="./front_cadastro_emresas.php" class="btn" style="margin-top: 0;">Publique uma Vaga</a>

   </section>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<div class="home-container">

   <section class="home">

      <form action="" method="post">
         <h3>Encontre seu emprego</h3>
         <p>Cargo <span>*</span></p>
         <input type="text" name="title" placeholder="Palavra-chave ou categoria" required maxlength="20" class="input">
         <p>Localização</p>
         <input type="text" name="location" placeholder="cidade ou estado" required maxlength="50" class="input">
         <input type="submit" value="Buscar" name="search" class="btn">
      </form>

   </section>

</div>

<!-- home section ends -->

<!-- category section starts  -->



<!-- category section ends -->

<!-- jobs section starts  -->

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

<!-- jobs section ends -->










<!-- footer section starts  -->

<footer class="footer">

   <div class="credit">&copy; copyright @ 2023 by <span>Team Emprego sem Fronteiras</span> | Todos os direitos reservados!</div>

</footer>

<!-- footer section ends -->



<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>