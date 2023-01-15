<?php





require_once 'Conn.php' ;


class DataBase extends Conn
{


 
   
  private $conn = "";
  private $pdo = "";


   function __construct()
    {
       
       $this->conn = new Conn();
       $this->pdo  =$this->conn->pdo();   
    }












public function listarProdutos()
{       
  
  $query = $this->pdo->query("SELECT * FROM `tb_produtos` ");
   $fetch = $query->fetchAll(PDO::FETCH_OBJ);
   
     if(count ($fetch) >0 ){
      $query = $this->pdo->query("SELECT * FROM `tb_produtos` ");
      return $query;
     }else{
      return false;
     } 

}






public function addShopCar($id , $quantidade, $status)
{
    /* 
   $query = $this->pdo->prepare("UPDATE `tb_produtos` SET carrinho= :quantidade WHERE id= :id ");
    */

   $query = $this->pdo->prepare("UPDATE `tb_pedidos` SET carrinho= :quantidade , status= :status   
   WHERE id_produto= :id ");


   $query->bindValue(':id', $id);
   $query->bindValue(':quantidade', $quantidade);
   $query->bindValue(':status', $status);
   $query->execute();

}





public function emptyShopCar($quantidade, $status)
{
  // $query = $this->pdo->prepare("UPDATE `tb_produtos` SET carrinho= :quantidade "); 
  
  $query = $this->pdo->prepare("UPDATE `tb_pedidos` SET carrinho= :quantidade , status= :status ");

   $query->bindValue(':quantidade', $quantidade);
   $query->bindValue(':status', $status);
   $query->execute();

}



 public function finishRequest($newStatus, $oldStatus)
{

 $query = $this->pdo->prepare("UPDATE `tb_pedidos` SET status= :newStatus 
 WHERE status= :oldStatus "); 

 $query->bindValue(':newStatus', $newStatus);
 $query->bindValue(':oldStatus', $oldStatus);
 $query->execute();
}



/*
public function cancelSell($cancel)
{
 $query = $this->pdo->prepare("UPDATE `tb_produtos` SET vendas=:cancel ");
 $query->bindValue(':cancel',$cancel);
 $query->execute();
}
*/










/*
public function getProdutoById($id)
{
$query = $this->pdo->prepare("SELECT * FROM `produtos`  WHERE id= :id   ");
$query->bindValue(':id', $id);   

     if($query->execute()){
      
      $query = $this->pdo->query("SELECT * FROM `produtos`  WHERE id= '$id' ");
      $fetch = $query->fetch(PDO::FETCH_OBJ);
       return $fetch;
     }else{
        return false;
     }


}








public function insert($request){

     $query = $this->pdo->prepare(" INSERT INTO `pedidos`
             (iduser, produto, valor ,referency, status, data, hash )
      VALUES( :iduser, :produto, :valor , :referency, :status, :data, :hash) ");


        if ($query->execute($request)) {
            return true;
        }else{
            return  false;
        }

}
*/





}