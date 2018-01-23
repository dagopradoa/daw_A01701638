function table(){
    
    let n = parseInt(prompt("Ingresa un numero","1"));
    let data = "<h4>Pruba 1</h4><table class='table table-striped'><thead><tr><th>n</th><th>n^2</th><th>n^3</th></tr></thead><tbody>";
    
    for(i = 1; i<=n; i++){
        data += "<tr><td>"+i+"</td><td>"+Math.pow(i,2)+"</td><td>"+Math.pow(i,3)+"</td></tr>";
    }
    data += "</tbody></table>";
    
    document.getElementById("js1").innerHTML = data;
}

function sum(){
    
    let x = Math.floor((Math.random() * 100) + 1);
    let y = Math.floor((Math.random() * 100) + 1);
    let str = x+"+"+y;
    let solve = "<h4>Prueba 2</h4><h5>"+str+": </h5>";
    let n = parseInt(prompt(str,"1"));
    let start_time = new Date();
    let end_time = new Date();
    let total_time = end_time - start_time;
    total_time /= 1000;
    
    if(n== x+y){
        solve += "<p>El resultado es correcto</p>";
    }else {
        solve += "<p>El resultado es incorrecto</p>";
    }
    solve += "<p>Tiempo: "+total_time+" segundos";
    
    document.getElementById("js1").innerHTML = solve;
    return 0; 
}

function prb3(){
    
    let str = "<h4>Prueba 3</h4>"
    str += "<div class='form-group'><label for='numbers'>Ingresa los valores separados por comas:</label><input id='contador' type='text' placeholder='-1,0,1,2,3,..,6' name='numb'></div>";
    str += "<div class='input-group-append'><button class='btn btn-primary' type='button' onclick='cont()'>Contar</button></div></div><div id='js1_3'></div>";
    document.getElementById("js1").innerHTML = str;
    
}

function cont(){
    let str = document.getElementById("contador").value.split(',');
    let solve = "<h4>Prueba 3</h4>"
    let neg=0, pos=0, zero=0;
    for(i=0;i<str.lenght;i++){
        if(parseInt(str[i])==0){
            cero++;
        }else if(parseInt(str[i])<0){
            neg++;
        }else if(parseInt(str[i])>0){
            pos++;
        }
    }
    solve += "<p>Tienes "+neg+" numero negativos, "+cero+" ceros y "+pos+" positivos</p>";
    document.getElementById("js1_3").innerHTML = solve;
}

function prb4(){
    
    let str = "<h4>Prueba 4</h4>";
    str += "<div class='form-group'><label for='numbers'>Ingresa los valores separados por comas:</label><input id='promedio' type='text' placeholder='-1,0,1,2,3,..,6' name='numb'></div>";
    str += "<div class='input-group-append'><button class='btn btn-primary' type='button' onclick='prom()'>Promediar</button></div></div><div id='js1_4'></div>";
    document.getElementById("js1").innerHTML = str;
    
}

function prom(){
    
    let str = document.getElementById("promedio").value.split(',');
    let solve = "<h4>Prueba 3</h4>"
    let aux=0, cont=0;
    for(i=0;i<str.lenght;i++){
        aux += parseInt(str[i]);
        cont++;
    }
    aux /= cont;
    solve += "<p>El promedio es:"+aux+".</p>";
    document.getElementById("js1_4").innerHTML = solve;
    
}

function prb5(){
    
    let str = "<h4>Prueba 5</h4>";
    str += "<div class='form-group'><label for='numbers'>Ingrese el numero a invertir:</label><input id='inversor' type='text' placeholder='1230' name='numb'></div>";
    str += "<div class='input-group-append'><button class='btn btn-primary' type='button' onclick='inv()'>Invertir</button></div></div><div id='js1_5'></div>";
    document.getElementById("js1").innerHTML = str;
    
}

function inv(){
    let str = document.getElementById("inversor").value.split(',');
    let solve = "<h4>Prueba 5</h4>"
    str += "";
    str = str.split("").reverse().join("");
    solve += "<p>El inverso es:"+str+".</p>";
    document.getElementById("js1_5").innerHTML = solve;
}