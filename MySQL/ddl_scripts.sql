

create table if not exists tb_users (

  id int (11) auto_increment primary key,    
  nome   varchar(100) not null , 
  email  varchar(100) not null unique, 
  senha  varchar(100) not null 
)
default charset=utf8;





create table if not exists tb_produtos (

  id int (11) auto_increment primary key,
  
  valor varchar(30) not null , 
  nome  varchar(100) not null , 
  info  varchar(300) not null , 
  hash_file varchar(30) not null , 
  img varchar(30) not null , 
  estoque int(11) not null , 
  producao int(11) not null 
)
default charset=utf8;


alter table tb_produtos change valor valor int(11);

alter table tb_produtos add vendas int(11) after producao;


alter table tb_produtos drop hash_file;

ALTER TABLE tb_produtos
MODIFY COLUMN valor varchar(30) 
AFTER info;

alter table tb_produtos change nome nome varchar(100) unique;

desc tb_produtos;





create table if not exists tb_pedidos (

  id int (11) auto_increment primary key,
  
  carrinho int(11) not null ,
  
  status varchar(30),
  
   
  id_produto int (11),  
  
  
  foreign key (id_produto) references tb_produtos(id)

)
default charset=utf8;














            
            
            
  
       
            

 
