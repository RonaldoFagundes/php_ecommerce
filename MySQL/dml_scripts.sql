


/* DML */


select * from tb_users ;

select nome from tb_users where email = 'ronaldofagundes@gmail.com' and senha = '25d55ad283aa400af464c76d713c07ad'; 

delete from tb_produtos where id = 7;

select * from tb_produtos;

select * from tb_pedidos;


update tb_produtos set nome = 'Brigadeirão' where id = 2; 


/* add new products*/
insert into 
tb_produtos(id , valor, nome, info, hash_file, img, estoque, producao )
     values(null,'17,00','Copo da Felicidade','Muito bom','44444444','home_copo-felicidade',5,5);
                     
                     
                     
 /* add new products aos pedidos */
insert into tb_pedidos (id,carrinho,status,id_produto) values(null, 0, 'disponivel', 1); 
                     
             
             
             
/* zerar vendas*/
update tb_produtos set vendas = 0  where id = 5 ;  

update tb_produtos set vendas = 0  where id between 1 and 5 ;  
            




/* atulaizar os produtos*/
update tb_produtos 
set nome = 'Bistro di Totta' where id = 1;              

update tb_produtos 
set info = 'Doces Artesanais' where id = 1;         
         
update tb_produtos 
set valor = 20.00 where id = 5;      

update tb_produtos 
set hash_file = '555555' where id =1;

UPDATE tb_produtos 
SET img = 'home_pudim' where id = 1 ; 

update tb_produtos 
set vendas = 0   ;













