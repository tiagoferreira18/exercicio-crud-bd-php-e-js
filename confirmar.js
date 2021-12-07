const excluir = document.querySelector('.excluir');

excluir.addEventListener('click', function (event) {
 
  // console.log('Opa,Clicou');
  let confirmar = confirm('Você realmente deseja excluir');
  if(confirmar == false){
    event.preventDefault()
  } else{

  }
  
})