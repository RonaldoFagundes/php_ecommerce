<?php



require_once './class/DataBase.php' ;
require_once './class/Carrinho.php' ;

require("./lib/vendor/autoload.php");

$carrinho = new \Classes\Carrinho();

 //$listar_produtos = $i->Produtos->listar();
$produtos = new DataBase();
$listar_produtos = $produtos->listarProdutos();
?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="img/header/logo.jpg">
  <title>Home</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <link rel="stylesheet" href="./lib/css/style.css">
 
</head>

<body>


  <header>


    <nav class="navbar navbar-expand-lg navbar-dark" style="height:190px;		       
		       background-color: rgba(255, 255, 223, 0.7) ;
		       background-image: linear-gradient(to top, transparent, rgba(251, 195, 95, 0.9));
               box-shadow: 5px 5px 8px 5px rgba(0, 0, 0, 0.4);
			   ">



     <div class="container-fluid">


        <img src="img/header/logo.jpg" class="img-fluid" alt="Bistrô di totta">

        <a class="navbar-brand" href="#">
          <p class="logo_name">Bistrô di totta</p>
        </a>

      

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"   data-bs-target="#navbarNavDarkDropdown"
          aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown" style="z-index:2;">

          <ul class="navbar-nav">

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDarkDropdownMenuLink" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <span class="menu">Menu</span>
              </a>

              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">

                <li><a class="dropdown-item" href="pages/pudim.html">Pudim</a></li>
                <li><a class="dropdown-item" href="pages/potes.html">Potes</a></li>
                <li><a class="dropdown-item" href="pages/cardapio.html">Cardápio</a></li>
                <li><a class="dropdown-item" href="pages/sobre.html">Sobre nós</a></li>
              </ul>

            </li>

          </ul>

        </div>

      
  

     </div>



    



    <div class="carrinho">



     <div class="card-quantity"> 

        <?php
          if($carrinho->getQuantity() >= 1 ){                 
         ?>  
     
         <div>
           <img src="img/header/shopping-cart-full.png" class="img-carrinho"/>
         </div>

         <div>
           <span>
              <?= $carrinho->getQuantity(); ?>           
           </span>
         </div>
      
      <?php
       }else{
        ?>

         <div>
           <img src="img/header/shopping-cart-empty.png" class="img-carrinho"/>
         </div>
         
         <div>
           <span>
              <?= $carrinho->getQuantity(); ?>           
           </span>
         </div>


       </div>   



      

       

          <!-- <div class="card-empty">
              <a href="controller/carrinhoController.php?action=clear">
                <span> Esvaziar carrinho</span>
              </a>
          </div> -->


        <?php
         }
         ?>
           
    



    </div>




    </nav>

  </header>





  <main>
    
    <div class="intru">
      <p class="line-anime">faça uma degustação com as nossas sobremesas e</p>
      <p class="line-anime">viva uma experiência sensacional...</p>
    </div>

    <div class="pedido">     
      <a href="https://wa.me/5521993067274?text=gostaria%20de%20fazer%20um%20pedido" target="_blank">

        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-whatsapp"
          viewBox="0 0 16 16">
          <path
            d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
        </svg>
      </a>
    </div>   

   <!--  <a href="" class="to-top">
      <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-up-square"
        viewBox="0 0 16 16">
        <path fill-rule="evenodd"
          d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.5 9.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
      </svg>
    </a>
 -->

 <div class="to-top">  
   <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-up-square"
   viewBox="0 0 16 16">
   <path fill-rule="evenodd"
    d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm8.5 9.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
  </svg>
</div>




    <section class="carroucel">

      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>


        <div class="carousel-inner">


          
          <div class="carousel-item active"> 


            
             <p class="carousel-img-text left-one" >Travessa Bombom Aberto </p>
             <p class="carousel-img-text right-one" >Ninho com uvas, chocolate e chantilly</p>       
           

             <picture class="carousel-img-one">   

              <source media="(max-width: 650px)"  
                srcset="img/home-carrocel/bombom_abeto_uva_sm.png">

              <source media="(max-width: 1000px)"
                 srcset="img/home-carrocel/bombom_abeto_uva.png">  

               <img src="img/home-carrocel/bombom_abeto_uva.png"  alt="Banoffee">

             </picture>



           <picture>
              <source media="(max-width: 650px)"  srcset="img/home-carrocel/fundo_one.png">
              <source media="(max-width: 1000px)" srcset="img/home-carrocel/fundo_one.png">
              <img src="img/home-carrocel/fundo_one.png"  class="img-fluid" alt="Banoffee">
           </picture> 

            
            

          </div>






          <div class="carousel-item">  

             <p class="carousel-img-text left-two" >Travessa Bombom Aberto </p>
             <p class="carousel-img-text right-two" >Ninho com morango, chocolate e chantilly</p> 


             <picture class="carousel-img-two">

              <source media="(max-width: 650px)"  
                 srcset="img/home-carrocel/bombom_aberto_morango_sm.png">

              <source media="(max-width: 1000px)" 
                 srcset="img/home-carrocel/bombom_aberto_morango.png">  

               <img src="img/home-carrocel/bombom_aberto_morango.png"  alt="Banoffee">

            </picture>




           <picture>
              <source media="(max-width: 650px)"  srcset="img/home-carrocel/fundo_one.png">
              <source media="(max-width: 1000px)" srcset="img/home-carrocel/fundo_one.png">
              <img src="img/home-carrocel/fundo_one.png"  class="img-fluid" alt="Banoffee">
           </picture> 

          </div>







          <div class="carousel-item">   

           
             <p class="carousel-img-text left-three" >Banoffee bananas in natura</p>
             <p class="carousel-img-text right-three" >Delicia de sabores!!!</p>   



             <picture class="carousel-img-three"> 

              <source media="(max-width: 650px)"  srcset="img/home-carrocel/bannoffee_sm.png">
              <source media="(max-width: 1000px)" srcset="img/home-carrocel/bannoffee.png">
             
               <img src="img/home-carrocel/bannoffee.png"  alt="Banoffee">

             </picture>



           <picture>
              <source media="(max-width: 650px)"  srcset="img/home-carrocel/fundo_two.png">
              <source media="(max-width: 1000px)" srcset="img/home-carrocel/fundo_two.png">
              <img src="img/home-carrocel/fundo_two.png"  class="img-fluid" alt="Banoffee">
           </picture> 

          </div>


        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    </section>

    <div class="intru" data-anime="right">
      <p class="line-anime">deliciosa e inesquecível de</p>
      <p class="line-anime">sabores!!!</p>
    </div>







  <div class="containner-produto">

      <!-- cards -->
  <?php



   if ($listar_produtos) {           
     



    $produto = $listar_produtos->fetch(PDO::FETCH_OBJ);

      
       if ($produto->estoque > $carrinho->getQuantity()){


        while ($produto = $listar_produtos->fetch(PDO::FETCH_OBJ)) {



        






     // while ($produto = $listar_produtos->fetch(PDO::FETCH_OBJ)) {

      
          //   if($produto->qtd >= 2){ 

        //  if( $produto->qtd > $carrinho->getQuantity() ) { 

           
         ?>



      <!-- card one -->
      <div class="card-home" data-anime="left">

        <div class="box-img" data-text="saiba mais">

         <picture>  					 
           <source media="(max-width: 300px)" srcset="img/products-sell/<?=$produto->img;?>_sm.png"> 
           
           <img src="img/products-sell/<?=$produto->img;?>_m.png" alt="pudim">
         </picture> 

        </div>


        <div class="content">  

           <h4>
            <?= $produto->nome;?>
          </h4>   

            <p>              
              <?= $produto->info;?>&#x1F60D;
            </p>

            <p>R$ <?= $produto->valor;?>  </p>

            <div class="btn-buy">
            <!--
             <button type="button" class="btn btn-outline-warning" 
                 href="products/ ">
               Comprar
            </button>
       -->
        
      


              <a type="button" class="btn btn-outline-warning"              
                 href="controller/carrinhoController.php?
                 action=add&
                 img=<?=$produto->img;?>&
                 id=<?=$produto->id;?>&
                 nome=<?=$produto->nome;?>&
                 info=<?=$produto->info;?>&
                 valor=<?=$produto->valor;?>"
                 
                 

                 >Adicionar ao Carrinho
              </a>



              

              
              
                



           </div>

        </div>

       


      </div>





      <?php

        } 
     
      }else {


        ?>

<div class="card-empty-product">

<h2>nenhum produto encontrado<h2>

 <a  type="button" class="btn btn-outline-warning"
       href="controller/carrinhoController.php"
   >Meus Pedidos</a>
</div>
       
   <?php
      }
  

    }
  ?>

 

      
 
      


  

     










       <!-- card two 
      <div class="card-home" data-anime="right">

        <div class="box-img" data-text="saiba mais">
          <picture>  					 
            <source media="(max-width: 300px)" srcset="img/home_abacaxi_sm.png"> 
            <img src="img/home_abacaxi_m.png" alt="delicia de abacaxi">
          </picture> 
        </div>

        <div class="content">       
            <p>
              delicia de abacaxi com coco 
              Mousse com pedaços de abacaxi com uma deliciosa cobertura de doce de coco
              super cremosa! &#x1F60D;
            </p>         
        </div>

      </div>
      -->



        <!-- card two 
      <div class="card-home" data-anime="left">

        <div class="box-img" data-text="saiba mais">
          <picture>  					 
            <source media="(max-width: 300px)" srcset="img/home_bombom_sm.png"> 
            <img src="img/home_bombom_m.png" alt="bombom aberto">
          </picture>
        </div>

        <div class="content">       
            <p>
              Bombom aberto de morango com mousse de Ninho 
              trufado com chocolate branco e ganache de chocolate meio amargo &#x1F60D;
            </p>          
        </div>

      </div>
      -->



       <!-- card two 
      <div class="card-home" data-anime="right">

        <div class="box-img" data-text="saiba mais">

          <picture>  					 
            <source media="(max-width: 300px)" srcset="img/home_banoffee_sm.png">
            <img src="img/home_banoffee_m.png" alt="banoffee">
          </picture> 

        </div>

        <div class="content">      
          <p>
            Nossa Banoffee! Farofinha crocante, mousse de doce de leite, 
            bananas in natura, canela, chantilly e chocolate 50% &#x1F60D;
          </p>          
        </div>

      </div>
       -->







   </div>
    
  </main>





 <footer class="fotter">


  <div class="fotter-main">


    <div class="fotter-security">
       
        <ul>

          <li><p>Site Blindado</p></li>

           <li>
             <img src="img/footer/ssl.png" class="img-ssl"/>
          </li>
         </ul>


         <ul>

          <li><p>Compras Seguras</p></li>

          <li>
            <p>Usamos a tecnologia do mercado pago</p>
            
          </li>

          <li>
          <img src="img/footer/mercado-pago.png" class="img-mp"/>
          </li>

        </ul>          
        
    </div>


    <div class="fotter-time">

        <p>HORÁRIO</p>

        <p>Terça à sexta das 14h às 19h,<br>
            sábado das 9h às 15h.</p>

        <p>entregamos na grande tijuca</p>

       <div>
         <p>Onde estamos</p>
       </div>

      <div class="map">

       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3674.2516941119948!2d-43.25090128503378!3d-22.94095588499439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bd5ff14679921%3A0xef63cbfe145888a0!2sR.%20Pinheiro%20da%20Cunha%2C%2085%20-%20Tijuca%2C%20Rio%20de%20Janeiro%20-%20RJ%2C%2020530-360!5e0!3m2!1spt-BR!2sbr!4v1671760038220!5m2!1spt-BR!2sbr"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
      </iframe>

      </div>

    </div>

    <!-- width="400" height="250" -->


    <div class="fotter-contatos">

      <ul>

        <p>Siga nos</p>

        <li>
          <a href="https://www.instagram.com/bistroditotta" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-instagram"
              viewBox="0 0 16 16">
              <path
                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
            </svg>
          </a>&nbsp;instagram
        </li>

        <p>Contatos</p>
      <li>      
         <a href="https://wa.me/5521993067274?text=gostaria%20de%20fazer%20um%20pedido" target="_blank">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-whatsapp"
              viewBox="0 0 16 16">
              <path
                d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
            </svg>
          </a>&nbsp;Whatsapp    
        </li> 

        
        <li>
          <a href="mailto:bistroditotta@gmail.com" title="email"><svg xmlns="http://www.w3.org/2000/svg" width="20"
              height="20" fill="currentColor" class="bi bi-envelope-open" viewBox="0 0 16 16">
              <path
                d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.818l5.724 3.465L8 8.917l1.276.766L15 6.218V5.4a1 1 0 0 0-.53-.882l-6-3.2zM15 7.388l-4.754 2.877L15 13.117v-5.73zm-.035 6.874L8 10.083l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738zM1 13.117l4.754-2.852L1 7.387v5.73zM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2z" />
            </svg>
          </a>&nbsp;e-mail
        </li>


        <li>
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone"
            viewBox="0 0 16 16">
            <path
              d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
          </svg>
          &nbsp;Telefone
          <p>021-99306-7274</p>
        </li>

        
      </ul>     

    </div>


   </div>


   <div class="fotter-info">

      <div class="footer-mark">
        <p>&copy;Copyright Bistro di Totta 2022 - Todos os direitos reservados</p>       
      </div>
      

      <div class="foot-developer">        
         <a href="https://github.com/RonaldoFagundes" target="_blank"><p>dev RFagundes</p></a>
      </div> 

   </div>



  </footer>







  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous">
  </script>

  <script src="./lib/js/script.js"></script>
</body>
</html>