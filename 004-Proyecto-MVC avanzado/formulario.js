fetch("modelodedatos.json")
.then(function(response){
    return response.json();
})
.then(function(datos){
    console.log(datos)
    for(let i = 0;i<datos.campos.length;i++){
        document.getElementById("contienecampos").innerHTML += "<input type='text' name='"+datos.campos[i]+"' placeholder='"+datos.campos[i]+"'>"
    }
})