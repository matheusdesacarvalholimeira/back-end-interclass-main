<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>All Jobs</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

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
         <a href="about.html">Sobre nós</a>
      </nav>

      <a href="#" class="btn" style="margin-top: 0;">Poste uma Vaga</a>

   </section>

</header>

<!-- header section ends -->

<!-- job filter section stars  -->

<section class="job-filter">

   <h1 class="heading">Filtrar Vagas</h1>

   <form action="" method="post">
      <div class="flex">
         <div class="box">
            <p>Vaga <span>*</span></p>
            <input type="text" name="title" placeholder="Palavra-chave ou categoria"  maxlength="20"  class="input">
         </div>
         <div class="box">
            <p>Localização</p>
            <input type="text" name="location" placeholder="cidade ou estado"  maxlength="50" class="input">
         </div>
      </div>
      <div class="dropdown-container">
         <div class="dropdown">
            <input type="text" readonly placeholder="data postada" name="date" maxlength="20" class="output">
            <div class="lists">
               <p class="items">today</p>
               <p class="items">3 dias atrás</p>
               <p class="items">7 dias atrás</p>
               <p class="items">10 dias atrás</p>
               <p class="items">15 dias atrás</p>
               <p class="items">30 dias atrás</p>
            </div>
         </div>
         <div class="dropdown">
            <input type="text" readonly name="date" placeholder="salário estimado" maxlength="20" class="output">
            <div class="lists">
               <p class="items">200 ou menos</p>
               <p class="items">200 a 500</p>
               <p class="items">500 - 800</p>
               <p class="items">800 - 1000</p>
               <p class="items">1000 - 1200</p>
               <p class="items">1200 - 1500</p>
               <p class="items">1500 - 2000</p>
               <p class="items">2000 - 3000</p>
               
            </div>
         </div>
         <div class="dropdown">
            <input type="text" readonly name="date" placeholder="tipo de vaga" maxlength="20" class="output">
            <div class="lists">
               <p class="items">full-time</p>
               <p class="items">part-time</p>
               <p class="items">intership</p>
               <p class="items">contract</p>
               <p class="items">temperary</p>
               <p class="items">fresher</p>
            </div>
         </div>
         <div class="dropdown">
            <input type="text" readonly name="date" placeholder="nível de educação" maxlength="20" class="output">
            <div class="lists">
               <p class="items">10th pass</p>
               <p class="items">12th pass</p>
               <p class="items">bachlelor's degree</p>
               <p class="items">master's degree</p>
               <p class="items">diploma</p>
            </div>
         </div>
         <div class="dropdown">
            <input type="text" readonly name="date" placeholder="turno" maxlength="20" class="output">
            <div class="lists">
               <p class="items">day shift</p>
               <p class="items">night shift</p>
               <p class="items">flexible shift</p>
               <p class="items">fixed shift</p>
            </div>
         </div>
         <input type="submit" nome="falo" >
      </div>
   </form>

</section>

<!-- job filter section ends -->

<!-- all jobs section starts  -->

<section class="jobs-container">

   <h1 class="heading">all jobs</h1>

   <div class="box-container">

      <?php

include 'conexao.php';

$sql = "SELECT * FROM empresas";

try {
    $stmt = $pdo->query($sql);
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo 'Erro ao ler registros: ' . $e->getMessage();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $title = $_POST['title'];
   $location = $_POST['location'];

   // Construir a consulta SQL com base nos parâmetros de filtro
   $sql = "SELECT * FROM empresas WHERE funcao LIKE '%$title%' AND endereco LIKE '%$location%'";

   try {
       $stmt = $pdo->query($sql);
       $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

   } catch (PDOException $e) {
       echo 'Erro ao ler registros: ' . $e->getMessage();
   }
}
?>



<section class="jobs-container">
    <!-- <h1 class="heading">all jobs</h1> -->

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
</section><br>





<!-- all jobs section ends -->











<!-- footer section starts  -->

<!-- <footer class="footer">

   <div class="credit">&copy; copyright @ 2023 by <span>Team Emprego sem Fronteiras</span> | Todos os direitos reservados!</div>

</footer> -->

<!-- footer section ends -->



<!-- custom js file link  -->
<!-- <script src="js/script.js"></script>

<script>

let dropdown_items = document.querySelectorAll('.job-filter form .dropdown-container .dropdown .lists .items');

dropdown_items.forEach(items =>{
   items.onclick = () =>{
      items_parent = items.parentElement.parentElement;
      let output = items_parent.querySelector('.output');
      output.value = items.innerText;
   }
});

</script>

   
</body>
</html> -->