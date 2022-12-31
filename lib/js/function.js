/* function log(){

    var email = document.querySelector("#email").value;

    console.log(email)
} */



function logi(){

  // var email = document.querySelector("#email").value;
  //  var password = document.querySelector("#password").value;
 
    var email = $("#email").val();
    var password = $("#password").val();
    
    $.post(`control/login.php`,{email:email,password:password},function(data){
         console.log(data);
    });
 
        
 }
 