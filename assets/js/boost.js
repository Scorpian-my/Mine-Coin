const body = document.body;
let coins = localStorage.getItem('coins');

body.querySelector('#balance').textContent = Number(coins).toLocaleString()

const turbo = body.querySelector('#turbo');
const charge = body.querySelector('#charge');

turbo.addEventListener('click' , ()=>{
    localStorage.setItem('count' , '40')
    setTimeout(()=> {
        localStorage.setItem('count' , '1')
    }, 5000)
})


charge.addEventListener('click' , ()=> {
    let total = localStorage.getItem('total')
    localStorage.setItem('power' , total)
})
