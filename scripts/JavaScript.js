//window.alert("Todas as imgs foram usadas para fins educativos")

var radio = document.querySelector(`.manual-btn`)
var cont = 1

document.getElementById(`radio1`).checked = true

setInterval(() => {
    nextImg()
}, 7000);

function nextImg(){
    cont++

    if(cont > 3){
        cont = 1
    }
    document.getElementById(`radio${cont}`).checked = true

}
//Fim dos slides


//menu select

const select_head = document.getElementsByClassName('select_head')[0];

select_head.addEventListener('mouseenter', function() {
  this.querySelector('select').style.display = 'block';
});

select_head.addEventListener('mouseleave', function() {
  this.querySelector('select').style.display = 'none';
});