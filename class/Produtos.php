<?php

  namespace Classes;



  
  class Produtos 
{

   private $img;
   private $id;
   private $nome;
   private $info;
   private $valor;
   //private $qtd;

   public function __construct($img ,$id, $nome, $info, $valor)
   {
      $this->setImg($img);
      $this->setId($id);
      $this->setNome($nome);
      $this->setInfo($info);
      $this->setValor($valor);
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



public function setValor($valor):void{
    $this->valor = $valor;
 }

 public function getValor(){
  return $this->valor;
}



/*
public function setQtd($qtd):void{
   $this->qtd = $qtd;
}


public function getQtd(){
   return $this->qtd;
}
*/



}
