alert("login sebagai admin\nusername : admin\npassword : postest");
alert("login sebagai member\nusername : member\npassword : postest");

document.getElementById("btn").addEventListener("click",function(){
    document.querySelector(".pop").style.display = "flex";
    document.querySelector(".isi2").style.display = "flex";
    document.querySelector(".container").style.display = "none"
})