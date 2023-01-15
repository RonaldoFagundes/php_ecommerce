



/*

 testes :

select * from tb_produtos;

select * from tb_pedidos;


update tb_pedidos set carrinho = 2 , status = 'pendente' where id_produto = 5;

update tb_pedidos set carrinho = 0 , status = 'disponivel' ;

update tb_pedidos set  status = 'pagando' where status = 'pendente';
*/






/* drop trigger g_pedidos ; */




delimiter $$
  create trigger g_pedidos after update on
  tb_pedidos for each row 
  begin
  
  declare qtd_producao int(11);
  declare qtd_estoque int(11);
  declare qtd_carrinho int(11);
  declare status_ped varchar(30);
    
  
   select producao into qtd_producao from tb_produtos where id = new.id_produto ;
   
   select estoque  into qtd_estoque  from tb_produtos  where id = new.id_produto ;
   
   select carrinho into qtd_carrinho from tb_pedidos where id_produto = new.id_produto;
   
   select status   into status_ped from tb_pedidos where id_produto = new.id_produto;
   
   
   
   
         if(status_ped = 'pendente')then
         
         
             set qtd_estoque = qtd_producao - qtd_carrinho;  
                     
            update tb_produtos set estoque = qtd_estoque where id = new.id_produto;  
         
         
         
           elseif (status_ped = 'disponivel')then
         
            /*  update tb_produtos set estoque = qtd_producao where qtd_estoque < qtd_producao ; */
              
               update tb_produtos set estoque = qtd_producao where id in(new.id_produto) ;
              
              
            elseif (status_ped = 'pagando')then
         
                 update tb_produtos set vendas = vendas + qtd_carrinho where id in(new.id_produto) ;
                     
                                 
         end if;
   
   
end;
$$ delimiter ;





 