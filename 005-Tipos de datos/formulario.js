fetch("modelodedatos.json")
.then(function(response){
    return response.json();
})
.then(function(datos){
    console.log(datos)
    for(let i = 0;i<datos.campos.length;i++){
        document.getElementById("contienecampos").innerHTML += "<input type='"+datos.campos[i].tipo+"' name='"+datos.campos[i].nombre+"' placeholder='"+datos.campos[i].nombre+"'>"
    }
})