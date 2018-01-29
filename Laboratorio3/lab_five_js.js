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
}

function remove_salsaverde(){
  var count_salsaverde= document.getElementById("salsa_verde");
  var count_sv = parseInt(count_salsaverde.value);
  if (count_sv >= 1) {
    count_sv--;
    count_salsaverde.value = count_sv;
  }  
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

function impuesto(precio){
    return precio*1.16;
}

function precio_salsaverde(salsaverde){
    let precio = 16;
    return salsaverde*precio;
}

function precio_salsacacahuate(salsacacahuate){
    let precio = 18;
    return salsacacahuate*precio;    
}

function precio_guacamole(guacamole){
    let precio = 23;
    return guacamole*precio;
}

function precio(){
    let str = "<h5>PRECIO</h5><table class='table table-striped'><thead><tr><th>Producto</th><th>Cantidad</th><th>Precio</th><th>Precio Total</th><th>Impuesto</th></tr></thead><tbody>";
    let salsaverde = parseInt(document.getElementById("salsa_verde").value);
    let salsacacahuate = parseInt(document.getElementById("salsa_cacahuate").value);
    let guacamole = parseInt(document.getElementById("salsa_guacamole").value);
    let precio = precio_salsaverde(salsaverde)+precio_salsacacahuate(salsacacahuate)+precio_guacamole(guacamole);
    let imp = parseFloat(impuesto(precio_salsaverde(salsaverde)))+parseFloat(impuesto(precio_salsacacahuate(salsacacahuate)))+parseFloat(impuesto(precio_guacamole(guacamole)));
    if (salsaverde!=0){
        str += "<tr><td>Salsa Verde</td><td>"+salsaverde+"</td><td>16</td><td>"+precio_salsaverde(salsaverde)+"</td><td>"+parseFloat(impuesto(precio_salsaverde(salsaverde))).toFixed(2)+"</td></tr>"
    }
    if (salsacacahuate!=0){
        str += "<tr><td>Salsa de Cacahuate</td><td>"+salsacacahuate+"</td><td>18</td><td>"+precio_salsacacahuate(salsacacahuate)+"</td><td>"+parseFloat(impuesto(precio_salsacacahuate(salsacacahuate))).toFixed(2)+"</td></tr>"
    }
    if (guacamole!=0){
        str += "<tr><td>Guacamole</td><td>"+guacamole+"</td><td>23</td><td>"+precio_guacamole(guacamole)+"</td><td>"+parseFloat(impuesto(precio_guacamole(guacamole))).toFixed(2)+"</td></tr>"
    }
    str += "<tr><td></td><td>"+(salsacacahuate+salsaverde+guacamole)+"</td><td></td><td>"+precio+"</td><td>"+imp.toFixed(2)+"</td></tr>";
    str += "<tr><td></td><td></td><td></td><td>Total=</td><td>"+(precio+imp).toFixed(2)+"</td></tr></tbody></table>"
    
    document.getElementById("cobro").innerHTML = str;
    
}