<?php

  namespace Classes;



  
  class Produtos 
{

   private $img;
   private $id;
   private $nome;
   private $info;
   private $preco;
   //private $qtd;

   public function __construct($img ,$id, $nome, $info, $preco)
   {
      $this->setImg($img);
      $this->setId($id);
      $this->setNome($nome);
      $this->setInfo($info);
      $this->setPreco($preco);
    //  $this->setQtd($qtd);
   }


  public function setImg($img):void{
     $this->img = $img;
  }


  public function getImg (){
     return $this->img;
  }  


   public function setId($id):void{
      $this->id = $id;
   }

   public function getId(){
    return $this->id;
  }



  public function setNome($nome):void{
    $this->nome = $nome;
 }

 public function getNome(){
  return $this->nome;
}




  public function setInfo($info):void{
    $this->info = $info;
 }
 public function getInfo(){
  return $this->info;
}



public function setPreco($preco):void{
    $this->valor = $valor;
 }

 public function getPreco(){
  return $this->preco;
}







}
