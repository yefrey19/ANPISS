function obtenerListaUsuarios(){
    var listaUsuarios = JSON.parse(localStorage.getItem('listaUsuariosLs'));
    if(listaUsuarios == null){
        listaUsuarios = 
        [
            ['1', 'Jhony','Borja','jhony.borja@gmail.com','1borja9','1987-10-12','1'],
            ['2', 'Mireya','Moreno','luzmoreno@gmail.com','1moreno9','1993-04-17','2'],
            ['3', 'Moises','Espitia','espitia@gmail.com','1espitia9','1994-05-12','3']
        ]
    }
    return listaUsuarios;
}

function validarCredenciales(pCorreo, pContrasenna){
    var listaUsarios = obtenerListaUsuarios();
    var bAcceso = false;

    for(var i = 0; i < listaUsarios.length; i++){
        if(pCorreo == listaUsarios[i][3] && pContrasenna == listaUsarios[i][4]){
            bAcceso = true;
            sessionStorage.setItem('usuarioActivo', listaUsarios[i][1] + '' + listaUsarios[i][2] + '' + listaUsarios[i][3]);
            sessionStorage.setItem('rolUsuarioActivo', listaUsarios[i][6]);
        }
    }
    return bAcceso;
}