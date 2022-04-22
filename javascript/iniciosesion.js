  const Mision = document.getElementById("mision")
  const Vision = document.getElementById("vision")

  const mision = (texto = '',tiempo = 200, etiqueta = '') => {
    let arrayCaracteres = texto.split('')
    etiqueta.innerHTML = ''
    let cont = 0
    let escribir = setInterval(function(){
      etiqueta.innerHTML += arrayCaracteres[cont]
      cont++
      if (cont === arrayCaracteres.length) {
        clearInterval(escribir)
      }
    }, tiempo)
  }


  const vision = (texto = '',tiempo = 200, etiqueta = '') => {
    let arrayCaracteres = texto.split('')
    etiqueta.innerHTML = ''
    let cont = 0
    let escribir = setInterval(function(){
      etiqueta.innerHTML += arrayCaracteres[cont]
      cont++
      if (cont === arrayCaracteres.length) {
        clearInterval(escribir)
      }
    }, tiempo)
  }
  mision("Somos una Asociación líder en ofrecer mejores condiciones de vida para el Pensionado y el Adulto Mayor, fundamentando nuestras acciones en los valores especiales del ser humano.",80,Mision)
  vision("ANPISS reafirmará su liderazgo social en el país, mejorando las expectativas de los asociados, en busca de la excelencia, comprometiéndonos todos al desarrollo integral del equipo humano, aumentando nuestro recurso humano asociado cada año, convirtiéndonos en una verdadera fuerza dinámica que recupere la dignidad del Pensionado Colombiano.",40,Vision)
