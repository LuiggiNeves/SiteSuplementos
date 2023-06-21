<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>
    <link rel="stylesheet" href="sytle/style.css">
</head>
<body>
    <header>
        <nav class="nav_bar">

            <ul class="menu">
                <li><a href="#" id="logo">LOGO</a></li>
                <li>
                    <div class="search-container">
                        <input type="text" name="" id="bar_search" placeholder="Pesquise um produto..." size="20">
                        <button type="submit" onclick="window.location.href = 'mostrar_produtos.php'"><i class="">&#128269;</i></button>
                    </div>
                </li>
                <li><a href="gestao/login.html">Conta</a></li>
                <li><a href="#">Ajuda</a></li>
                <li><a href="#">Contate-nos</a></li>
            </ul>
            <div class="select_div">
                <select class ="select_head">
                    <option value="opcao1">proteínas</option>
                    <option value="opcao2">Opção 2</option>
                    <option value="opcao3">Opção 3</option>
                </select>
               
                <select class ="select_head">
                    <option value="opcao1">Força</option>
                    <option value="opcao2">Opção 2</option>
                    <option value="opcao3">Opção 3</option>
                </select>
             
                <select class ="select_head">
                    <option value="opcao1">Estimulantes</option>
                    <option value="opcao2">Opção 2</option>
                    <option value="opcao3">Opção 3</option>
                </select>

                <select class ="select_head">
                    <option value="opcao1">Emagrecimento</option>
                    <option value="<a href='login.html'>"></option>
                    <option value="opcao3">Opção 3</option>
                </select>

                <select class ="select_head">
                    <option value="opcao1">Acessórios</option>
                    <option value="opcao2">Opção 2</option>
                    <option value="opcao3">Opção 3</option>
                </select>
                
 
            </div>
            
        </nav>
    </header>
    <main>
        <section class="slide">
            <div class="slide-content">
                <input type="radio" name="btn-radio" id="radio1">
                <input type="radio" name="btn-radio" id="radio2">
                <input type="radio" name="btn-radio" id="radio3">

                <div class="slide-box first">
                    <img src="img/img_1.jpg" alt="Foto de Slide">
                </div>

                <div class="slide-box">
                    <img src="img/girl_fitness.jpeg" alt="Foto de Slide">
                </div>

                <div class="slide-box">
                    <img src="img/img_3.jpg" alt="Foto de Slide">
                    
                </div>

                <div class="nav-auto">
                    <div class="auto1"></div>
                    <div class="auto2"></div>
                    <div class="auto3"></div>
                </div>

                <div class="nav-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                   
                </div>
            </div>
        </section>
            <h1 class="cnls">PRODUTOS MAIS SOLICITADOS!!</h1>
            <div class="box-products">
            <?php  
                    include 'gestao/gestao.php';
                    echo $criarProdutos->whey;
                    echo $criarProdutos->creatina;
                    echo $criarProdutos->bcaa;
                    
            ?></div>
            <h1 class="cnls">PRÉ TREINOS</h1>
            <h2 class="cnls">Estimulantes para o melhor treino da sua VIDA!</h2>
            <div class="box-products">
                <?php
                    echo $criarProdutos->treino_evora;
                    echo $criarProdutos->treino_max;
                    echo $criarProdutos->treino_venom;
                    echo $criarProdutos->treino_x;
                ?>
            </div>
            <h1 class="cnls">Está com duvidas qual o suplemento certo para você?</h1>
            <div class="box-info">
                

                <div class="box-massa ">

                    <h1>Massa</h1>

                    <div class="box-sep">
                        <p>Ganho de massa refere-se ao aumento da massa muscular do corpo através do treinamento físico e nutrição adequada.
                            Para construir músculos, é necessário consumir uma dieta rica em proteínas e calorias suficientes para apoiar o 
                            crescimento muscular. HiperCalorico + Creatina</p>
                    </div>
                    
                    
                   
                </div>

                <div class="box-emagrecimento">

                    <h1>Emagrecimento</h1>

                    <div class="box-sep">
                        <p>Emagrecimento refere-se à perda de peso corporal, geralmente alcançada através de uma combinação de dieta saudável
                         e exercício físico regular. Para perder peso, é necessário criar um déficit calórico, o que significa que você 
                        precisa queimar mais calorias do que consome. Termogenicos + Creatina</p>
                    </div>

                    
                   
                </div>
                <div class="box-definicao ">

                    <h1>Definição</h1>

                    <div class="box-sep">

                        <p>Definição muscular é um termo que se refere à aparência de músculos bem definidos e visíveis no corpo. Isso é geralmente
                        alcançado por meio de um programa de treinamento de força e uma dieta saudável e equilibrada, que promove a perda
                        de gordura corporal, enquanto preserva ou mesmo aumenta a massa muscular. WheyProtein</p>

                    </div>
                    
                
                </div>
            </div>

    </main>
    <footer>
        <h2>@Luiggi_Neves</h2>
    </footer>

    <script src="scripts/JavaScript.js"></script>
</body>
</html>
