fetch("modelodedatos.json")
.then(function(response){
    return response.json();
})
.then(function(datos){
    console.log(datos)
    for(let i = 0;i<datos.length;i++){
        document.getElementById("contienecolecciones").innerHTML += "<div class='boton'>"+datos[i].nombre+"</div>";
    }
    var botones = document.getElementsByClassName("boton")
    for(let i = 0;i<botones.length;i++){
        botones[i].onclick = function(){
            console.log("click")
            let campo = this.innerText
            console.log(campo)
             document.getElementById("contienecampos").innerHTML = ""
            for(let a = 0;a<datos.length;a++){
                console.log("el dato es:"+datos[a].nombre)
                console.log("el campo es:"+campo)
                if(datos[a].nombre == campo){
                    console.log("entramos aqui dentro")
                    console.log(datos[a])
                    for(let j = 0;j<datos[a].esquema.length;j++){
                        document.getElementById("contienecampos").innerHTML += "<input type='"+datos[a].esquema[j].tipo+"' name='"+datos[a].esquema[j].nombre+"' placeholder='"+datos[a].esquema[j].nombre+"'>"
                    }
                }
            }
            
        }
    }
    
})
