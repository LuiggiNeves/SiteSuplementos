<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sytle/style-produtos.css">
</head>
<body>
    <header>
        <a href="index.php">Voltar</a>
    </header>
    <main>
        <div class="box-products">
        <?php  
            include 'gestao/gestao.php';
            echo $criarProdutos->whey;
            echo $criarProdutos->creatina;
            echo $criarProdutos->bcaa;
            echo $criarProdutos->treino_evora;
            echo $criarProdutos->treino_max;
            echo $criarProdutos->treino_venom;
            echo $criarProdutos->treino_x;
                    
        ?>
        </div>
    </main>
</body>
</html>