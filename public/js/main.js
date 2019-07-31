window.onload = function (){



document.querySelector(".form-control.form-control-sm.ml-3.w-75.searcher").addEventListener('keyup', function(e){ // TODO:
  var query = document.querySelector(".form-control.form-control-sm.ml-3.w-75.searcher").value // TODO:
  if(query){
    buscarPelicula(query);
  }else{
    location.href = "/" // TODO:
  }
})

}
function buscarProducto(buscar){
  fetch("" + buscar) // TODO:

  .then(function(resultado){
    console.log(resultado);
    return resultado.json()
  })

  .then(function(data){
    console.log(data);
    document.querySelector("").innerHTML = ""; // TODO: elprimero
    for (var i = 0; i < data.length; i++) {
      document.querySelector("").innerHTML += "<li>" + data[i].(WHAT???) + "</li>" // TODO:
    }
  })
  .catch(function(error){
    console.log(error)
  })
}
