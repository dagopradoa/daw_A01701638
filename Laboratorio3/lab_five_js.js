function validar(){
    
    let str = "<p>";
    let pwd1 = document.getElementById("psw1").value;
    let pwd2 = document.getElementById("psw2").value;
    let aux = 0;
    for (i=0;i<pwd1.length;i++){
      
        if (pwd1[i]==pwd2[i]){
           
        }else{
            
            aux++;
        }
    }
    
    if(aux==0){
        str += "La contraseña es valida</p>";
    }else{
        str += "La contraseña es inválida, intente de nuevo</p>";
    }
    
    document.getElementById("five_1").innerHTML = str;
    
}

//plugin bootstrap minus and plus
$('.btn-number').click(function(e){
    e.preventDefault();