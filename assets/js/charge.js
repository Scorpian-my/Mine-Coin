setInterval(()=> {
    let count = localStorage.getItem('count')
    let total = localStorage.getItem('total')
    let power = localStorage.getItem('power');
    if(Number(total) > power){
        localStorage.setItem('power' , `${Number(power) + Number(count)}`);
    }
}, 1000);
