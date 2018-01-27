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

//minus and plus
//salsa roja
var count_sv = 1;
var count_salsaverde= document.getElementById("salsa_verde");
    
function add_salsaverde(){
    count_sv++;
    count_salsaverde.value = count_sr;
}

function remove_salsaroja(){
  if (count > 1) {
    count_sv--;
    count_salsaverde.value = count_sr;
  }  
}

//salsa de cacahuate
var count_sc = 1;
var count_salsacacahuate = document.getElementById("salsa_cacahuate");
    
function add_salsacacahuate(){
    count_sc++;
    count_salsacacahuate.value = count_sc;
}

function remove_salsacacahuate(){
  if (count > 1) {
    count_sc--;
    count_salsacacahuate.value = count_sc;
  }  
}

//guacamole
var count_sg = 1;
var count_guacamole = document.getElementById("salsa_guacamole");
    
function add_guacamole(){
    count_sg++;
    count_guacamole.value = count_sg;
}

function remove_guacamole(){
  if (count > 1) {
    count_sg--;
    count_guacamole.value = count_sg;
  }  
}