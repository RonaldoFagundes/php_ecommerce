<?php




namespace  Classes;



require_once 'DataBase.php' ;
use DataBase;  








  class Carrinho 
  {


    
     public function __construct()
     {
       session_start();
     }





     public function addProdutos(Produtos $produto)
     {

      



      if (isset ($_SESSION['addprodutos'])  && array_key_exists ($produto->getId(),
      $_SESSION['addprodutos']) ) {

        $_SESSION['addprodutos'][$produto->getId()]['quantity']+=1;

          $this->addProducts($produto);

      }else{


        $_SESSION['addprodutos'][$produto->getId()]=[
          'img'=>$produto->getImg(),
          'id'=>$produto->getId(),
          'nome'=>$produto->getNome(),
          'info'=>$produto->getInfo(),
          'preco'=>number_format($produto->getValor(),2),
         // 'valor'=>$produto->getValor(),
         // 'qtd'=>$produto->getQtd(),
          'quantity'=>1
       
         ];
          
         $this->addProducts($produto);
      }
     

      
     }














     public function clearProdutos()
     {
        unset($_SESSION['addprodutos']);
      }







     public function getQuantity()
     {
        $quantity=0;
        if (isset ($_SESSION['addprodutos'])){
            foreach($_SESSION['addprodutos'] as $produto){
               $quantity+=$produto['quantity'];
            }
        }
        return $quantity;
     }








    /*  public function getQuantityByProduct()
     {
       
       $quantity=0;


       if(isset($_SESSION['addprodutos'])){ 

        foreach($_SESSION['addprodutos'] as $produto ){
          $quantity =$produto['quantity'];
          }
       }
        return $quantity;

       
     } */




    
     
     




     public function addProducts(Produtos $produto){

      $dataBase = new DataBase ;   

      $status = 'pendente';

       $quantidade=0;

        $id = $produto->getId();

       //   $quantidade = $this->getQuantityByProduct();
       //   $quantidade  = $this->getQuantity()  ;

        if(isset($_SESSION['addprodutos'])){ 

        foreach($_SESSION['addprodutos'] as $produto ){
          $quantidade =$produto['quantity'];
        }

      }
        
      $dataBase->addShopCar($id, $quantidade, $status);
     }





     public function removeProducts(){

      $dataBase = new DataBase ;       
      $status = 'disponivel';

      $dataBase->emptyShopCar(0,$status);
     // $dataBase->cancelSell(false);
      }


      


     public function  finishShop(){

     // end($_SESSION['addprodutos']);
      $dataBase = new DataBase ;
      
      $newStatus = 'pagando';
      $oldStatus ='pendente';

      $dataBase->finishRequest($newStatus, $oldStatus);
     } 
    





      /* <img src="img/products-sell/<?=$produto->img;?>_m.png" alt="pudim">*/


       public function listProdutos()
       {
           $html="";


         if(isset($_SESSION['addprodutos'])){
           
           foreach($_SESSION['addprodutos'] as $produto){

               $html.="<tr>";


                 $html.="<td>
                         <img src='../img/products-sell/".$produto['img']."_m.png'
                          width='100px'
                         >                         
                         </td>";


                /*  $html.="<td>".$produto['img']."</td>"; */
                 $html.="<td>".$produto['id']."</td>";
                 $html.="<td>".$produto['nome']."</td>";
                 $html.="<td>".$produto['info']."</td>";                 
                 $html.="<td>".number_format($produto['preco'],2)."</td>";
                // $html.="<td>".$produto['valor']."</td>";
               //  $html.="<td>".$produto['quantity']*$produto['valor']."</td>";
                 $html.="<td>".$produto['quantity']."</td>";

                 
               $html.="</tr>";
           }

         } 
           return $html;
       }












       public function getTotal()
       {
         $total=0;
 
        if(isset($_SESSION['addprodutos'])){ 

          foreach($_SESSION['addprodutos'] as $produto ){
            $total+=$produto['quantity']*$produto['valor'];
          }

        }

          return $total;
       }



   
  }