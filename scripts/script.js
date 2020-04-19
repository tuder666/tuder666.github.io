function move(){
	var a= 0;
	clearInterval(a);
	var el = document.getElementById("slider");
	var butt = document.getElementById("change");
	var text = document.getElementById("text");
	var pos = 100;
	var a = setInterval(amove, 0);
	function amove() {
		if(pos == 1100){
			clearInterval(a);
		}else{
			pos++;
			text.style.opacity = pos/6 + '%';
			el.style.height = pos + '%';
			change.style.top = pos + '%';
		}
	}
		document.getElementById("change").innerHTML='<button id="butt" onclick="moveb()">Закрыть</button>';
}
function moveb(){
	var a= 0;
	clearInterval(a);
	var el = document.getElementById("slider");
	var butt = document.getElementById("change");
		var text = document.getElementById("text");
	var pos = 1100;
	var a = setInterval(amove, 0);
	function amove() {
		if(pos == 100){
			clearInterval(a);
		}else{
			pos--;
			text.style.opacity =  pos/7 + '%';
			el.style.height = pos + '%';
			change.style.top = pos + '%';
		}
	}
		document.getElementById("change").innerHTML='<button id="butt" onclick="move()">Открой меня!</button>';
}