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
    
    let x = Math.floor((Math.random() * 10) + 1);
    let y = Math.floor((Math.random() * 20) + 1);
    let str = x+"+"+y;
    let solve = "<h4>Prueba 2</h4><h5>"+str+": </h5>";
    let start_time = new Date();
    let n = parseInt(prompt(str,"1"));
    let end_time = new Date();
    let total_time = parseInt(end_time.getSeconds() - start_time.getSeconds());
    
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
    
    let str = "<h4>Prueba 3</h4>";
    str += "<div class='form-group'><label for='numbers'>Ingresa los valores separados por comas:</label><input id='contador' type='text' placeholder='-1,0,1,2,3,..,6'></div>";
    str += "<div class='input-group-append'><button class='btn btn-primary' type='button' onclick='cont()'>Contar</button></div></div><div id='js1_3'></div>";
    document.getElementById("js1").innerHTML = str;
    
}

function cont(){
    var str = document.getElementById("contador").value.split(',');
    let solve = "<h4>Prueba 3</h4>";
    let neg=0, pos=0, zero=0;
    for(i=0;str[i]!=undefined;i++){
        if(parseInt(str[i])==0){
            zero++;
        }else if(parseInt(str[i])<0){
            neg++;
        }else if(parseInt(str[i])>0){
            pos++;
        }
    }
    solve += "<p>Tienes "+neg+" numero negativos, "+zero+" ceros y "+pos+" positivos</p>";
    document.getElementById("js1_3").innerHTML = solve;
}

function prb4(){
    
    let str = "<h4>Prueba 4</h4>";
    str += "<div class='form-group'><label for='numbers'>Ingresa los valores separados por comas y si es cambio de renglon punto y coma:</label><input id='promedio' type='text' placeholder='1,2,3;3,4,5;6,7,8;...0' name='numb'></div>";
    str += "<div class='input-group-append'><button class='btn btn-primary' type='button' onclick='prom()'>Promediar</button></div></div><div id='js1_4'></div>";
    document.getElementById("js1").innerHTML = str;
    
}

function prom(){
    
    let str = document.getElementById("promedio").value.split(';');
    for (i=0;str[i]!=undefined;i++){
        str[i]=str[i].split(',');
    }
    let solve = "<h4>Prueba 3</h4>";
    let aux=0, cont=[], tamaño=0;
    for(i=0;str[i]!=undefined;i++){
        aux = 0;
        tamaño = 0;
        for(j=0;str[i][j]!=undefined;j++){
            tamaño++;
            aux += parseInt(str[i][j]);
        }
        aux /= tamaño;
        cont.push(parseFloat(aux));
    }
    for(i=0;i<cont.length;i++){
        solve += "<p>El promedio "+(i+1)+" es: "+cont[i]+".</p>";
    }
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
    let solve = "<h4>Prueba 5</h4>";
    str += "";
    str = str.split("").reverse().join("");
    solve += "<p>El inverso es:"+str+".</p>";
    document.getElementById("js1_5").innerHTML = solve;
}

function prb6(){
    
    let str = "<h4>Prueba 6</h>";
    let a = parseInt(prompt("Ingresa el valor del lado 'a' del triángulo",1));
    console.log(a);
    let b = parseInt(prompt("Ingresa el valor del lado 'b' del triángulo",1));
    console.log(b);
    str += "<div class='input-group-append'><button class='btn btn-primary' type='button' onclick='(function(){"+trian+".hipotenusa();})()'>Hipotenusa</button></div></div><div class='input-group-append'><button class='btn btn-primary' type='button' onclick='(function(){"+trian+".perimetro();})()'>Perimetro</button></div></div><div class='input-group-append'><button class='btn btn-primary' type='button' onclick='(function(){"+trian+".area();})()'>Area</button></div></div><div id='js1_5'></div>";
    document.getElementById("js1").innerHTML = str;
    
    var trian = new triangulo(a,b);
    
}

function triangulo(a,b){
    
    this.a = a;
    this.b = b;
    
    this.hipotenusa = function(){
        let hipot = Math.sqrt((Math.pow(this.a,2))+(Math.pow(this.b,2)));
        let str = "<p>La hipotenusa es: "+hipot+".</p>";
        document.getElementById("js1_6").innerHTML = str;
    }
    
    this.perimetro = function(){
        let hipot = Math.sqrt((Math.pow(this.a,2))+(Math.pow(this.b,2)));
        let perim = this.a + this.b + hipot;
        let str = "<p>El perimetro es: "+perim+".</p>";
        document.getElementById("js1_6").innerHTML = str;
        
    }
    
    this.area = function(){
        let area = (this.a * this.b)/2;
        let str = "<p>El area es: "+area+".</p>";
        document.getElementById("js1_6").innerHTML = str;
    }
    
}