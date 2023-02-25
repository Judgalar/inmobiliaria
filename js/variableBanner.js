let variable = document.getElementById('variable');
const x = ["servicio","garantía","un lujo."]
let i = 0;

let intervalo = setInterval(function(){
    variable.innerHTML = x[i];
    if(i<=2) i++;
    if(i>2) clearInterval(intervalo);
    }, 3000);



  