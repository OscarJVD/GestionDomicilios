

function venConfirm(e) {
  e.preventDefault();
  if (Swal.fire({
    title: '¿Esta seguro de cancelar el servicio?',
    text: "Para revertir la operación cambie el estado en la papelera de reciclaje",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#4785e9',
    confirmButtonText: 'Aceptar',
    cancelButtonColor: '#c41',
    cancelButtonText: 'Cancelar'
  }).then((result) => {
    if (result.value) {
      Swal.fire(
        '¡Cancelado!',
        'El servicio ha sido cancelado (Redirigiendo...)',
        'success'
      );
      setTimeout(() => {
        window.location.href = e.target.href;
      }, 1000)
    }
  }));
}

function venConfirm2(e) {
  e.preventDefault();
  if (Swal.fire({
    title: '¿Esta seguro de finalizar el servicio?',
    text: "Para revertir la operación cambie el estado en la papelera de reciclaje",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#4785e9',
    confirmButtonText: 'Aceptar',
    cancelButtonColor: '#c41',
    cancelButtonText: 'Cancelar'
  }).then((result) => {
    if (result.value) {
      Swal.fire(
        'Hecho ¡Buen trabajo!',
        'El servicio ha sido finalizado con exito (Redirigiendo...)',
        'success'
      );
      setTimeout(() => {
        window.location.href = e.target.href;
      }, 1000)
    }
  }));
}

let btnsCan = document.getElementsByClassName("btnCancelar");
for (let btnCan of btnsCan) {
  btnCan.addEventListener("click", venConfirm);
}

let btnsFin = document.getElementsByClassName("btnFinalizar");
for (let btnFin of btnsFin) {
  btnFin.addEventListener("click", venConfirm2);
}