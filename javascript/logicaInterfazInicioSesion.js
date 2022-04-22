document.querySelector('#btnIngresar').addEventListener('click', iniciarSesion);

function iniciarSesion(){
    var sCorreo = '';
    var sContraseña = '';
    var bAcceso = false;

    sCorreo = document.querySelector('#txtCorreo').value;
    sContraseña = document.querySelector('#txtContrasenna').value;

    bAcceso = validarCredenciales(sCorreo,sContraseña);
    
    if(bAcceso == true){
        ingresar();
    } else{
        alert('La clave o el correo no coincide');
    }
}

function ingresar(){
    var rol = sessionStorage.getItem('rolUsuarioActivo');
    switch(rol){
        case '1':
        window.location.href = 'home.html';
        break;
        case '2':
            window.location.href = 'home.html';
        break;

        case '3':
            window.location.href = 'home.html';
        break;

        default :
            window.location.href = 'iniciosesion.html';
        break;
    }
}