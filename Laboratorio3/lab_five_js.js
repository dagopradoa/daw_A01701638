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
    if (pwd1.length!=pwd2.length){
        aux++;
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
    
function add_salsaverde(){
    var count_salsaverde= document.getElementById("salsa_verde");
    var count_sv = parseInt(count_salsaverde.value);
    count_sv++;
    count_salsaverde.value = count_sv;
    console.log("holi");
}

function remove_salsaverde(){
  var count_salsaverde= document.getElementById("salsa_verde");
  var count_sv = parseInt(count_salsaverde.value);
  if (count_sv >= 1) {
    count_sv--;
    count_salsaverde.value = count_sv;
    console.log("holi")
  }  
    console.log("no entro");
}

//salsa de cacahuate
var count_sc = 0;
    
function add_salsacacahuate(){
    var count_salsacacahuate = document.getElementById("salsa_cacahuate");
    var count_sc = parseInt(count_salsacacahuate.value);
    count_sc++;
    count_salsacacahuate.value = count_sc;
}

function remove_salsacacahuate(){
  var count_salsacacahuate = document.getElementById("salsa_cacahuate");
  var count_sc = parseInt(count_salsacacahuate.value);
  if (count_sc >= 1) {
    count_sc--;
    count_salsacacahuate.value = count_sc;
  }  
}

//guacamole
var count_sg = 0;
    
function add_guacamole(){
    var count_guacamole = document.getElementById("salsa_guacamole");
    var count_sg = parseInt(count_guacamole.value);
    count_sg++;
    count_guacamole.value = count_sg;
}

function remove_guacamole(){
  var count_guacamole = document.getElementById("salsa_guacamole");
  var count_sg = parseInt(count_guacamole.value);
  if (count_sg >= 1) {
    count_sg--;
    count_guacamole.value = count_sg;
  }  
}

function precio(){
}