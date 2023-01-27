<?php

//header("location:../pages/checkout.php");

//var_dump($_GET);

require_once '../class/Carrinho.php';
require_once '../class/Produtos.php';
require("../lib/vendor/autoload.php");



$carrinho = new \Classes\Carrinho();


if ($_GET['action']=='add'){

   $produto = new \Classes\Produtos(
      $_GET['img'],
      $_GET['id'],
      $_GET['nome'],
      $_GET['info'],
      $_GET['preco'],
     // $_GET['qtd']
   );

  $carrinho->addProdutos($produto);
}

elseif($_GET['action']=='clear'){
   
   $carrinho->clearProdutos(); 
   $carrinho->removeProducts();
}


elseif($_GET['action']=='pay'){
   $carrinho->clearProdutos();
   $carrinho->finishShop();
   $carrinho->removeProducts();
}



//var_dump($_SESSION);

header("location:../pages/checkout.php");