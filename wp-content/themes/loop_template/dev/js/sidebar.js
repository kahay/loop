// const list = document.querySelectorAll('.list');

// function accordion(e){
//     e.stopPropagation(); 
//     if(this.classList.contains('active')){
//         this.classList.remove('active');
//     }
//     else if(this.parentElement.parentElement.classList.contains('active')){
//         this.classList.add('active');
//     }
//     else{
//         for(i=0; i < list.length; i++){
//           list[i].classList.remove('active');
//         }
//             this.classList.add('active');
//         }
// }
// for(i = 0; i < list.length; i++ ){
//     list[i].addEventListener('click', accordion);
// }

document.addEventListener("DOMContentLoaded", function(event) {
  new MetisMenu('#menu1');
  new MetisMenu('#menu2');
});