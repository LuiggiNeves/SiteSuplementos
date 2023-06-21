<?php

class produtos {
    
    public function base_produto($img, $preco, $desc) {
        return "<div class='product'> 
            <img src=\"$img\">
            <h1>título</h1>  
            <p>$desc</p>
            &#x2b50; &#x2b50; &#x2b50; &#x2b50; &#x2b50;
            <p id=p_preco>R$ $preco</p>
            <br><input type=\"button\" value=\"Comprar\">
            <input type=\"button\" value=\"Carrinho\">
        </div>";
    }

}

class CriarProdutos extends produtos {
    public $whey;
    public $creatina;
    public $bcaa;
    public $treino_max;
    public $treino_x;
    public $treino_venom;
    public $treino_evora;

    public function __construct() {
        $this->whey = $this->base_produto("img/produtos/whey.png", "120,00", "Whey de 900g");
        $this->creatina = $this->base_produto("img/produtos/creatina.png", "250,00", "Creatina de 300g");
        $this->bcaa = $this->base_produto("img/produtos/bcaa.png", "80,00", "BCAA de 120 comprimidos");
        $this->treino_max = $this->base_produto("img/produtos/pre-treino-max.png", "300,00", "Pré-Treino com foco <br> <strong>Neural</strong>");
        $this->treino_x = $this->base_produto("img/produtos/pre-treino-x.png", "150,00", "Pré-Treino com foco \nno PUMP MUSCULAR");
        $this->treino_venom = $this->base_produto("img/produtos/pre-treino-venom.png", "350,00", "Pré-Treino com foco \nno PUMP MUSCULAR");
        $this->treino_evora = $this->base_produto("img/produtos/pre-treino-evora.png", "100,00", "Pré treino com foco no preço e <br> <strong>Qualidade</strong>");
    }
}

$criarProdutos = new CriarProdutos();
//echo $criarProdutos->PRODUTO;

?>
