sections = gsap.utils.toArray(".panel");

function updateContent(num){

	// gsap.set([sections, contact], {display:'none'})

	// if(num==-1){

	// 	gsap.set(contact, {display:'block'})
	// }
	// else{

	// 	gsap.set(sections[num], {display:'block'})
	// }
	

}

jQuery(document).ready(function($) {

	// jQuery here hmm
	console.log('plugins.js loaded first');

});

let cloud1 = gsap.utils.toArray(".cloud.one");
let cloud2 = gsap.utils.toArray(".cloud.two");
let cloud3 = gsap.utils.toArray(".cloud.three");

if(cloud1){
gsap.to(cloud1, {x: '100vw', duration: 350, repeat:-1, ease:Linear});
gsap.to(cloud2, {x: '70vw', duration: 450, repeat:-1, ease:Linear});
gsap.to(cloud3, {x: '80vw', duration: 500, repeat:-1, ease:Linear});

}


$(".menu-burger").click(function(){
            
	document.getElementsByClassName('sidenav')[0].classList.add('open');

	document.getElementsByClassName('menu-burger')[0].classList.add('close');

	document.getElementsByClassName('menu-burger-close')[0].classList.add('open');

});

$(".menu-burger-close").click(function(){

	document.getElementsByClassName('sidenav')[0].classList.remove('open');

	document.getElementsByClassName('menu-burger')[0].classList.remove('close');

	document.getElementsByClassName('menu-burger-close')[0].classList.remove('open');

});
