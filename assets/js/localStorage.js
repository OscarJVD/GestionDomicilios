const btnSwitch = document.querySelector('#switch');

btnSwitch.addEventListener('click', () => {
    document.body.classList.toggle('dark');//añade o sobreescribe clase
    btnSwitch.classList.toggle('active');

    //Guardar el modo en LocalStorage
    if(document.body.classList.contains('dark')){
        localStorage.setItem('dark-mode','true');
    }else{
        localStorage.setItem('dark-mode','false');
    }
});

// Obtenemos el modo actual
if(localStorage.getItem('dark-mode') === 'true'){
    document.body.classList.add('dark');//añade a LocalStorage
    btnSwitch.classList.toggle('active');
}else{
    document.body.classList.remove('dark');//remueve de LocalStorage
    btnSwitch.classList.remove('active');
}