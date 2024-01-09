var sidenav = document.getElementById('mysidenav');
var openBtn = document.getElementById('openBtn');
var closeBtn = document.getElementById('closeBtn');
var histoire = document.getElementById('histoire')
var perso = document.getElementById('perso')
var placeoulieu = document.getElementById('placeoulieu')
var koukaki = document.getElementById('koukaki')



openBtn.addEventListener('click', function(){
    openBtnNav()
})

histoire.addEventListener('click', function(){
    closeBtnNav ()
})
perso.addEventListener('click', function(){
    closeBtnNav ()
})
placeoulieu.addEventListener('click', function(){
    closeBtnNav ()
})
koukaki.addEventListener('click', function(){
    closeBtnNav ()
})

closeBtn.addEventListener('click', function (){
    closeBtnNav()
})


function openBtnNav (){
    sidenav.classList.add('active1')
    openBtn.classList.add('active2')
    closeBtn.classList.add('active2')
}

function closeBtnNav (){
    sidenav.classList.remove('active1')
    openBtn.classList.remove('active2')
    closeBtn.classList.remove('active2')
}

