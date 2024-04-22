 let x_button=document.querySelector('.x-button')
let toggle_box=document.querySelector('.toggle')
let bar=document.querySelector('.bar')
bar.addEventListener('click',(event)=>{
    event.preventDefault();
toggle_box.classList.toggle('show-nav')
})



// bar.addEventListener('click', () => {
//     toggle_box.classList.add('show-nav');
// });

// x_button.addEventListener('click', () => {
//     toggle_box.classList.remove('show-nav');
// });