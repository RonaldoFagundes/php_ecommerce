/*
const toTop = document.querySelector(".to-top");

 window.addEventListener("scroll",()=>{
	if(window.pageYOffset>300){
		toTop.classList.add("active");
	}else{
		toTop.classList.remove("active");
	}
	
}); */







let iconWhatsapp = document.querySelector(".pedido");


  shakeWhatsapp=()=>{
 
   if(!iconWhatsapp.classList.contains("animateRock")){
     
      iconWhatsapp.classList.add("animateRock"); 

     }else{

      iconWhatsapp.classList.remove("animateRock"); 
   }

 }
 
 setInterval(shakeWhatsapp,3000)







let btn_top = document.querySelector(".to-top");


window.addEventListener("scroll",scrollFunction);
      
    function scrollFunction () {

        if(window.pageYOffset > 300){

           if(!btn_top.classList.contains("topEntrance")){
                             
               btn_top.classList.remove("topExit"); 
               btn_top.classList.add("topEntrance");  
               btn_top.style.display="flex";
               
                }

           
        }else{

         if(btn_top.classList.contains("topEntrance")){
            btn_top.classList.remove("topEntrance"); 
            btn_top.classList.add("topExit"); 
            setTimeout(()=>{
               btn_top.style.display="none";
            },250);
             

          }

        }
        
     }

  
   btn_top.addEventListener("click",backToTop);

    function backToTop(){
         window.scrollTo(0,0);
    }
  





    









const debounce  = function (func,wait,immediate){
 let timeout;
 return function(...args){
      const context = this;
      const later = function(){
           timeout = null;
           if(!immediate)func.apply(context,args);           
      };
      const callNow = immediate && !timeout;
      clearTimeout(timeout) ;
      timeout = setTimeout(later,wait);
       if(callNow)func.apply(context,args);
 };
};











   
   





const target = document.querySelectorAll('[data-anime]');
const animationClass = 'animate';






 animeScroll=()=>{

    const windowTop = window.pageYOffset +((window.innerHeight*3/4));


     target.forEach(function(element){

          if( (windowTop) > element.offsetTop ){
             element.classList.add(animationClass);             
          }else{
             element.classList.remove(animationClass); 
          }
     })
}


animeScroll();

if(target.length){
window.addEventListener('scroll',debounce(function(){
     animeScroll();
},200));
}















window.sr = ScrollReveal({reset:true});

sr.reveal('.text-1', {duration:2000});

sr.reveal('.text-2', {
	
	rotate:{x:100, y:80, z:0},
	duration:2000	
	
	});
	
	
sr.reveal('.text-3', {
	
	rotate:{x:100, y:80, z:0},
	duration:2000	
	
	});	







/*
function login(){     
    
       var email = $("#email").val();
       var password = $("#password").val();
       
       $.post(`control/login.php`,{email:email,password:password},function(data){
            console.log(data);
       });    
           
    }



function create(){
  var email    = $("#email_criar").val();
  var whatsapp = $("#whatsapp_criar").val();
  var password = $("#password_criar").val();

  $.post(`control/create.php`,{email:email,whatsapp:whatsapp,password:password},function(data){
      var obj = JSON.parse(data);

       if(obj.erro){
          alert(obj.msg);   
 
           if(obj.create ==1 ){
             $("#email_criar").val('');
             $("#whatsapp_criar").val(''); 
             $("#password_criar").val(''); 
           }

       }else{
           $.post(`control/load.php`,{load:true},function(data){
              if(data==1){
                location.reload();
              }else{
                 alert('Ocorreu um erro,faça login!');
              }
           });
       }

  });

}    





 function create_pedido(){
   $.post(`control/create_request.php`, {create:true} , function(data){
      console.log(data);
   });
}
*/






