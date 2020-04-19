function left(){
	var a = 0;
	var b = 0;
	var el1 = document.getElementById("firstvid");
	var el2 = document.getElementById("secondvid");
	var butt2 = document.getElementById("left");
	var butt1 = document.getElementById("right");
	var pos1 = -105;
	var pos2 = 0;
	var a = setInterval(amove, 0);
	function amove() {
		if(pos1 == 0){
			clearInterval(a);
		}else{
			pos1++;
			el1.style.left = pos1 + '%';
		}
	}
		var b = setInterval(bmove, 0);
		function bmove() {
		if(pos2 == 105){
			clearInterval(b);
		}else{
			pos2++;
			el2.style.left = pos2 + '%';
		}
		butt1.style.opacity = 1;
		butt2.style.opacity = 0;
	}
}

function right(){
	var a = 0;
	var b = 0;
	var el1 = document.getElementById("firstvid");
	var el2 = document.getElementById("secondvid");
		var butt2 = document.getElementById("left");
	var butt1 = document.getElementById("right");
	var pos1 = 0;
	var pos2 = 105;
	var a = setInterval(cmove, 0);
	function cmove() {
		if(pos1 == -105){
			clearInterval(a);
		}else{
			pos1--;
			el1.style.left = pos1 + '%';
		}

	}
		var b = setInterval(dmove, 0);
		function dmove() {
		if(pos2 == 0){
			clearInterval(b);
		}else{
			pos2--;
			el2.style.left = pos2 + '%';
		}
			butt1.style.opacity = 0;
			butt2.style.opacity = 1;
	}
}
