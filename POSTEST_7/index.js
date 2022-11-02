const menu= document.querySelector('.menu input');
const nav= document.querySelector('nav ul');

menu.addEventListener('click',function() {
    nav.classList.toggle('slide');
});

const toggle = document.getElementById('toggle');
const navul = document.querySelector('nav ul');
const swipe = document.querySelector('.tbl');
const bground = document.getElementById('bground');
const footer = document.querySelector('footer');
const teks2 = document.getElementById('teks2');
const judul = document.querySelector('.name');
const body = document.querySelector("body");
toggle.onclick = function() {
    body.classList.toggle('aktif');
    toggle.classList.toggle('aktif');
    navul.classList.toggle('aktif');
    bground.classList.toggle('aktif');
    footer.classList.toggle('aktif');
    swipe.classList.toggle('aktif');
    teks2.classList.toggle('aktif');
    judul.classList.toggle('aktif');
};


var pntp = document.querySelector('.penutup');
pntp.style.color = 'maroon';
pntp.style.fontFamily = 'Blambot';

confirm('apakah anda sudah diatas 13 tahun ?\njik iya tekan ok untuk lanjut')
alert('login as admin \nusername : admin\npassword  : admin');
alert('login as member \nusername : user\npassword  : user');


document.getElementById("btn").addEventListener("click",function(){
    document.querySelector(".pop").style.display = "flex";
    document.querySelector(".isi2").style.display = "flex";
    document.querySelector(".container").style.display = "none"
})
