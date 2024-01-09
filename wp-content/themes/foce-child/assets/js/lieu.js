

let after = document.getElementsByClassName('placeafter')
let before = document.getElementsByClassName('placebefore')
let body = document.getElementsByTagName('body')
let animationDone = false

document.addEventListener('scroll', function (){
	if(window.scrollY >= 2135 && !animationDone){
		animationDone = !animationDone
		after[0].style.animationName = 'nuage'
		before[0].style.animationName = 'nuage'
		body[0].style.overflow = 'hidden'
		setTimeout(() => {
			body[0].style.overflow = 'auto'
		}, 5500);
	}
	
})


let currentScrollPosition = window.scrollY;
let scrolling = false;

const lentVersRapide = () => {
  const rotationLent = document.getElementsByClassName('rotationLent');
  const rotationLentBefore = document.getElementsByClassName('rotationLentBefore');
  const rotationLentAfter = document.getElementsByClassName('rotationLentAfter');

  for (let i = rotationLent.length; i >= 0; i--) {
    rotationLent[i].classList.remove('rotationLent');
    rotationLent[i].classList.add('rotationRapide');
	console.log(rotationLent)
  }

  for (let i = 0; i < rotationLentBefore.length; i++) {
    rotationLentBefore[i].classList.remove('rotationLentBefore');
    rotationLentBefore[i].classList.add('rotationRapideBefore');
  }

  for (let i = 0; i < rotationLentAfter.length; i++) {
    rotationLentAfter[i].classList.remove('rotationLentAfter');
    rotationLentAfter[i].classList.add('rotationRapideAfter');
  }
};

const rapideVersLent = () => {
	const rotationRapide = document.getElementsByClassName('rotationRapide');
  	const rotationRapideBefore = document.getElementsByClassName('rotationRapideBefore');
  	const rotationRapideAfter = document.getElementsByClassName('rotationRapideAfter');
  
  for (let i = 0; i < rotationRapide.length; i++) {
	rotationRapide[i].classList.remove('rotationRapide');
    rotationRapide[i].classList.add('rotationLent');
  }

  for (let i = 0; i < rotationRapideBefore.length; i++) {
    rotationRapideBefore[i].classList.remove('rotationRapideBefore');
    rotationRapideBefore[i].classList.add('rotationLentBefore');
  }

  for (let i = 0; i < rotationRapideAfter.length; i++) {
	rotationRapideAfter[i].classList.remove('rotationRapideAfter');
    rotationRapideAfter[i].classList.add('rotationLentAfter');
  }
};

const changeRotationToRapide = () => {
    const rotationElements = document.getElementsByClassName    ('rotationElement');

    for (let i = 0; i < rotationElements.length; i++) {
      if (rotationElements[i].classList.contains('rotationLent')) {
         rotationElements[i].classList.remove('rotationLent');
      	 rotationElements[i].classList.add('rotationRapide');
    }
if (rotationElements[i].classList.contains('rotationLentBefore')) {
        rotationElements[i].classList.remove('rotationLentBefore');
      rotationElements[i].classList.add('rotationRapideBefore');
    }
    
    if (rotationElements[i].classList.contains('rotationLentAfter')) {
        rotationElements[i].classList.remove('rotationLentAfter');
      rotationElements[i].classList.add('rotationRapideAfter');
    }

  }
};

const changeRotationToLent = () => {
    const rotationElements = document.getElementsByClassName    ('rotationElement');

    for (let i = 0; i < rotationElements.length; i++) {    
    if (rotationElements[i].classList.contains('rotationRapide')) {
        rotationElements[i].classList.remove('rotationRapide');
      	rotationElements[i].classList.add('rotationLent');
    }
	if (rotationElements[i].classList.contains('rotationRapideBefore')) {
        rotationElements[i].classList.remove('rotationRapideBefore');
      rotationElements[i].classList.add('rotationLentBefore');
    }
    
    if (rotationElements[i].classList.contains('rotationRapideAfter')) {
        rotationElements[i].classList.remove('rotationRapideAfter');
      rotationElements[i].classList.add('rotationLentAfter');
    }
  }
};

setInterval(() => {
	
    if (currentScrollPosition !== window.scrollY && !scrolling) {
      scrolling = true;
    
	  changeRotationToRapide();
  } else if(currentScrollPosition === window.scrollY && scrolling){
      scrolling = false;

	  changeRotationToLent();
  }
  
  currentScrollPosition = window.scrollY;
}, 500);

