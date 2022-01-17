const open = document.getElementById("openModal");
const modal_container = document.getElementById("modal_container");
const close = document.getElementById("close");

open.addEventListener('click', ()=> {
    modal_container.classList.add('show');
})

close.addEventListener('click', () => {
    modal_container.classList.remove('show');
})
