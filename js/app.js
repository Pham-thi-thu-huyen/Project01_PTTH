const minus = document.querySelector('.minus');
const number = document.querySelector('.number');
const plus = document.querySelector('.plus');

let a = 1;
plus.addEventListener('click', ()=>{
    a++;
    number.innerHTML=a;
});
minus.addEventListener('click', ()=>{
    if (a>1){
        a--;
        number.innerHTML=a;
    }
});