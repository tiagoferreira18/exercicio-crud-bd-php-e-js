const primeira = document.querySelector('.primeira');
const segunda = document.querySelector('.segunda');
const media = document.querySelector('.media');
const situacao = document.querySelector('.situacao');;

primeira.addEventListener('input', function () {
    
    let nota1  = Number(primeira.value)
    let nota2 = Number(segunda.value)
    let resultado = Number(nota1+nota2)/2;
    document.querySelector('.media').value = resultado

   let situacaoA = "Aprovado"
   let situacaoB = "Reprovado"

    if(resultado >= 7){
        document.querySelector('.situacao').value = situacaoA;
    }else{
        document.querySelector('.situacao').value = situacaoB;
    }
   
    
})

segunda.addEventListener('input', function () {
    
    let nota1  = Number(primeira.value)
    let nota2 = Number(segunda.value)
    let resultado= Number(nota1+nota2)/2;
    document.querySelector('.media').value = resultado
    
    let situacaoA = "Aprovado"
    let situacaoB = "Reprovado"
 
     if(resultado >= 7){
         document.querySelector('.situacao').value = situacaoA;
     }else{
         document.querySelector('.situacao').value = situacaoB;
     }
    
     
 })






