<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>Cadastro empresa</title>
</head>
<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #01161e;
}
.container{
    position: relative;
    max-width: 900px;
    width: 100%;
    border-radius: 6px;
    padding: 30px;
    margin: 0 15px;
    background-color: #eff6e0;
    box-shadow: 0 5px 10px rgba(0,0,0,0.1);
}
.container header{
    position: relative;
    font-size: 20px;
    font-weight: 600;
    color: #333;
}
.container header::before{
    content: "";
    position: absolute;
    left: 0;
    bottom: -2px;
    height: 3px;
    width: 27px;
    border-radius: 8px;
    background-color: #124559;
}
.container form{
    position: relative;
    margin-top: 16px;
    min-height: 490px;
    background-color: #eff6e0;
    overflow: hidden;
}
.container form .form{
    position: absolute;
    background-color: #eff6e0;
    transition: 0.3s ease;
}
.container form .form.second{
    opacity: 0;
    pointer-events: none;
    transform: translateX(100%);
}
form.secActive .form.second{
    opacity: 1;
    pointer-events: auto;
    transform: translateX(0);
}
form.secActive .form.first{
    opacity: 0;
    pointer-events: none;
    transform: translateX(-100%);
}
.container form .title{
    display: block;
    margin-bottom: 8px;
    font-size: 16px;
    font-weight: 500;
    margin: 6px 0;

}
.container form .fields{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}
form .fields .input-field{
    display: flex;
    width: calc(100% / 3 - 15px);
    flex-direction: column;
    margin: 4px 0;
}
.input-field label{
    font-size: 12px;
    font-weight: 500;

}
.input-field input, select{
    outline: none;
    font-size: 14px;
    font-weight: 400;
    border-radius: 5px;
    border: 1px solid #aaa;
    padding: 0 15px;
    height: 42px;
    margin: 8px 0;
}
.input-field input :focus,
.input-field select:focus{
    box-shadow: 0 3px 6px ;
}


form button:hover{
    background-color: #01161e;
}
form button i,
form .backBtn i{
    margin: 0 6px;
}
form .backBtn i{
    transform: rotate(180deg);
}
form .buttons{
    display: flex;
    align-items: center;
}
form .buttons button , .backBtn{
    margin-right: 14px;
}

@media (max-width: 750px) {
    .container form{
        overflow-y: scroll;
    }
    .container form::-webkit-scrollbar{
       display: none;
    }
    form .fields .input-field{
        width: calc(100% / 2 - 15px);
    }
}

@media (max-width: 550px) {
    form .fields .input-field{
        width: 100%;
    }
}

.container form .nextBtn {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 45px;
    width: 40%;
    border: none;
    outline: none;
    color: #eff6e0;
    border-radius: 5px;
    margin: 25px 0;
    background-color: #01161e;
    transition: all 0.3s linear;
    cursor: pointer;
    font-size: 14px;
    font-weight: 400;
}

.container form .nextBtn:hover {
    background-color: #01161e;
}

.container form .nextBtn i {
    margin: 0 6px;
}

    .centered-btn {
        display: block;
        margin: 0 auto;
    }

</style>
<body>
    <div class="container">
        <header>Cadastrar</header>

        <form action="cadastro_empresas.php" method="post">
            <div class="form first">
                <div class="details personal">
                    
    
                    <div class="fields">
                        <div class="input-field">
                            <label>Nome Empresa</label>
                            <input type="text" placeholder="Digite o nome" required name="nome">
                        </div>
    
                        <div class="input-field">
                            <label>Função</label>
                            <input type="text" placeholder="Digite sua Função" required name="funcao">
                        </div>
    
                        <div class="input-field">
                            <label>Descriçao</label>
                            <input type="text" placeholder="Digite seu email" required name="descricao">
                        </div>
    
                        <div class="input-field">
                            <label>Requisitos</label>
                            <input type="text" placeholder="Requisitos" required name="requisitos">
                        </div>
    
                        <div class="input-field">
                            <label>Telefone</label>
                            <input type="text" placeholder="Digite o seu Telefone" required name="contato">
                        </div>
    
                        <div class="input-field">
                            <label>CNPJ</label>
                            <input type="text" placeholder="Digite seu CNPJ" required name="cnpj">
                        </div>
                    
                        <div class="input-field">
                            <label>Endereço</label>
                            <input type="text" placeholder="Digite seu Endereço" required name="endereco">
                        </div>

                        <div class="input-field">
                            <label>Carga Horaria</label>
                            <input type="text" placeholder="Digite seu Endereço" required name="horaria">
                        </div>
               
                        <div class="input-field">
                            <label>Faixa Salarial</label>
                            <input type="text" placeholder="Faixa Salarial" required name="faixa_salario">
                        </div>


         

                        <input style=" display: block; margin: 0 auto; margin-top: 50px;" type="submit" class="nextBtn" value="Cadastrar" name="cadatrar">

                </div> 
            </div>
        </form>
    </div>

   
</body>
</html>