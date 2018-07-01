var images = ['images/kitchen.jpg','images/bedkids.jpg','images/cushions.jpg'];

window.onload ;
var num = 0;
function next(){ 
var slider = document.getElementById('maincushion');
 num++;
 if (num>=images.length) {
 	num = 0;
 }
 slider.src = images[num];
}

function prev(){
	var slider = document.getElementById('maincushion');
	num--;
	if (num<0) {
		num = images.length-1;
	}
	slider.src = images[num];
}


setInterval(next,5000);

