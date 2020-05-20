// const openModalButton = document.querySelectorAll('data-modal-target');
// const closeModalButton = document.querySelectorAll('data-close-button');
// const overlay = document.getElementById('overlay');

// openModalButton.forEach(button => {
//     button.addEventListener('click',() => {
//         const modal = document.querySelector(button.dataset.modalTarget)
//         openModal(modal);
//     })
// })

// closeModalButton.forEach(button => {
//     button.addEventListener('click',() => {
//         const modal = button.closest('.model');
//         closeModal(modal);
//     })
// })

// function openModal(modal){
//     if (modal == NULL)return 
//     modal.classList.add('active');
//     overlay.classList.add('active');
//     console.log('open');
// }

// function closeModal(modal){
//     if (modal == NULL)return 
//     modal.classList.remove('active');
//     overlay.classList.remove('active');
// }
var x = document.getElementById("exampleInputPassword2");
function showPassword() {
    console.log("yoo"); 
}

  x.addEventListener("click",showPassword);