function whitebg(){
    document.getElementById("question6").style.backgroundColor = "white";
}

function greenletters(){
    document.getElementById("pregunta2").style.color = "limegreen";
    document.getElementById("respuesta2").style.color = "limegreen";
    document.getElementById("pregunta3").style.color = "limegreen";
    document.getElementById("respuesta3").style.color = "limegreen";
    document.getElementById("pregunta1").style.color = "limegreen";
    document.getElementById("respuesta1").style.color = "limegreen";
    document.getElementById("pregunta").style.color = "limegreen";
    document.getElementById("referees").style.color = "limegreen";
    document.getElementById("referencias").style.color = "limegreen";
}

function blackletters(){
    document.getElementById("pregunta2").style.color = "black";
    document.getElementById("respuesta2").style.color = "black";
    document.getElementById("pregunta3").style.color = "black";
    document.getElementById("respuesta3").style.color = "black";
    document.getElementById("pregunta1").style.color = "black";
    document.getElementById("respuesta1").style.color = "black";
    document.getElementById("pregunta").style.color = "black";
    document.getElementById("referees").style.color = "black";
    document.getElementById("referencias").style.color = "black";
}

var setfooter = setInterval(changeletters,2000);

function changeletters(){
    if(document.getElementById("footerlab").style.color == "aliceblue"){
        document.getElementById("footerlab").style.color = "lime";
    }else if(document.getElementById("footerlab").style.color == "lime"){
        document.getElementById("footerlab").style.color = "aliceblue";
    }
}

function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});