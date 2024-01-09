const images = document.getElementsByClassName('parallax');
const savedImagesData = [];

for (let image of images) {
	savedImagesData.push({
  	image,
    offset: image.offsetTop,
  });
}
let scrollValue = 0;

document.addEventListener('scroll', (ev) => {
    let scrollDirection = scrollValue>= window.scrollY;
	for (let savedImageData of savedImagesData) {
        if(savedImageData.offset + (window.scrollY * 0.5) > 220){
            savedImageData.image.style.marginTop = '220px';
        }
        else if(scrollDirection){
            savedImageData.image.style.marginTop = -(savedImageData.offset - (window.scrollY * 0.5)) + 'px';
        }
        else if(!scrollDirection){
            savedImageData.image.style.marginTop = (savedImageData.offset + (window.scrollY * 0.5)) + 'px';
        }
  }
  scrollValue = window.scrollY
});

const titreH = document.getElementsByClassName('titreH')[0]
let titleAfficherH = false

document.addEventListener('scroll', () => {

    if (!titleAfficherH && titreH.getBoundingClientRect().top <= 200){
        titleAfficherH = true
        titreH.classList.add('titreAnimation')
    }
});


const titreL = document.getElementsByClassName('titreL')[0]
let titleAfficherL = false

document.addEventListener('scroll', () => {

    if (!titleAfficherL && titreL.getBoundingClientRect().top <= 300){
        titleAfficherL = true
        titreL.classList.add('titreAnimation')
        console.log('moi')
    }
});
const titreP = document.getElementsByClassName('titreP')[0]
let titleAfficherP = false

document.addEventListener('scroll', () => {

    if (!titleAfficherP && titreP.getBoundingClientRect().top <= 200){
        titleAfficherP = true
        titreP.classList.add('titreAnimation')
        console.log('pas moi')
    }
});


const titreK = document.getElementsByClassName('titreK')[0]
let titleAfficherK = false

document.addEventListener('scroll', () => {

    if (!titleAfficherK && titreK.getBoundingClientRect().top <= 200){
        titleAfficherK = true
        titreK.classList.add('titreAnimation')
        console.log('ok')
    }
});


