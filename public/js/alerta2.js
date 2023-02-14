const boton = document.querySelector('#formulario');
boton.addEventListener('submit', aplicar);

function aplicar (e){
  e.preventDefault();
  const valor = document.querySelector('#foto').value;

  if(valor ===""){
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: 'Intentalo nuevamente',
      ConfirmButtonText: 'Confirmar'      
    })
  }else{
    Swal.fire({
      icon: 'success',
      title: 'Felicitaciones',
      showConfirmButton: false,
      timer: 1500
  })

  }

}